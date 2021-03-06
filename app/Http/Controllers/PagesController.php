<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\RegisteredCourse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\SendCode;
use App\Libraries\CustompasswordClass;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{

    protected $students;

    public function __construct()
    {
        $this->students      = new Student();
    }

    public function starting()
    {
        $welcome_msg = "Catholic University Student Portal";
        return view('frontend.pages.starting')->with('welcome_msg', $welcome_msg);
    }


    public function signup()
    {
        return view('frontend.pages.signup');
    }


    public function login()
    {
        return view('frontend.pages.login');
    }

    public function home()
    {
        $authCurrentStudent = Session::get('currentUserId');

        if (!$authCurrentStudent){
            Alert::toast('Please Register to View','error');
            return redirect()->route('pages.signup');

        }else{
            $student    = Auth::user();
            $activities = AcademicCalendar::paginate(2);
            //Alert::toast('Great job! login successfully','success');
            return view('frontend.pages.home', compact('activities','student'));

        }



    }


    public function profile()
    {
        // $student = Auth::user();
        // return view('frontend.pages.profile', compact('student'));

    }


    public function formvalidation($request)
    {
        return $this->validate($request, [
            'index_number'          =>     'required|min:13|max:13|unique:students,index_number|exists:registry_biodatas,Student Number',

        ]);

    }


    public function registerstore(Request $request)
    {
        $this->formvalidation($request);
        try
        {
            #Retriving fields
            $phone_number = RegisteredCourse::where('studentid',$request->index_number)->value('phone');
            $index_number = RegisteredCourse::where('studentid',$request->index_number)->value('studentid');
            #$email = RegisteredCourse::where('index_number',$request->index_number)->value('email');

            #save index_number
            $students = $this->students->create([
                'index_number' => $index_number
            ]);
            #send verification code
            if($students)
            {
                $students->code = SendCode::sendCode($phone_number);
                $students->save();

            }
            #send success message
            Alert::success('Congratulation', 'You have successfully registered for an account');
            return view('frontend.pages.verify', ['phone_number'=>$phone_number]);

            }
            catch (\Exception $exception) {
                DB::rollBack();
                Alert::toast('Regitration Unsuccessful, Try again','error');
                return view('frontend.pages.signup');

            }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginstore(Request $request)
    {
        $this->validate($request, [
            'index_number'       =>     'required|min:13|max:13|exists:registry_biodatas,Student Number',
            'password'           =>     'required|min:8|max:100',
        ]);

        //$studentID =  Student::where('index_number',$request->index_number)->value('index_number');

        $password =  RegisteredCourse::where('studentid',$request->index_number)->value('password');
        $customPassword = new CustompasswordClass();
        if($customPassword->convertPasswordToHash($request->password) === $password )
        {
            $studentID =  RegisteredCourse::where('studentid',$request->index_number)->value('studentid');
            // dd($studentID);
            Session::put('currentUserId', $studentID);

            Alert::toast('You have successfully login','success');
            return redirect()->route('pages.home');

        }
        else{

            Alert::toast('Oops! incorrect password. try again ','error');
            return redirect()->route('pages.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pages.login');
    }
}
