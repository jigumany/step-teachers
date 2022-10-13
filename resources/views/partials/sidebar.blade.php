<aside class="sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    <img src="{{ asset('plugins/images/users/hanna.jpg') }}" alt="user-img" class="img-circle">
                    <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Admin</a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">

                <li>
                    <a class="active waves-effect" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                        <i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu"> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-equalizer fa-fw"></i> 
                        <span class="hide-menu"> School Management </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.schools') }}">Schools</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-notebook fa-fw"></i> 
                        <span class="hide-menu"> Candidates </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.candidates') }}">Candidate List</a></li>
                        <li><a href="{{ route('admin.candidates.compliances') }}">Compliance</a></li>
                        {{-- <li><a href="{{ route('admin.candidates.reports') }}">Summary / Report</a></li> --}}
                        <li><a href="{{ route('admin.candidates.bookings') }}">Booking List</a></li>
                        <li><a href="{{ route('admin.candidates.scheduled.interviews') }}">Scheduled Interviews</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-grid fa-fw"></i> 
                        <span class="hide-menu"> Job Management</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.vacancies') }}">Vacancies</a></li>
                        {{-- <li><a href="#">Job Categories</a></li>
                        <li><a href="#">Job Status</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-pie-chart fa-fw"></i> 
                        <span class="hide-menu"> Billing</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin.placements') }}">Placements</a></li>
                        <li><a href="#">Sales Commission</a></li>
                        <li><a href="#">Invoices</a></li>
                        <li><a href="#">Placement Reports</a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-settings fa-fw"></i>
                        <span class="hide-menu"> Task Management</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Statuses</a></li>
                        <li><a href="#">Tags</a></li>
                        <li><a href="#">Tasks</a></li>
                        <li><a href="#">Placement Reports</a></li>
                    </ul>
                </li>

                <li>
                    <a href="" aria-expanded="false"><i class="icon-bulb fa-fw"></i> <span class="hide-menu"> User Alerts </span></a>
                </li>

                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-settings fa-fw"></i>
                        <span class="hide-menu"> Time Management</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">Work Types</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Timesheets</a></li>
                        <li><a href="#">Monthly Reports</a></li>
                    </ul>
                </li>

                <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false">
                        <i class="icon-envelope-letter fa-fw"></i> 
                        <span class="hide-menu"> Inbox </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li> 
                            <a href="{{ route('admin.mailbox') }}">Mail Box</a> 
                        </li>
                        <li> 
                            <a href="{{ route('admin.mailbox.mail.details') }}">Mail Details</a> 
                        </li>
                        <li> 
                            <a href="{{ route('admin.mailbox.compose.mail') }}">Compose Mail</a> 
                        </li>
                        <li> 
                            <a href="{{ route('admin.mailbox.mail.contact') }}">Contact</a> 
                        </li>
                        <li> 
                            <a href="{{ route('admin.mailbox.mail.contact.details') }}">Contact Detail</a> 
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.map') }}" aria-expanded="false">
                        <i class="icon-location-pin fa-fw"></i> 
                        <span class="hide-menu">Google Map</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.calender') }}" aria-expanded="false">
                        <i class="icon-calender fa-fw"></i> 
                        <span class="hide-menu">Calendar</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>