<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
        <!--brand name-->
        <a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
            <div class="float-left">
                <div>StudentPortal <i class="fa fa-caret-down pl-2"></i></div>
                <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>dashboard</span>
                </span>
            </div>
        </a>
        <!--/brand name-->

        <!--brand mega menu-->
        <div id="jq-dropdown-1" class="jq-dropdown">
            <div class="b-mega-menu">
                <div class="card card-shadow">
                    <div class="card-header p-2 pl-3">
                        <div class="navbar-brand mt-2">
                            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                            <div class="float-left">
                                <div>Student Portal Admin</div>
                                <span class="page-direction f12 weight300">
                                    <span>home</span>
                                    <i class="fa fa-angle-right"></i>
                                    <span>dashboard</span>
                                </span>
                            </div>
                        </div>

                        <div class="widget-action-link">
                            <ul class="nav nav-tabs wal-nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="analytics-tab" data-toggle="tab" href="#analytics" role="tab" aria-controls="analytics" aria-selected="false"><i class="fa fa-desktop"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false"><i class="fa fa-magnet"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="card-body p-0 ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row no-gutters">
                                    <div class="col-4 border-right">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home pr-2"></i> Application</a>
                                            <a class="nav-link" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false"><i class="fa fa-desktop pr-2"></i> Reports</a>
                                            <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false"><i class="fa fa-magnet pr-2"></i>Management</a>
                                            <a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false"><i class="fa fa-comments-o pr-2"></i>Blog</a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            {{-- <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Bootstrap 4 Stable</a></li>
                                                    <li class="active"><a href="javascript:;">DashLab Modern Admin</a></li>
                                                    <li><a href="#">Awesome Widgets Collection</a></li>
                                                    <li><a href="#">Developer Friendly Code</a></li>
                                                    <li><a href="#">SASS and GULP Task</a></li>
                                                    <li><a href="#">Fully Responsive</a></li>
                                                </ul>
                                            </div> --}}
                                            <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Daily Reports</a></li>
                                                    <li><a href="javascript:;">Weekly Reports</a></li>
                                                    <li class="active"><a href="#">Monthly Reports</a></li>
                                                    <li><a href="#">Yearly Reports</a></li>
                                                    <li><a href="#">HR Reports</a></li>
                                                    <li><a href="#">Product Reports</a></li>
                                                    <li><a href="#">Order Reports</a></li>
                                                    <li><a href="#">Revenue Reports</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">HR Management</a></li>
                                                    <li class="active"><a href="javascript:;">Product Management</a></li>
                                                    <li><a href="#">Role Management</a></li>
                                                    <li><a href="#">Sales Management</a></li>
                                                    <li><a href="#">Employee Management</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li class="active"><a href="#">Educational Blog</a></li>
                                                    <li> <a href="javascript:;">Technology Blog</a></li>
                                                    <li><a href="#">Political Blog</a></li>
                                                    <li><a href="#">Woocommerce Blog</a></li>
                                                    <li><a href="#">Entertainment Blog</a></li>
                                                    <li><a href="#">Newspapper Blog</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-desktop f50 text-muted mb-4"></i>
                                    <p class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                                    <a href="#" class="btn btn-primary">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-magnet f50 text-muted mb-4"></i>
                                    <p class="mb-5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                    <a href="#" class="btn btn-purple">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/brand mega menu-->

        <!--responsive nav toggle-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/responsive nav toggle-->

        <!--responsive rightside toogle-->
        <a href="javascript:;" class="nav-link right_side_toggle responsive-right-side-toggle">
            <i class="icon-options-vertical"> </i>
        </a>
        <!--/responsive rightside toogle-->

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <!--left side nav-->
            <ul class="navbar-nav left-side-nav" id="accordion">

                <li class="nav-item-search" data-toggle="tooltip" data-placement="right" title="Search">
                    <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                        <i class="vl_search"></i>
                        <span class="nav-link-text">
                            <input type="text" class="search-form" placeholder="Search Report"/>
                        </span>
                    </div>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#dashboard">
                        <i class="vl_calendar"></i>
                        <span class="nav-link-text">Academic Calendar </span>
                    </a>
                    <ul class="sidenav-second-level collapse show" id="dashboard" data-parent="#accordion">
                        {{-- <li class="active"> <a href="index.html">Academic Calender</a> </li> --}}
                        <li> <a href="{{route('admin.calendar.index')}}">View Calendar</a></li>
                        <li> <a href="{{route('admin.calendar.create')}}">Create Calendar</a></li>
                        <li> <a href="#">Edit Calendar</a></li>
                        <li> <a href="#">Delete Calendar</a></li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="UI Elements">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#ui_elements">
                        <i class="vl_slider-h-range"></i>
                        <span class="nav-link-text">Academic Timetable</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="ui_elements" data-parent="#accordion">
                        <li> <a href="#">View Timetable</a> </li>
                        <li> <a href="#">Create Timetable</a></li>
                        <li> <a href="dropdown.html">Edit Timetable</a></li>
                        <li> <a href="modals.html">Delete Timetable</a></li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Widgets">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#widgets">
                        <i class="vl_bond"></i>
                        <span class="nav-link-text">Courses</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="widgets" data-parent="#accordion">
                        <li> <a href="{{route('courses.add')}}">Add Courses</a> </li>
                        <li> <a href="{{route('semestercourse.add')}}">Add Semester Registered courses</a> </li>
                        <li> <a href="#">Edit courses</a> </li>
                        <li> <a href="#">Delete courses</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Icons">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#icons">
                        <i class="vl_hand-mike"></i>
                        <span class="nav-link-text">Announcement</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="icons" data-parent="#accordion">
                        <li> <a href="icon-fontawesome.html">View Announcement</a> </li>
                        <li> <a href="icon-simple-line.html">Create Announcement</a> </li>
                        <li> <a href="icon-themify.html">Edit Announcement</a> </li>
                        <li> <a href="icon-weather.html">Delete Announcement</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms">
                        <i class="vl_form"></i>
                        <span class="nav-link-text">Student Forms</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="forms" data-parent="#accordion">
                        <li> <a href="form-basic.html">View Forms</a> </li>
                        <li> <a href="form-checkbox-radio.html">Add Forms</a> </li>
                        <li> <a href="form-input-group.html">Edit forms</a> </li>
                        <li> <a href="form-validation.html">Delete Forms</a> </li>
                    </ul>
                </li>

                {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_grid-even"></i>
                        <span class="nav-link-text">Data Tables</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="d_tables" data-parent="#accordion">
                        <li> <a href="table-basic.html">Basic Table</a> </li>
                        <li> <a href="table-datatable.html">Data Table</a> </li>
                        <li> <a href="table-ajax-datatable.html">Ajax Data Table</a> </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_graph-bar"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="charts" data-parent="#accordion">
                        <li> <a href="chartjs.html">Chartjs</a> </li>
                        <li> <a href="echarts.html">eCharts</a> </li>
                        <li> <a href="amcharts.html">amCharts</a> </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#extra_pages">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Extra Pages</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="extra_pages" data-parent="#accordion">
                        <li> <a href="profile.html">Profile</a> </li>
                        <li> <a href="invoice.html">Invoice</a> </li>
                        <li> <a href="blank-page.html">Blank Page</a> </li>
                        <li> <a href="login.html">Login Page</a> </li>
                        <li> <a href="registration.html">Registration Page</a> </li>
                        <li> <a href="404.html">404 Error</a> </li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layouts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#layouts">
                        <i class="vl_board"></i>
                        <span class="nav-link-text">Layouts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="layouts" data-parent="#accordion">
                        <li> <a href="layout-top-nav.html">Top Nav </a></li>
                        <li> <a href="layout-dark-nav.html">Dark Left Nav</a> </li>
                        <li> <a href="blank-page.html">Light Left Nav</a> </li>
                        <li> <a href="layout-default-collapsed.html">Nav Collapsed Light</a></li>
                        <li> <a href="layout-dark-nav-collapsed.html">Nav Collapsed Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark.html">Floating Nav Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark-collapsed.html">Floating Collapsed Dark </a></li>
                        <li> <a href="layout-floating-leftside-light.html">Floating Nav Light </a></li>
                        <li> <a href="layout-floating-leftside-light-collapsed.html">Floating Collapsed Light </a></li>
                    </ul>
                </li> --}}

                {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu">
                        <i class="vl_sitemap1"></i>
                        <span class="nav-link-text">Menu Levels</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="multi_menu" data-parent="#accordion">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu_2">Third Level</a>
                            <ul class="sidenav-third-level collapse" id="multi_menu_2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}
            </ul>
            <!--/left side nav-->

            <!--nav push link-->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="left-nav-toggler">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <!--/nav push link-->

            <!--header leftside links-->
            <ul class="navbar-nav header-links">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Application
                    </a>
                    <div class="dropdown-menu" aria-labelledby="actionNav">
                        <a class="dropdown-item" href="#">Bootstrap 4 Stable</a>
                        <a class="dropdown-item" href="#">DashLab Modern Admin</a>
                        <a class="dropdown-item" href="#">Awesome Widgets Collection</a>
                        <a class="dropdown-item" href="#">Developer Friendly Code</a>
                        <a class="dropdown-item" href="#">SASS and GULP Task</a>
                        <a class="dropdown-item" href="#">Fully Responsive</a>
                        <a class="dropdown-item" href="#">Latest Version Plugins</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="reportNav">
                        <a class="dropdown-item" href="#">Daily Reports</a>
                        <a class="dropdown-item" href="#">Weekly Reports</a>
                        <a class="dropdown-item" href="#">Monthly Reports</a>
                        <a class="dropdown-item" href="#">Yearly Reports</a>
                        <a class="dropdown-item" href="#">HR Reports</a>
                        <a class="dropdown-item" href="#">Product Reports</a>
                        <a class="dropdown-item" href="#">Order Reports</a>
                        <a class="dropdown-item" href="#">Revenue Reports</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="orderNav">
                        <a class="dropdown-item" href="#">HR Management</a>
                        <a class="dropdown-item" href="#">Product Management</a>
                        <a class="dropdown-item" href="#">Role Management</a>
                        <a class="dropdown-item" href="#">Sales Management</a>
                        <a class="dropdown-item" href="#">Employee Management</a>
                    </div>
                </li>
            </ul>
            <!--/header leftside links-->

            <!--header rightside links-->
            <ul class="navbar-nav header-links ml-auto hide-arrow">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_chat-bubble"></i>
                        <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">9 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-danger"></span>
                            <span class="dot"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header weight500 ">Messages</h6>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                            </div>
                            <span class="weight500">Andrew Flinton</span>
                            <span class="small float-right text-muted">08:30 AM</span>

                            <div class="dropdown-message">
                                I hope that you will be there in time. See you then
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                            </div>
                            <span class="weight500">John Doe</span>
                            <span class="small float-right text-muted">10:28 AM</span>

                            <div class="dropdown-message">
                                Hello this is an example message. Just want to show how it looks
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                            </div>
                            <span class="weight500">Dash Don</span>
                            <span class="small float-right text-muted">07:12 PM</span>

                            <div class="dropdown-message">
                                Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                            <span class="weight500">dkmosa</span>
                            <span class="small float-right text-muted">12:10 PM</span>

                            <div class="dropdown-message">
                                We build a beautiful dashboard admin panel for professional
                            </div>
                        </a>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_bell"></i>
                        <span class="d-lg-none">Notification
                            <span class="badge badge-pill badge-warning">5 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-warning"></span>
                            <span class="dot bg-warning"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header weight500">Notification</h6>

                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-primary">
                            <span class="weight500">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                            <span class="small float-right text-muted">03:14 AM</span>

                            <div class="dropdown-message f12">
                                This week project update report generated. All team members are requested to check the updates
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-danger">
                            <span class="weight500">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                            <span class="small float-right text-muted">10:34 AM</span>

                            <div class="dropdown-message f12">
                                Unexpectedly server response stop. Responsible members are requested to fix it soon
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-success">
                            <span class="weight500">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                            <span class="small float-right text-muted">12:30 AM</span>

                            <div class="dropdown-message f12">
                                Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                            </div>
                        </a>

                        <a class="dropdown-item small" href="#">View all notification</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                        <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Sign Out</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link right_side_toggle">
                        <i class="icon-options-vertical"> </i>
                    </a>
                </li>
            </ul>
            <!--/header rightside links-->
        </div>
    </nav>


