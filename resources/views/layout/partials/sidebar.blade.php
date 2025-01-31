<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="{{url('index')}}" class="logo logo-normal">
            <img src="{{URL::asset('build/img/logo.png')}}" alt="Logo">
        </a>
        <a href="{{url('index')}}" class="logo-small">
            <img src="{{URL::asset('build/img/logo-small.svg')}}" alt="Logo">
        </a>
        <a href="{{url('index')}}" class="dark-logo">
            <img src="{{URL::asset('build/img/logo-white.svg')}}" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
            <p class="fs-10">System Admin</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="{{url('chat')}}">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="{{url('email')}}">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md onlin">
                <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                <p class="fs-10">System Admin</p>
            </div>
        </div>
        <div class="input-group input-group-flat d-inline-flex mb-4">
            <span class="input-icon-addon">
                <i class="ti ti-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search in HRMS">
            <span class="input-group-text">
                <kbd>CTRL + / </kbd>
            </span>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="{{url('calendar')}}" class="btn btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="{{url('chat')}}" class="btn btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                    <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="{{url('activity')}}" class="btn btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="{{url('email')}}" class="btn btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>MAIN MENU</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? 'active subdrop' : '' }}">
                                <i class="ti ti-smart-home"></i>
                                <span>Dashboard</span>
                               
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">HR Dashboard</a></li>
                                <!--<li><a href="{{url('employee-dashboard')}}" class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>-->
                            </ul>
                        </li>
                        
                        
                    </ul>
                </li>
               
                <li class="menu-title"><span>PROJECTS</span></li>
                <li>
                    <ul>
                        <!--<li class="{{ Request::is('clients-grid','clients') ? 'active' : '' }}">-->
                        <!--    <a href="{{url('clients-grid')}}">-->
                        <!--        <i class="ti ti-users-group"></i><span>Clients</span>-->
                        <!--    </a>-->
                        <!--</li>-->
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('projects-grid','tasks','task-board','projects','task-details') ? 'active' : '' }}">
                                <i class="ti ti-box"></i><span>Projects</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('projects-grid')}}" class="{{ Request::is('projects-grid','project-details','projects' ) ? 'active' : '' }}" >Projects</a></li>
                                <li><a href="{{url('tasks')}}" class="{{ Request::is('tasks','task-details') ? 'active' : '' }}">Tasks</a></li>
                                <li><a href="{{url('task-board')}}" class="{{ Request::is('task-board') ? 'active' : '' }}">Task Board</a></li>
                            </ul>
                        </li>								
                    </ul>
                </li>
                <!--<li class="menu-title"><span>CRM</span></li>-->
                <!--<li>-->
                <!--    <ul>-->
                <!--        <li class="{{ Request::is('contacts-grid','contacts','contact-details') ? 'active' : '' }}">-->
                <!--            <a href="{{url('contacts-grid')}}">-->
                <!--                <i class="ti ti-user-shield"></i><span>Contacts</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('companies-grid','companies-crm','company-details') ? 'active' : '' }}">-->
                <!--            <a href="{{url('companies-grid')}}">-->
                <!--                <i class="ti ti-building"></i><span>Companies</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('deals-grid','deals-details','deals') ? 'active' : '' }}">-->
                <!--            <a href="{{url('deals-grid')}}">-->
                <!--                <i class="ti ti-heart-handshake"></i><span>Deals</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('leads-grid','leads-details','leads') ? 'active' : '' }}">-->
                <!--            <a href="{{url('leads-grid')}}">-->
                <!--                <i class="ti ti-user-check"></i><span>Leads</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('pipeline') ? 'active' : '' }}">-->
                <!--            <a href="{{url('pipeline')}}">-->
                <!--                <i class="ti ti-timeline-event-text"></i><span>Pipeline</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('analytics') ? 'active' : '' }}">-->
                <!--            <a href="{{url('analytics')}}">-->
                <!--                <i class="ti ti-graph"></i><span>Analytics</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="{{ Request::is('activity') ? 'active' : '' }}">-->
                <!--            <a href="{{url('activity')}}">-->
                <!--                <i class="ti ti-activity"></i><span>Activities</span>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>							-->
                <!--</li>-->
     
                <li class="menu-title"><span>HRM</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('employees','employees-grid','employee-details','departments','designations','policy') ? 'active subdrop' : '' }}">
                                <i class="ti ti-users"></i><span>Employees</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('employees')}}" class="{{ Request::is('employees') ? 'active' : '' }}">Employee Lists</a></li>
                                {{-- <li><a href="{{url('employees-grid')}}" class="{{ Request::is('employees-grid') ? 'active' : '' }}">Employee Grid</a></li> --}}
                                {{-- <li><a href="{{url('employee-details')}}" class="{{ Request::is('employee-details') ? 'active' : '' }}">Employee Details</a></li> --}}
                                <li><a href="{{url('departments')}}" class="{{ Request::is('departments') ? 'active' : '' }}">Departments</a></li>
                                <li><a href="{{url('designations')}}" class="{{ Request::is('designations') ? 'active' : '' }}">Designations</a></li>
                              
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"  class="{{ Request::is('tickets','ticket-details','tickets-grid') ? 'active' : '' }}">
                                <i class="ti ti-ticket"></i><span>Tickets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('tickets')}}" class="{{ Request::is('tickets','tickets-grid') ? 'active' : '' }}">Tickets</a></li>
                                <li><a href="{{url('ticket-details')}}" class="{{ Request::is('ticket-details') ? 'active' : '' }}">Ticket Details</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('holidays') ? 'active' : '' }}">
                            <a href="{{url('holidays')}}">
                                <i class="ti ti-calendar-event"></i><span>Holidays</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime') ? 'active subdrop' : '' }}">
                                <i class="ti ti-file-time"></i><span>Attendance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings') ? 'active subdrop' : '' }}">Leaves<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{url('leaves')}}" class="{{ Request::is('leaves') ? 'active' : '' }}">Leaves (Admin)</a></li>
                                        <li><a href="{{url('leaves-employee')}}" class="{{ Request::is('leaves-employee') ? 'active' : '' }}">Leave (Employee)</a></li>
                                        <li><a href="{{url('leave-settings')}}" class="{{ Request::is('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>												
                                    </ul>												
                                </li>
                                <li><a href="{{url('attendance-admin')}}" class="{{ Request::is('attendance-admin') ? 'active subdrop' : '' }}">Attendance (Admin)</a></li>
                                <li><a href="{{url('attendance-employee')}}" class="{{ Request::is('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
                                <li><a href="{{url('timesheets')}}" class="{{ Request::is('timesheets') ? 'active' : '' }}">Timesheets</a></li>
                                <li><a href="{{url('schedule-timing')}}" class="{{ Request::is('schedule-timing') ? 'active' : '' }}">Shift & Schedule</a></li>
                                <li><a href="{{url('overtime')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Overtime</a></li>
                            </ul>
                        </li>
                      
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('training','trainers','training-type') ? 'active subdrop' : '' }}">
                                <i class="ti ti-edit"></i><span>Training</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('training')}}" class="{{ Request::is('training') ? 'active' : '' }}">Training List</a></li>
                                <li><a href="{{url('trainers')}}" class="{{ Request::is('trainers') ? 'active' : '' }}">Trainers</a></li>
                                <li><a href="{{url('training-type')}}" class="{{ Request::is('training-type') ? 'active' : '' }}">Training Type</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('promotion') ? 'active' : '' }}">
                            <a href="{{url('promotion')}}">
                                <i class="ti ti-speakerphone"></i><span>Promotion</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('resignation') ? 'active' : '' }}">
                            <a href="{{url('resignation')}}">
                                <i class="ti ti-external-link"></i><span>Resignation</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('termination') ? 'active' : '' }}">
                            <a href="{{url('termination')}}">
                                <i class="ti ti-circle-x"></i><span>Termination</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('estimates','invoice','payments','expenses','provident-fund','taxes') ? 'active subdrop' : '' }}">
                                <i class="ti ti-shopping-cart-dollar"></i><span>Sales</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('estimates')}}" class="{{ Request::is('estimates') ? 'active' : '' }}">Estimates</a></li>
                                <li><a href="{{url('invoice')}}" class="{{ Request::is('invoice') ? 'active' : '' }}">Invoices</a></li>
                                <li><a href="{{url('payments')}}" class="{{ Request::is('payments') ? 'active' : '' }}">Payments</a></li>
                                <li><a href="{{url('expenses')}}" class="{{ Request::is('expenses') ? 'active' : '' }}">Expenses</a></li>
                                <li><a href="{{url('provident-fund')}}" class="{{ Request::is('provident-fund') ? 'active' : '' }}">Provident Fund</a></li>
                                <li><a href="{{url('taxes')}}" class="{{ Request::is('taxes') ? 'active' : '' }}">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('categories','budgets','budget-expenses','budget-revenues') ? 'active subdrop' : '' }}">
                                <i class="ti ti-file-dollar"></i><span>Accounting</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('categories')}}" class="{{ Request::is('categories') ? 'active' : '' }}">Categories</a></li>
                                <li><a href="{{url('budgets')}}" class="{{ Request::is('budgets') ? 'active' : '' }}">Budgets</a></li>
                                <li><a href="{{url('budget-expenses')}}" class="{{ Request::is('budget-expenses') ? 'active' : '' }}">Budget Expenses</a></li>
                                <li><a href="{{url('budget-revenues')}}" class="{{ Request::is('budget-revenues') ? 'active' : '' }}">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('employee-salary','payslip','payroll') ? 'active subdrop' : '' }}">
                                <i class="ti ti-cash"></i><span>Payroll</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('employee-salary')}}" class="{{ Request::is('employee-salary') ? 'active' : '' }}">Employee Salary</a></li>
                                <li><a href="{{url('payslip')}}" class="{{ Request::is('payslip') ? 'active' : '' }}">Payslip</a></li>
                                <li><a href="{{url('payroll')}}" class="{{ Request::is('payroll') ? 'active' : '' }}">Payroll Items</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>						
                
            
            
                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Horizontal Menu -->
<div class="sidebar sidebar-horizontal" id="horizontal-menu">
    <div class="sidebar-menu">
        <div class="main-menu">
            <ul class="nav-menu">
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"   class="{{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? 'active subdrop' : '' }}">
                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">Admin Dashboard</a></li>
                        <li><a href="{{url('employee-dashboard')}}" class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>
                        
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('dashboard','companies','subscription','packages','packages-grid','domain','purchase-transaction') ? 'active subdrop' : '' }}">
                        <i class="ti ti-user-star"></i><span>Super Admin</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{url('dashboard')}}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="{{url('companies')}}"  class="{{ Request::is('companies') ? 'active' : '' }}">Companies</a></li>
                        <li><a href="{{url('subscription')}}" class="{{ Request::is('subscription') ? 'active' : '' }}">Subscriptions</a></li>
                        <li><a href="{{url('packages')}}" class="{{ Request::is('packages','packages-grid') ? 'active' : '' }}">Packages</a></li>
                        <li><a href="{{url('domain')}}" class="{{ Request::is('domain') ? 'active' : '' }}">Domain</a></li>
                        <li><a href="{{url('purchase-transaction')}}" class="{{ Request::is('purchase-transaction') ? 'active' : '' }}">Purchase Transaction</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('chat','voice-call','video-call','outgoing-call','incoming-call','call-history',
                            'calendar','email','todo','notes','social-feed','file-manager','kanban-view','invoices','invoice-details') ? ' subdrop active ' : '' }}">
                        <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{url('chat')}}" class="{{ Request::is('chat') ? 'active' : '' }}">Chat</a></li>
                        <li class="submenu submenu-two">
                            <a href="{{url('call')}}" class="{{ Request::is('voice-call','video-call','outgoing-call','incoming-call','call-history') ? 'active subdrop' : '' }}">Calls<span class="menu-arrow inside-submenu"></span></a>
                            <ul>
                                <li><a href="{{url('voice-call')}}" class="{{ Request::is('voice-call') ? 'active' : '' }}">Voice Call</a></li>
                                <li><a href="{{url('video-call')}}" class="{{ Request::is('video-call') ? 'active' : '' }}">Video Call</a></li>
                                <li><a href="{{url('outgoing-call')}}"  class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
                                <li><a href="{{url('incoming-call')}}" class="{{ Request::is('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
                                <li><a href="{{url('call-history')}}"  class="{{ Request::is('call-history') ? 'active' : '' }}">Call History</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('calendar')}}" class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a></li>
                        <li><a href="{{url('email')}}" class="{{ Request::is('email') ? 'active' : '' }}">Email</a></li>
                        <li><a href="{{url('todo')}}" class="{{ Request::is('todo') ? 'active' : '' }}">To Do</a></li>
                        <li><a href="{{url('notes')}}" class="{{ Request::is('notes') ? 'active' : '' }}">Notes</a></li>
                        <li><a href="{{url('social-feed')}}" class="{{ Request::is('social-feed') ? 'active' : '' }}">Social Feed</a></li>
                        <li><a href="{{url('file-manager')}}" class="{{ Request::is('file-manager') ? 'active' : '' }}">File Manager</a></li>
                        <li><a href="{{url('kanban-view')}}" class="{{ Request::is('kanban-view') ? 'active' : '' }}">Kanban</a></li>
                        <li><a href="{{url('invoices')}}" class="{{ Request::is('invoices','invoice-details') ? 'active' : '' }}">Invoices</a></li>
                    </ul>
                </li>
               
                <li class="submenu">
                    <a href="#" class="{{ Request::is('clients-grid','clients','projects-grid','projects','tasks','task-board',
                   'contacts-grid','contacts','contact-details','companies-grid','companies-crm','company-details','deals-grid','deals-details','deals','leads-grid','leads-details','leads','pipeline','analytics','activity',
                    'employees','employees-grid','employee-details','departments','designations','policy','tickets','tickets-grid','ticket-details','holidays','leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime','leaves','leaves-employee','leave-settings','performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type','training','trainers','training-type','promotion','resignation','termination') ? 'active ' : '' }}">
                        <i class="ti ti-user-star"></i><span>Projects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('clients-grid')}}" class="{{ Request::is('clients-grid','clients') ? 'active' : '' }}"><span>Clients</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"class="{{ Request::is('projects-grid','tasks','task-board','projects','project-details','task-details') ? 'active subdrop' : '' }}"><span>Projects</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('projects-grid')}}" class="{{ Request::is('projects-grid','project-details','projects') ? 'active' : '' }}">Projects</a></li>
                                <li><a href="{{url('tasks')}}" class="{{ Request::is('tasks','task-details') ? 'active' : '' }}">Tasks</a></li>
                                <li><a href="{{url('task-board')}}" class="{{ Request::is('task-board') ? 'active' : '' }}">Task Board</a></li>
                            </ul>
                        </li>		
                        <li class="submenu">
                            <a href="{{url('call')}}" class="{{ Request::is('contacts-grid','contacts','contact-details','companies-grid','companies-crm','company-details','deals-grid','deals-details','deals'
                            ,'leads-grid','leads-details','leads','pipeline','analytics','activity') ? 'active subdrop' : '' }}">Crm<span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{url('contacts-grid')}}" class="{{ Request::is('contacts-grid','contacts','contact-details') ? 'active' : '' }}"><span>Contacts</span></a></li>
                                <li><a href="{{url('companies-grid')}}" class="{{ Request::is('companies-grid','companies-crm','company-details') ? 'active' : '' }}"><span>Companies</span></a></li>
                                <li><a href="{{url('deals-grid')}}" class="{{ Request::is('deals-grid','deals-details','deals') ? 'active' : '' }}"><span>Deals</span></a></li>
                                <li><a href="{{url('leads-grid')}}" class="{{ Request::is('leads-grid','leads-details','leads') ? 'active' : '' }}"><span>Leads</span></a></li>
                                <li><a href="{{url('pipeline')}}" class="{{ Request::is('pipeline') ? 'active' : '' }}"><span>Pipeline</span></a></li>
                                <li><a href="{{url('analytics')}}" class="{{ Request::is('analytics') ? 'active' : '' }}"><span>Analytics</span></a></li>
                                <li><a href="{{url('activity')}}" class="{{ Request::is('activity') ? 'active' : '' }}"><span>Activities</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('employees','employees-grid','employee-details','departments','designations','policy') ? 'active subdrop' : '' }}"><span>Employees</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('employees')}}" class="{{ Request::is('employees') ? 'active' : '' }}">Employee Lists</a></li>
                                <li><a href="{{url('employees-grid')}}" class="{{ Request::is('employees-grid') ? 'active' : '' }}">Employee Grid</a></li>
                                <li><a href="{{url('employee-details')}}" class="{{ Request::is('employee-details') ? 'active' : '' }}">Employee Details</a></li>
                                <li><a href="{{url('departments')}}" class="{{ Request::is('departments') ? 'active' : '' }}">Departments</a></li>
                                <li><a href="{{url('designations')}}" class="{{ Request::is('designations') ? 'active' : '' }}">Designations</a></li>
                                <li><a href="{{url('policy')}}" class="{{ Request::is('policy') ? 'active' : '' }}">Policies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"  class="{{ Request::is('tickets','ticket-details','tickets-grid') ? 'active subdrop' : '' }}"><span>Tickets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('tickets')}}" class="{{ Request::is('tickets','tickets-grid') ? 'active' : '' }}">Tickets</a></li>
                                <li><a href="{{url('ticket-details')}}" class="{{ Request::is('ticket-details') ? 'active subdrop' : '' }}">Ticket Details</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('holidays') ? 'active' : '' }}"><a href="{{url('holidays')}}"><span>Holidays</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime') ? 'active subdrop' : '' }}"><span>Attendance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings') ? 'active subdrop' : '' }}">Leaves<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('leaves')}}" class="{{ Request::is('leaves') ? 'active' : '' }}" >Leaves (Admin)</a></li>
                                        <li><a href="{{url('leaves-employee')}}" class="{{ Request::is('leaves-employee') ? 'active' : '' }}">Leave (Employee)</a></li>
                                        <li><a href="{{url('leave-settings')}}" class="{{ Request::is('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>												
                                    </ul>												
                                </li>
                                <li><a href="{{url('attendance-admin')}}" class="{{ Request::is('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
                                <li><a href="{{url('attendance-employee')}}" class="{{ Request::is('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
                                <li><a href="{{url('timesheets')}}" class="{{ Request::is('timesheets') ? 'active' : '' }}">Timesheets</a></li>
                                <li><a href="{{url('schedule-timing')}}" class="{{ Request::is('schedule-timing') ? 'active' : '' }}">Shift & Schedule</a></li>
                                <li><a href="{{url('overtime')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Overtime</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type') ? 'active subdrop' : '' }}"><span>Performance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('performance-indicator')}}" class="{{ Request::is('performance-indicator') ? 'active' : '' }}">Performance Indicator</a></li>
                                <li><a href="{{url('performance-review')}}" class="{{ Request::is('performance-review') ? 'active' : '' }}">Performance Review</a></li>
                                <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Performance Appraisal</a></li>
                                <li><a href="{{url('goal-tracking')}}" class="{{ Request::is('goal-tracking') ? 'active' : '' }}">Goal List</a></li>
                                <li><a href="{{url('goal-type')}}" class="{{ Request::is('goal-type') ? 'active' : '' }}">Goal Type</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('training','trainers','training-type') ? 'active subdrop' : '' }}"><span>Training</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('training')}}" class="{{ Request::is('training') ? 'active' : '' }}">Training List</a></li>
                                <li><a href="{{url('trainers')}}" class="{{ Request::is('trainers') ? 'active' : '' }}">Trainers</a></li>
                                <li><a href="{{url('training-type')}}" class="{{ Request::is('training-type') ? 'active' : '' }}">Training Type</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('promotion')}}" class="{{ Request::is('promotion') ? 'active' : '' }}"><span>Promotion</span></a></li>
                        <li><a href="{{url('resignation')}}" class="{{ Request::is('resignation') ? 'active' : '' }}"><span>Resignation</span></a></li>
                        <li><a href="{{url('termination')}}"  class="{{ Request::is('termination') ? 'active' : '' }}"><span>Termination</span></a></li>														
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ Request::is('estimates','invoices','payments','expenses','provident-fund','taxes','categories','budgets','budget-expenses','budget-revenues','employee-salary','payslip','payroll',
                   'assets','asset-categories','knowledgebase','activity', 'users','roles-permissions','expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report',
                   'profile-settings','security-settings','notification-settings','connected-apps','bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings',
                    'salary-settings','approval-settings','invoice-settings','leave-type','custom-fields','email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode','payment-gateways','tax-rates','currencies','custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'active subdrop' : '' }}">
                        <i class="ti ti-user-star"></i><span>Administration</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('estimates','invoice','payments','expenses','provident-fund','taxes') ? 'active subdrop' : '' }}"><span>Sales</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('estimates')}}" class="{{ Request::is('estimates') ? 'active' : '' }}">Estimates</a></li>
                                <li><a href="{{url('invoice')}}" class="{{ Request::is('invoice') ? 'active' : '' }}">Invoices</a></li>
                                <li><a href="{{url('payments')}}" class="{{ Request::is('payments') ? 'active' : '' }}">Payments</a></li>
                                <li><a href="{{url('expenses')}}" class="{{ Request::is('expenses') ? 'active' : '' }}">Expenses</a></li>
                                <li><a href="{{url('provident-fund')}}" class="{{ Request::is('provident-fund') ? 'active' : '' }}">Provident Fund</a></li>
                                <li><a href="{{url('taxes')}}" class="{{ Request::is('taxes') ? 'active' : '' }}">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('categories','budgets','budget-expenses','budget-revenues') ? 'active subdrop' : '' }}"><span>Accounting</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('categories')}}" class="{{ Request::is('categories') ? 'active' : '' }}" >Categories</a></li>
                                <li><a href="{{url('budgets')}}" class="{{ Request::is('budgets') ? 'active' : '' }}">Budgets</a></li>
                                <li><a href="{{url('budget-expenses')}}" class="{{ Request::is('budget-expenses') ? 'active' : '' }}">Budget Expenses</a></li>
                                <li><a href="{{url('budget-revenues')}}" class="{{ Request::is('budget-revenues') ? 'active' : '' }}">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('employee-salary','payslip','payroll') ? 'active subdrop' : '' }}"><span>Payroll</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('employee-salary')}}" class="{{ Request::is('employee-salary') ? 'active' : '' }}">Employee Salary</a></li>
                                <li><a href="{{url('payslip')}}" class="{{ Request::is('payslip') ? 'active' : '' }}">Payslip</a></li>
                                <li><a href="{{url('payroll')}}" class="{{ Request::is('payroll') ? 'active' : '' }}">Payroll Items</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('assets','asset-categories') ? 'active subdrop' : '' }}"><span>Assets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('assets')}}" class="{{ Request::is('assets') ? 'active' : '' }}">Assets</a></li>
                                <li><a href="{{url('asset-categories')}}" class="{{ Request::is('asset-categories') ? 'active' : '' }}">Asset Categories</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('knowledgebase','knowledgebase-details','activity') ? 'active subdrop' : '' }}"><span>Help & Supports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('knowledgebase')}}" class="{{ Request::is('knowledgebase','knowledgebase-details') ? 'active' : '' }}">Knowledge Base</a></li>
                                <li><a href="{{url('activity')}}" class="{{ Request::is('activity') ? 'active' : '' }}">Activities</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('users','roles-permissions') ? 'active subdrop' : '' }}"><span>User Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('users')}}" class="{{ Request::is('users') ? 'active' : '' }}">Users</a></li>
                                <li><a href="{{url('roles-permissions')}}" class="{{ Request::is('roles-permissions') ? 'active' : '' }}">Roles & Permissions</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report') ? 'active subdrop' : '' }}"><span>Reports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{url('expenses-report')}}" class="{{ Request::is('expenses-report') ? 'active' : '' }}">Expense Report</a></li>
                                <li><a href="{{url('invoice-report')}}" class="{{ Request::is('invoice-report') ? 'active' : '' }}">Invoice Report</a></li>
                                <li><a href="{{url('payment-report')}}" class="{{ Request::is('payment-report') ? 'active' : '' }}">Payment Report</a></li>
                                <li><a href="{{url('project-report')}}" class="{{ Request::is('project-report') ? 'active' : '' }}">Project Report</a></li>
                                <li><a href="{{url('task-report')}}" class="{{ Request::is('task-report') ? 'active' : '' }}">Task Report</a></li>
                                <li><a href="{{url('user-report')}}" class="{{ Request::is('user-report') ? 'active' : '' }}">User Report</a></li>
                                <li><a href="{{url('employee-report')}}" class="{{ Request::is('employee-report') ? 'active' : '' }}">Employee Report</a></li>
                                <li><a href="{{url('payslip-report')}}" class="{{ Request::is('payslip-report') ? 'active' : '' }}">Payslip Report</a></li>
                                <li><a href="{{url('attendance-report')}}" class="{{ Request::is('attendance-report') ? 'active' : '' }}">Attendance Report</a></li>
                                <li><a href="{{url('leave-report')}}" class="{{ Request::is('leave-report') ? 'active' : '' }}">Leave Report</a></li>
                                <li><a href="{{url('daily-report')}}" class="{{ Request::is('daily-report') ? 'active' : '' }}">Daily Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="{{ Request::is('profile-settings','security-settings','notification-settings','connected-apps','bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings',
                            'salary-settings','approval-settings','invoice-settings','leave-type','custom-fields','email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode','payment-gateways','tax-rates','currencies','custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'active subdrop' : '' }}"><span>Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('profile-settings','security-settings','notification-settings','connected-apps') ? 'active subdrop' : '' }}">General Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('profile-settings')}}" class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profile</a></li>
                                        <li><a href="{{url('security-settings')}}" class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a></li>
                                        <li><a href="{{url('notification-settings')}}" class="{{ Request::is('notification-settings') ? 'active' : '' }}">Notifications</a></li>
                                        <li><a href="{{url('connected-apps')}}" class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings') ? 'active subdrop' : '' }}">Website Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('bussiness-settings')}}" class="{{ Request::is('bussiness-settings') ? 'active' : '' }}">Business Settings</a></li>
                                        <li><a href="{{url('seo-settings')}}" class="{{ Request::is('seo-settings') ? 'active' : '' }}">SEO Settings</a></li>
                                        <li><a href="{{url('localization-settings')}}" class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a></li>
                                        <li><a href="{{url('prefixes')}}" class="{{ Request::is('prefixes') ? 'active' : '' }}">Prefixes</a></li>
                                        <li><a href="{{url('preferences')}}" class="{{ Request::is('preferences') ? 'active' : '' }}">Preferences</a></li>
                                        <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Appearance</a></li>
                                        <li><a href="{{url('language')}}" class="{{ Request::is('language') ? 'active' : '' }}">Language</a></li>
                                        <li><a href="{{url('authentication-settings')}}" class="{{ Request::is('authentication-settings') ? 'active' : '' }}">Authentication</a></li>
                                        <li><a href="{{url('ai-settings')}}" class="{{ Request::is('ai-settings') ? 'active' : '' }}">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('salary-settings','approval-settings','invoice-settings','leave-type','custom-fields') ? 'active subdrop' : '' }}">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('salary-settings')}}" class="{{ Request::is('salary-settings') ? 'active' : '' }}">Salary Settings</a></li>
                                        <li><a href="{{url('approval-settings')}}" class="{{ Request::is('approval-settings') ? 'active' : '' }}">Approval Settings</a></li>
                                        <li><a href="{{url('invoice-settings')}}" class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Invoice Settings</a></li>
                                        <li><a href="{{url('leave-type')}}" class="{{ Request::is('leave-type') ? 'active' : '' }}">Leave Type</a></li>
                                        <li><a href="{{url('custom-fields')}}" class="{{ Request::is('custom-fields') ? 'active' : '' }}">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode') ? 'active subdrop' : '' }}">System Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('email-settings')}}" class="{{ Request::is('email-settings') ? 'active' : '' }}">Email Settings</a></li>
                                        <li><a href="{{url('email-template')}}" class="{{ Request::is('email-template') ? 'active' : '' }}">Email Templates</a></li>
                                        <li><a href="{{url('sms-settings')}}" class="{{ Request::is('sms-settings') ? 'active' : '' }}">SMS Settings</a></li>
                                        <li><a href="{{url('sms-template')}}" class="{{ Request::is('sms-template') ? 'active' : '' }}">SMS Templates</a></li>
                                        <li><a href="{{url('otp-settings')}}" class="{{ Request::is('otp-settings') ? 'active' : '' }}">OTP</a></li>
                                        <li><a href="{{url('gdpr')}}" class="{{ Request::is('gdpr') ? 'active' : '' }}">GDPR Cookies</a></li>
                                        <li><a href="{{url('maintenance-mode')}}" class="{{ Request::is('maintenance-mode') ? 'active' : '' }}">Maintenance Mode</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('payment-gateways','tax-rates','currencies') ? 'active subdrop' : '' }}">Financial Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('payment-gateways')}}" class="{{ Request::is('payment-gateways') ? 'active' : '' }}">Payment Gateways</a></li>
                                        <li><a href="{{url('tax-rates')}}" class="{{ Request::is('tax-rates') ? 'active' : '' }}">Tax Rate</a></li>
                                        <li><a href="{{url('currencies')}}" class="{{ Request::is('currencies') ? 'active' : '' }}">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'active subdrop' : '' }}">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('custom-css')}}" class="{{ Request::is('custom-css') ? 'active' : '' }}">Custom CSS</a></li>
                                        <li><a href="{{url('custom-js')}}" class="{{ Request::is('custom-js') ? 'active' : '' }}">Custom JS</a></li>
                                        <li><a href="{{url('cronjob')}}" class="{{ Request::is('cronjob') ? 'active' : '' }}">Cronjob</a></li>
                                        <li><a href="{{url('storage-settings')}}" class="{{ Request::is('storage-settings') ? 'active' : '' }}">Storage</a></li>
                                        <li><a href="{{url('ban-ip-address')}}" class="{{ Request::is('ban-ip-address') ? 'active' : '' }}">Ban IP Address</a></li>
                                        <li><a href="{{url('backup')}}" class="{{ Request::is('backup') ? 'active' : '' }}">Backup</a></li>
                                        <li><a href="{{url('clear-cache')}}" class="{{ Request::is('clear-cache') ? 'active' : '' }}">Clear Cache</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
               
            </ul>
            <div class="d-xl-flex align-items-center d-none">
                <a href="#" class="me-3 avatar avatar-sm">
                    <img src="{{URL::asset('build/img/profiles/avatar-07.jpg')}}" alt="profile" class="rounded-circle">
                </a>
                <a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
                    <i class="ti ti-sun"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /Horizontal Menu -->

<!-- Two Col Sidebar -->
<div class="two-col-sidebar" id="two-col-sidebar">
    <div class="sidebar sidebar-twocol">
        <div class="twocol-mini">
            <a href="{{url('index')}}" class="logo-small">
                <img src="{{URL::asset('build/img/logo-small.svg')}}" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist" aria-orientation="vertical">
                    <a href="#" class="nav-link {{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? ' show active ' : '' }}" title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
                        <i class="ti ti-smart-home"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('chat','voice-call','video-call','outgoing-call','incoming-call','call-history',
                            'calendar','email','todo','notes','social-feed','file-manager','kanban-view','invoices') ? ' show active ' : '' }}" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
                        <i class="ti ti-layout-grid-add"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('dashboard','companies','subscription','packages','domain','purchase-transaction') ? 'show active' : '' }}" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
                        <i class="ti ti-user-star"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('layout-horizontal','layout-detached','layout-modern',
                    'layout-two-column','layout-hovered','layout-box','layout-horizontal-single','layout-horizontal-overlay','layout-horizontal-box',
                    'layout-horizontal-sidemenu','layout-vertical-transparent','layout-without-header','layout-rtl','layout-dark') ? 'show active' : '' }}" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
                        <i class="ti ti-layout-board-split"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('clients','projects-grid','clients-grid','tasks','task-board','project-details','projects') ? ' show active ' : '' }}" title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
                        <i class="ti ti-users-group"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('contacts-grid','contacts','contact-details','companies-grid','companies-crm','company-details','deals-grid','deals-details','deals'
                            ,'leads-grid','leads-details','leads','pipeline','analytics','activity') ? 'show active' : '' }}" title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
                        <i class="ti ti-user-shield"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('employees','employees-grid','employee-details','departments','designations','policy','tickets','tickets-grid','ticket-details','holidays',
                        'leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime','performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type','training','trainers','training-type','promotion','resignation','termination') ? ' show active ' : '' }}" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
                        <i class="ti ti-user"></i>
                    </a>
                    <a href="#" class="nav-link {{Request::is('estimates','invoices','payments','expenses','provident-fund','taxes','categories','budgets','budget-expenses','budget-revenues','employee-salary','payslip','payroll') ? ' show active ' : '' }}" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
                        <i class="ti ti-shopping-cart-dollar"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('assets','asset-categories','knowledgebase','activity','users','roles-permissions',
                        'expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report',
                        'profile-settings','security-settings','notification-settings','connected-apps','bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings',
                            'salary-settings','approval-settings','invoice-settings','leave-type','custom-fields','email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode','payment-gateways','tax-rates','currencies','custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'show active ' : '' }}" title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
                        <i class="ti ti-cash"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('pages','blogs','blog-categories','blog-comments','blog-tags','countries','states','cities','testimonials','faq') ? '  active subdrop' : '' }}" title="Content" data-bs-toggle="tab" data-bs-target="#content">
                        <i class="ti ti-license"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('starter','profile','gallery','search-result','timeline','pricing','coming-soon','under-maintenance','under-construction','api-keys','privacy-policy','terms-condition') ? '  active subdrop' : '' }}" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
                        <i class="ti ti-page-break"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('login','login-2','login-3','register','register-2','register-3',
                    'forgot-password','forgot-password-2','forgot-password-3','reset-password','reset-password-2','reset-password-3','email-verification','email-verification-2','email-verification-3',
                   'two-step-verification','two-step-verification-2','two-step-verification-3','lock-screen','error-404','error-500' ) ? ' show active' : '' }} " title="Authentication" data-bs-toggle="tab"
                        data-bs-target="#authentication">
                        <i class="ti ti-lock-check"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('ui-alerts',
                                'ui-accordion',
                                'ui-avatar',
                                'ui-badges',
                                'ui-borders',
                                'ui-buttons',
                                'ui-buttons-group',
                                'ui-breadcrumb',
                                'ui-cards',
                                'ui-carousel',
                                'ui-colors',
                                'ui-dropdowns',
                                'ui-grid',
                                'ui-images',
                                'ui-lightbox',
                                'ui-media',
                                'ui-modals',
                                'ui-offcanvas',
                                'ui-pagination',
                                'ui-popovers',
                                'ui-progress',
                                'ui-placeholders',
                                'ui-spinner',
                                'ui-sweetalerts',
                                'ui-nav-tabs',
                                'ui-toasts',
                                'ui-tooltips',
                                'ui-typography',
                                'ui-video',
                                'ui-sortable',
                                'ui-swiperjs',
                                'ui-ribbon','ui-clipboard','ui-drag-drop',
                                'ui-rangeslider','ui-rating','ui-text-editor','ui-counter','ui-scrollbar','ui-stickynote','ui-timeline',
                                'form-basic-inputs',
                                'form-checkbox-radios',
                                'form-input-groups',
                                'form-grid-gutters',
                                'form-select',
                                'form-mask',
                                'form-fileupload',
                                'form-horizontal',
                                'form-vertical',
                                'form-floating-labels',
                                'form-validation',
                                'form-select2',
                                'form-wizard',
                                'form-pickers',
                                'tables-basic',
                                'data-tables',
                                'chart-apex','chart-c3','chart-js','chart-morris','chart-flot','chart-peity',
                                'icon-fontawesome','icon-tabler','icon-bootstrap',
                                'icon-remix','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify','icon-ionic',
                                'icon-material','icon-pe7','icon-simpleline','icon-themify','icon-weather','icon-typicon','icon-flag'
                                

                                ) ? ' show active ' : '' }}" title="UI Elements" data-bs-toggle="tab"
                        data-bs-target="#ui-elements">
                        <i class="ti ti-ux-circle"></i>
                    </a>
                    <a href="#" class="nav-link {{ Request::is('maps-vector','maps-leaflet') ? 'active' : '' }}" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
                        <i class="ti ti-vector-triangle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-right">
            <div class="sidebar-logo mb-4">
                <a href="{{url('index')}}" class="logo logo-normal">
                    <img src="{{URL::asset('build/img/logo.png')}}" alt="Logo">
                </a>
                <a href="{{url('index')}}" class="dark-logo">
                    <img src="{{URL::asset('build/img/logo-white.svg')}}" alt="Logo">
                </a>
            </div>
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade {{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? ' show active ' : '' }}" id="dashboard">
                        <ul>
                            <li class="menu-title"><span>MAIN MENU</span></li>
                            <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">Admin Dashboard</a></li>
                            <li><a href="{{url('employee-dashboard')}}" class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>
                            {{-- <li><a href="{{url('deals-dashboard')}}" class="{{ Request::is('deals-dashboard') ? 'active' : '' }}">Deals Dashboard</a></li>
                            <li><a href="{{url('leads-dashboard')}}" class="{{ Request::is('leads-dashboard') ? 'active' : '' }}">Leads Dashboard</a></li> --}}
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('chat','voice-call','video-call','outgoing-call','incoming-call','call-history',
                            'calendar','email','todo','notes','social-feed','file-manager','kanban-view','invoices','invoice-details') ? ' show active ' : '' }}" id="application">
                        <ul>
                            <li class="menu-title"><span>APPLICATION</span></li>
                            <li><a href="{{url('voice-call')}}"class="{{ Request::is('voice-call') ? 'active' : '' }}" >Voice Call</a></li>
                            <li><a href="{{url('video-call')}}" class="{{ Request::is('video-call') ? 'active' : '' }}">Video Call</a></li>
                            <li><a href="{{url('outgoing-call')}}" class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
                            <li><a href="{{url('incoming-call')}}" class="{{ Request::is('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
                            <li><a href="{{url('call-history')}}" class="{{ Request::is('call-history') ? 'active' : '' }}">Call History</a></li>
                            <li><a href="{{url('calendar')}}" class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a></li>
                            <li><a href="{{url('email')}}" class="{{ Request::is('email') ? 'active' : '' }}">Email</a></li>
                            <li><a href="{{url('todo')}}" class="{{ Request::is('todo') ? 'active' : '' }}">To Do</a></li>
                            <li><a href="{{url('notes')}}"class="{{ Request::is('notes') ? 'active' : '' }}">Notes</a></li>
                            <li><a href="{{url('social-active')}}" class="{{ Request::is('social-active') ? 'active' : '' }}">File Manager</a></li>
                            <li><a href="{{url('file-manager')}}" class="{{ Request::is('file-manager') ? 'active' : '' }}">File Manager</a></li>
                            <li><a href="{{url('kanban-view')}}" class="{{ Request::is('kanban-view') ? 'active' : '' }}">Kanban</a></li>
                            <li><a href="{{url('invoices')}}" class="{{ Request::is('invoices','invoice-details') ? 'active' : '' }}">Invoices</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('dashboard','companies','subscription','packages','packages-grid','domain','purchase-transaction') ? '  show active' : '' }}" id="super-admin">
                        <ul>
                            <li class="menu-title"><span>SUPER ADMIN</span></li>
                            <li><a href="{{url('dashboard')}}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                            <li><a href="{{url('companies')}}" class="{{ Request::is('companies') ? 'active' : '' }}">Companies</a></li>
                            <li><a href="{{url('subscription')}}" class="{{ Request::is('subscription') ? 'active' : '' }}">Subscriptions</a></li>
                            <li><a href="{{url('packages')}}" class="{{ Request::is('packages','packages-grid') ? 'active' : '' }}">Packages</a></li>
                            <li><a href="{{url('domain')}}" class="{{ Request::is('domain') ? 'active' : '' }}">Domain</a></li>
                            <li><a href="{{url('purchase-transaction')}}" class="{{ Request::is('purchase-transaction') ? 'active' : '' }}">Purchase Transaction</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('layout-horizontal','layout-detached','layout-modern',
                    'layout-two-column','layout-hovered','layout-box','layout-horizontal-single','layout-horizontal-overlay','layout-horizontal-box',
                    'layout-horizontal-sidemenu','layout-vertical-transparent','layout-without-header','layout-rtl','layout-dark') ? 'show active' : '' }}" id="layout">
                        <ul>
                            <li class="menu-title"><span>LAYOUT</span></li>
                            <li><a href="{{url('layout-horizontal')}}" class="{{ Request::is('layout-horizontal') ? 'active' : '' }}"><span>Horizontal</span></a></li>
                            <li><a href="{{url('layout-detached')}}" class="{{ Request::is('layout-detached') ? 'active' : '' }}"><span>Detached</span></a></li>
                            <li><a href="{{url('layout-modern')}}" class="{{ Request::is('layout-modern') ? 'active' : '' }}"><span>Modern</span></a></li>
                            <li><a href="{{url('layout-two-column')}}" class="{{ Request::is('layout-two-column') ? 'active' : '' }}"><span>Two Column </span></a></li>
                            <li><a href="{{url('layout-hovered')}}" class="{{ Request::is('layout-hovered') ? 'active' : '' }}"><span>Hovered</span></a></li>
                            <li><a href="{{url('layout-box')}}" class="{{ Request::is('layout-box') ? 'active' : '' }}"><span>Boxed</span></a></li>
                            <li><a href="{{url('layout-horizontal-single')}}" class="{{ Request::is('layout-horizontal-single') ? 'active' : '' }}"><span>Horizontal Single</span></a></li>
                            <li><a href="{{url('layout-horizontal-overlay')}}" class="{{ Request::is('layout-horizontal-overlay') ? 'active' : '' }}"><span>Horizontal Overlay</span></a></li>
                            <li><a href="{{url('layout-horizontal-box')}}" class="{{ Request::is('layout-horizontal-box') ? 'active' : '' }}"><span>Horizontal Box</span></a></li>
                            <li><a href="{{url('layout-horizontal-sidemenu')}}" class="{{ Request::is('layout-horizontal-sidemenu') ? 'active' : '' }}"><span>Menu Aside</span></a></li>
                            <li><a href="{{url('layout-vertical-transparent')}}" class="{{ Request::is('layout-vertical-transparent') ? 'active' : '' }}"><span>Transparent</span></a></li>
                            <li><a href="{{url('layout-without-header')}}" class="{{ Request::is('layout-without-header') ? 'active' : '' }}"><span>Without Header</span></a></li>
                            <li><a href="{{url('layout-rtl')}}" class="{{ Request::is('layout-rtl') ? 'active' : '' }}"><span>RTL</span></a></li>
                            <li><a href="{{url('layout-dark')}}" class="{{ Request::is('layout-dark') ? 'active' : '' }}"><span>Dark</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('projects-grid','clients-grid','clients','tasks','task-board','project-details','projects') ? 'show active ' : '' }}" id="projects">
                        <ul>
                            <li class="menu-title"><span>PROJECTS</span></li>
                            <li class="{{ Request::is('clients-grid','clients') ? 'active' : '' }}"><a href="{{url('clients-grid')}}">Clients</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><span>Projects</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('projects-grid')}}" class="{{ Request::is('projects-grid','project-details','projects') ? 'active' : '' }}">Projects</a></li>
                                    <li><a href="{{url('tasks')}}" class="{{ Request::is('tasks','task-details') ? 'active' : '' }}">Tasks</a></li>
                                    <li><a href="{{url('task-board')}}" class="{{ Request::is('task-board') ? 'active' : '' }}">Task Board</a></li>
                                </ul>
                            </li>	
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('contacts-grid','contacts','contact-details','companies-grid','companies-crm','company-details','deals-grid','deals-details','deals'
                            ,'leads-grid','leads-details','leads','pipeline','analytics','activity') ? ' show active ' : '' }}" id="crm">
                        <ul>
                            <li class="menu-title"><span>CRM</span></li>
                            <li><a href="{{url('contacts-grid')}}" class="{{ Request::is('contacts-grid','contacts','contact-details') ? 'active' : '' }}" ><span>Contacts</span></a></li>
                            <li><a href="{{url('companies-grid')}}" class="{{ Request::is('companies-grid','companies-crm','company-details') ? 'active' : '' }}"><span>Companies</span></a></li>
                            <li><a href="{{url('deals-grid')}}" class="{{ Request::is('deals-grid','deals-details','deals') ? 'active' : '' }}"><span>Deals</span></a></li>
                            <li><a href="{{url('leads-grid')}}" class="{{ Request::is('leads-grid','leads-details','leads') ? 'active' : '' }}"><span>Leads</span></a></li>
                            <li><a href="{{url('pipeline')}}" class="{{ Request::is('pipeline') ? 'active' : '' }}"><span>Pipeline</span></a></li>
                            <li><a href="{{url('analytics')}}" class="{{ Request::is('analytics') ? 'active' : '' }}"><span>Analytics</span></a></li>
                            <li><a href="{{url('activity')}}" class="{{ Request::is('activity') ? 'active' : '' }}"><span>Activities</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('employees','employees-grid','employee-details','departments','designations','policy',
                    'tickets','tickets-grid','ticket-details','holidays','leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime','performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type','training','trainers','training-type','promotion','resignation','termination') ? ' show active' : '' }}" id="hrm">
                        <ul>
                            <li class="menu-title"><span>HRM</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('employees','employees-grid','employee-details','departments','designations','policy') ? 'active subdrop' : '' }}"><span>Employees</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('employees')}}" class="{{ Request::is('employees') ? 'active' : '' }}">Employee Lists</a></li>
                                    <li><a href="{{url('employees-grid')}}" class="{{ Request::is('employees-grid') ? 'active' : '' }}">Employee Grid</a></li>
                                    <li><a href="{{url('employee-details')}}" class="{{ Request::is('employee-details') ? 'active' : '' }}">Employee Details</a></li>
                                    <li><a href="{{url('departments')}}" class="{{ Request::is('departments') ? 'active' : '' }}">Departments</a></li>
                                    <li><a href="{{url('designations')}}" class="{{ Request::is('designations') ? 'active' : '' }}">Designations</a></li>
                                    <li><a href="{{url('policy')}}" class="{{ Request::is('policy') ? 'active' : '' }}">Policies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('tickets','tickets-grid','ticket-details') ? 'active subdrop' : '' }}"><span>Tickets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('tickets')}}" class="{{ Request::is('tickets','tickets-grid') ? 'active' : '' }}">Tickets</a></li>
                                    <li><a href="{{url('ticket-details')}}" class="{{ Request::is('ticket-details') ? 'active' : '' }}">Ticket Details</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('holidays') ? 'active' : '' }}"><a href="{{url('holidays')}}"><span>Holidays</span></a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime') ? 'active subdrop' : '' }}"><span>Attendance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings') ? 'active subdrop' : '' }}">Leaves<span
                                                class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="{{url('leaves')}}" class="{{ Request::is('leaves') ? 'active' : '' }}">Leaves (Admin)</a></li>
                                            <li><a href="{{url('leaves-employee')}}" class="{{ Request::is('leaves-employee') ? 'active' : '' }}">Leave (Employee)</a></li>
                                            <li><a href="{{url('leave-settings')}}" class="{{ Request::is('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>												
                                        </ul>												
                                    </li>
                                    <li><a href="{{url('attendance-admin')}}" class="{{ Request::is('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
                                    <li><a href="{{url('attendance-employee')}}" class="{{ Request::is('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
                                    <li><a href="{{url('timesheets')}}" class="{{ Request::is('timesheets') ? 'active' : '' }}">Timesheets</a></li>
                                    <li><a href="{{url('schedule-timing')}}" class="{{ Request::is('schedule-timing') ? 'active' : '' }}">Shift & Schedule</a></li>
                                    <li><a href="{{url('overtime')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Overtime</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type') ? 'active subdrop' : '' }}"><span>Performance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('performance-indicator')}}" class="{{ Request::is('performance-indicator') ? 'active' : '' }}">Performance Indicator</a></li>
                                    <li><a href="{{url('performance-review')}}" class="{{ Request::is('performance-review') ? 'active' : '' }}">Performance Review</a></li>
                                    <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Performance Appraisal</a></li>
                                    <li><a href="{{url('goal-tracking')}}" class="{{ Request::is('goal-tracking') ? 'active' : '' }}">Goal List</a></li>
                                    <li><a href="{{url('goal-type')}}" class="{{ Request::is('goal-type') ? 'active' : '' }}">Goal Type</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('training','trainers','training-type','promotion','resignation','termination') ? 'active subdrop' : '' }}"><span>Training</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('training')}}" class="{{ Request::is('training') ? 'active' : '' }}">Training List</a></li>
                                    <li><a href="{{url('trainers')}}" class="{{ Request::is('trainers') ? 'active' : '' }}">Trainers</a></li>
                                    <li><a href="{{url('training-type')}}" class="{{ Request::is('training-type') ? 'active' : '' }}">Training Type</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('promotion')}}" class="{{ Request::is('promotion') ? 'active' : '' }}"><span>Promotion</span></a></li>
                            <li><a href="{{url('resignation')}}" class="{{ Request::is('resignation') ? 'active' : '' }}"><span>Resignation</span></a></li>
                            <li><a href="{{url('termination')}}" class="{{ Request::is('termination') ? 'active' : '' }}"><span>Termination</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('estimates','invoices','payments','expenses','provident-fund','taxes','categories','budgets','budget-expenses','budget-revenues','employee-salary','payslip','payroll',
                    ) ? ' show active' : '' }}" id="finance">
                        <ul>
                            <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('estimates','invoice','payments','expenses','provident-fund','taxes') ? 'active subdrop' : '' }}"><span>Sales</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('estimates')}}" class="{{ Request::is('estimates') ? 'active' : '' }}">Estimates</a></li>
                                    <li><a href="{{url('invoice')}}" class="{{ Request::is('invoice') ? 'active' : '' }}">Invoices</a></li>
                                    <li><a href="{{url('payments')}}" class="{{ Request::is('payments') ? 'active' : '' }}">Payments</a></li>
                                    <li><a href="{{url('expenses')}}" class="{{ Request::is('expenses') ? 'active' : '' }}">Expenses</a></li>
                                    <li><a href="{{url('provident-fund')}}" class="{{ Request::is('provident-fund') ? 'active' : '' }}">Provident Fund</a></li>
                                    <li><a href="{{url('taxes')}}" class="{{ Request::is('taxes') ? 'active' : '' }}">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('categories','budgets','budget-expenses','budget-revenues') ? 'active subdrop' : '' }}"><span>Accounting</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('categories')}}" class="{{ Request::is('categories') ? 'active' : '' }}">Categories</a></li>
                                    <li><a href="{{url('budgets')}}" class="{{ Request::is('budgets') ? 'active' : '' }}">Budgets</a></li>
                                    <li><a href="{{url('budget-expenses')}}" class="{{ Request::is('budget-expenses') ? 'active' : '' }}">Budget Expenses</a></li>
                                    <li><a href="{{url('budget-revenues')}}" class="{{ Request::is('budget-revenues') ? 'active' : '' }}">Budget Revenues</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('employee-salary','payslip','payroll') ? 'active subdrop' : '' }}"><span>Payroll</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('employee-salary')}}" class="{{ Request::is('employee-salary') ? 'active' : '' }}">Employee Salary</a></li>
                                    <li><a href="{{url('payslip')}}" class="{{ Request::is('payslip') ? 'active' : '' }}">Payslip</a></li>
                                    <li><a href="{{url('payroll')}}" class="{{ Request::is('payroll') ? 'active' : '' }}">Payroll Items</a></li>
                                </ul>
                            </li>									
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('assets',
                    'asset-categories',
                    'knowledgebase','activity',
                    'users','roles-permissions',
                    'expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report',
                    'profile-settings','security-settings','notification-settings','connected-apps',
                    'bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings',
                    'salary-settings','approval-settings','invoice-settings','leave-type','custom-fields',
                    'email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode',
                    'payment-gateways','tax-rates','currencies',
                    'custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache'
                    ) ? ' show active ' : '' }}" id="administration">
                        <ul>
                            <li class="menu-title"><span>ADMINISTRATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('assets','asset-categories') ? 'active subdrop' : '' }}"><span>Assets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('assets')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Assets</a></li>
                                    <li><a href="{{url('asset-categories')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Asset Categories</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('knowledgebase','knowledgebase-details','activity') ? 'active subdrop' : '' }}"><span>Help & Supports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('knowledgebase')}}" class="{{ Request::is('knowledgebase','knowledgebase-details') ? 'active' : '' }}">Knowledge Base</a></li>
                                    <li><a href="{{url('activity')}}" class="{{ Request::is('activity') ? 'active' : '' }}">Activities</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('users','roles-permissions') ? 'active subdrop' : '' }}"><span>User Management</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('users')}}" class="{{ Request::is('users') ? 'active' : '' }}">Users</a></li>
                                    <li><a href="{{url('roles-permissions')}}" class="{{ Request::is('roles-permissions') ? 'active' : '' }}">Roles & Permissions</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report') ? 'active subdrop' : '' }}"><span>Reports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('expenses-report')}}" class="{{ Request::is('expenses-report') ? 'active' : '' }}">Expense Report</a></li>
                                    <li><a href="{{url('invoice-report')}}" class="{{ Request::is('invoice-report') ? 'active' : '' }}">Invoice Report</a></li>
                                    <li><a href="{{url('payment-report')}}" class="{{ Request::is('payment-report') ? 'active' : '' }}">Payment Report</a></li>
                                    <li><a href="{{url('project-report')}}" class="{{ Request::is('project-report') ? 'active' : '' }}">Project Report</a></li>
                                    <li><a href="{{url('task-report')}}" class="{{ Request::is('task-report') ? 'active' : '' }}">Task Report</a></li>
                                    <li><a href="{{url('user-report')}}" class="{{ Request::is('user-report') ? 'active' : '' }}">User Report</a></li>
                                    <li><a href="{{url('employee-report')}}" class="{{ Request::is('employee-report') ? 'active' : '' }}">Employee Report</a></li>
                                    <li><a href="{{url('payslip-report')}}" class="{{ Request::is('payslip-report') ? 'active' : '' }}">Payslip Report</a></li>
                                    <li><a href="{{url('attendance-report')}}" class="{{ Request::is('attendance-repor') ? 'active' : '' }}">Attendance Report</a></li>
                                    <li><a href="{{url('leave-report')}}" class="{{ Request::is('leave-report') ? 'active' : '' }}">Leave Report</a></li>
                                    <li><a href="{{url('daily-report')}}" class="{{ Request::is('daily-report') ? 'active' : '' }}">Daily Report</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('profile-settings','security-settings','notification-settings','connected-apps') ? 'active subdrop' : '' }}">
                                    General Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('profile-settings')}}" class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profile</a></li>
                                    <li><a href="{{url('security-settings')}}" class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a></li>
                                    <li><a href="{{url('notification-settings')}}" class="{{ Request::is('notification-settings') ? 'active' : '' }}">Notifications</a></li>
                                    <li><a href="{{url('connected-apps')}}" class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected Apps</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings') ? 'active subdrop' : '' }}">
                                    Website Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('bussiness-settings')}}" class="{{ Request::is('bussiness-settings') ? 'active' : '' }}">Business Settings</a></li>
                                    <li><a href="{{url('seo-settings')}}" class="{{ Request::is('seo-settings') ? 'active' : '' }}">SEO Settings</a></li>
                                    <li><a href="{{url('localization-settings')}}" class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a></li>
                                    <li><a href="{{url('prefixes')}}" class="{{ Request::is('prefixes') ? 'active' : '' }}">Prefixes</a></li>
                                    <li><a href="{{url('preferences')}}" class="{{ Request::is('preferences') ? 'active' : '' }}">Preferences</a></li>
                                    <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Appearance</a></li>
                                    <li><a href="{{url('language')}}" class="{{ Request::is('language') ? 'active' : '' }}">Language</a></li>
                                    <li><a href="{{url('authentication-settings')}}" class="{{ Request::is('authentication-settings') ? 'active' : '' }}">Authentication</a></li>
                                    <li><a href="{{url('ai-settings')}}" class="{{ Request::is('ai-settings') ? 'active' : '' }}">AI Settings</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('salary-settings','approval-settings','invoice-settings','leave-type','custom-fields') ? 'active subdrop' : '' }}">App Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('salary-settings')}}" class="{{ Request::is('salary-settings') ? 'active' : '' }}">Salary Settings</a></li>
                                    <li><a href="{{url('approval-settings')}}" class="{{ Request::is('approval-settings') ? 'active' : '' }}">Approval Settings</a></li>
                                    <li><a href="{{url('invoice-settings')}}" class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Invoice Settings</a></li>
                                    <li><a href="{{url('leave-type')}}" class="{{ Request::is('leave-type') ? 'active' : '' }}">Leave Type</a></li>
                                    <li><a href="{{url('custom-fields')}}" class="{{ Request::is('custom-fields') ? 'active' : '' }}">Custom Fields</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode') ? 'active subdrop' : '' }}">
                                    System Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('email-settings')}}" class="{{ Request::is('email-settings') ? 'active' : '' }}">Email Settings</a></li>
                                    <li><a href="{{url('email-template')}}" class="{{ Request::is('email-template') ? 'active' : '' }}">Email Templates</a></li>
                                    <li><a href="{{url('sms-settings')}}" class="{{ Request::is('sms-settings') ? 'active' : '' }}">SMS Settings</a></li>
                                    <li><a href="{{url('sms-template')}}" class="{{ Request::is('sms-template') ? 'active' : '' }}">SMS Templates</a></li>
                                    <li><a href="{{url('otp-settings')}}" class="{{ Request::is('otp-settings') ? 'active' : '' }}">OTP</a></li>
                                    <li><a href="{{url('gdpr')}}" class="{{ Request::is('gdpr') ? 'active' : '' }}">GDPR Cookies</a></li>
                                    <li><a href="{{url('maintenance-mode')}}" class="{{ Request::is('maintenance-mode') ? 'active' : '' }}">Maintenance Mode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('payment-gateways','tax-rates','currencies') ? 'active subdrop' : '' }}">
                                    Financial Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('payment-gateways')}}" class="{{ Request::is('payment-gateways') ? 'active' : '' }}">Payment Gateways</a></li>
                                    <li><a href="{{url('tax-rates')}}" class="{{ Request::is('tax-rates') ? 'active' : '' }}">Tax Rate</a></li>
                                    <li><a href="{{url('currencies')}}" class="{{ Request::is('currencies') ? 'active' : '' }}">Currencies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'active subdrop' : '' }}">Other Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="{{url('custom-css')}}" class="{{ Request::is('custom-css') ? 'active' : '' }}">Custom CSS</a></li>
                                    <li><a href="{{url('custom-js')}}" class="{{ Request::is('custom-js') ? 'active' : '' }}">Custom JS</a></li>
                                    <li><a href="{{url('cronjob')}}" class="{{ Request::is('cronjob') ? 'active' : '' }}">Cronjob</a></li>
                                    <li><a href="{{url('storage-settings')}}" class="{{ Request::is('storage-settings') ? 'active' : '' }}">Storage</a></li>
                                    <li><a href="{{url('ban-ip-address')}}" class="{{ Request::is('ban-ip-address') ? 'active' : '' }}">Ban IP Address</a></li>
                                    <li><a href="{{url('backup')}}" class="{{ Request::is('backup') ? 'active' : '' }}">Backup</a></li>
                                    <li><a href="{{url('clear-cache')}}" class="{{ Request::is('clear-cache') ? 'active' : '' }}">Clear Cache</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('pages','blogs','blog-categories','blog-comments','blog-tags','countries','states','cities','testimonials','faq') ? 'active' : '' }}" id="content">
                        <ul>
                            <li class="menu-title"><span>CONTENT</span></li>
                            <li class="{{ Request::is('pages') ? 'active' : '' }}"><a href="{{url('pages')}}">Pages</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('blogs','blog-categories','blog-comments','blog-tags') ? 'active' : '' }}">
                                    Blogs
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('blogs')}}" class="{{ Request::is('blogs') ? 'active' : '' }}">All Blogs</a></li>
                                    <li><a href="{{url('blog-categories')}}" class="{{ Request::is('blog-categories') ? 'active' : '' }}">Categories</a></li>
                                    <li><a href="{{url('blog-comments')}}" class="{{ Request::is('blog-comments') ? 'active' : '' }}">Comments</a></li>
                                    <li><a href="{{url('blog-tags')}}" class="{{ Request::is('blog-tags') ? 'active' : '' }}">Blog Tags</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('countries','states','cities') ? 'active' : '' }}">
                                    Locations
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('countries')}}" class="{{ Request::is('countries') ? 'active' : '' }}">Countries</a></li>
                                    <li><a href="{{url('states')}}" class="{{ Request::is('states') ? 'active' : '' }}">States</a></li>
                                    <li><a href="{{url('cities')}}" class="{{ Request::is('cities') ? 'active' : '' }}">Cities</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('testimonials')}}" class="{{ Request::is('testimonials') ? 'active' : '' }}">Testimonials</a></li>
                            <li><a href="{{url('faq')}}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ’S</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('starter','profile','gallery','search-result','timeline','pricing','coming-soon','under-maintenance','under-construction','api-keys','privacy-policy','terms-condition'
                    ) ? ' show active' : '' }} " id="pages">
                        <ul>
                            <li class="menu-title"><span>PAGES</span></li>
                            <li><a href="{{url('starter')}}" class="{{ Request::is('starter') ? 'active' : '' }}"><span>Starter</span></a></li>
                            <li><a href="{{url('profile')}}" class="{{ Request::is('profile') ? 'active' : '' }}"><span>Profile</span></a></li>
                            <li><a href="{{url('gallery')}}" class="{{ Request::is('gallery') ? 'active' : '' }}"><span>Gallery</span></a></li>
                            <li><a href="{{url('search-result')}}" class="{{ Request::is('search-result') ? 'active' : '' }}"><span>Search Results</span></a></li>
                            <li><a href="{{url('timeline')}}" class="{{ Request::is('timeline') ? 'active' : '' }}"><span>Timeline</span></a></li>
                            <li><a href="{{url('pricing')}}" class="{{ Request::is('pricing') ? 'active' : '' }}"><span>Pricing</span></a></li>
                            <li><a href="{{url('coming-soon')}}" class="{{ Request::is('coming-soon') ? 'active' : '' }}"><span>Coming Soon</span></a></li>
                            <li><a href="{{url('under-maintenance')}}" class="{{ Request::is('under-maintenance') ? 'active' : '' }}"><span>Under Maintenance</span></a></li>
                            <li><a href="{{url('under-construction')}}" class="{{ Request::is('under-construction') ? 'active' : '' }}"><span>Under Construction</span></a></li>
                            <li><a href="{{url('api-keys')}}" class="{{ Request::is('api-keys') ? 'active' : '' }}"><span>API Keys</span></a></li>
                            <li><a href="{{url('privacy-policy')}}" class="{{ Request::is('privacy-policy') ? 'active' : '' }}"><span>Privacy Policy</span></a></li>
                            <li><a href="{{url('terms-condition')}}" class="{{ Request::is('terms-condition') ? 'active' : '' }}"><span>Terms & Conditions</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('login','login-2','login-3','register','register-2','register-3',
                    'forgot-password','forgot-password-2','forgot-password-3','reset-password','reset-password-2','reset-password-3','email-verification','email-verification-2','email-verification-3',
                   'two-step-verification','two-step-verification-2','two-step-verification-3','lock-screen','error-404','error-500' ) ? ' show active' : '' }} " id="authentication">
                        <ul>
                            <li class="menu-title"><span>AUTHENTICATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('login','login-2','login-3') ? 'active' : '' }}">
                                    Login<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('login')}}" class="{{ Request::is('login') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('login-2')}}" class="{{ Request::is('login-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('login-3')}}" class="{{ Request::is('login-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('register','register-2','register-3') ? 'active' : '' }}">
                                    Register<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('register')}}" class="{{ Request::is('register') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('register-2')}}" class="{{ Request::is('register-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('register-3')}}" class="{{ Request::is('register-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('forgot-password','forgot-password-2','forgot-password-3') ? 'active' : '' }}">
                                    Forgot Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('forgot-password')}}" class="{{ Request::is('forgot-password') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('forgot-password-2')}}" class="{{ Request::is('forgot-password-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('forgot-password-3')}}" class="{{ Request::is('forgot-password-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('reset-password','reset-password-2','reset-password-3') ? 'active' : '' }}">
                                    Reset Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('reset-password')}}" class="{{ Request::is('reset-password') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('reset-password-2')}}" class="{{ Request::is('reset-password-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('reset-password-3')}}" class="{{ Request::is('reset-password-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('email-verification','email-verification-2','email-verification-3') ? 'active' : '' }}">
                                    Email Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('email-verification')}}" class="{{ Request::is('email-verification') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('email-verification-2')}}" class="{{ Request::is('email-verification-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('email-verification-3')}}" class="{{ Request::is('email-verification-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="{{ Request::is('two-step-verification','two-step-verification-2','two-step-verification-3','lock-screen','error-404','error-500') ? 'active' : '' }}">
                                    2 Step Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="{{url('two-step-verification')}}" class="{{ Request::is('two-step-verification') ? 'active' : '' }}">Cover</a></li>
                                    <li><a href="{{url('two-step-verification-2')}}" class="{{ Request::is('two-step-verification-2') ? 'active' : '' }}">Illustration</a></li>
                                    <li><a href="{{url('two-step-verification-3')}}" class="{{ Request::is('two-step-verification-3') ? 'active' : '' }}">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('lock-screen')}}" class="{{ Request::is('lock-screen') ? 'active' : '' }}">Lock Screen</a></li>
                            <li><a href="{{url('error-404')}}" class="{{ Request::is('error-404') ? 'active' : '' }}">404 Error</a></li>
                            <li><a href="{{url('error-500')}}" class="{{ Request::is('error-500') ? 'active' : '' }}">500 Error</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade {{ Request::is('ui-alerts',
                                'ui-accordion',
                                'ui-avatar',
                                'ui-badges',
                                'ui-borders',
                                'ui-buttons',
                                'ui-buttons-group',
                                'ui-breadcrumb',
                                'ui-cards',
                                'ui-carousel',
                                'ui-colors',
                                'ui-dropdowns',
                                'ui-grid',
                                'ui-images',
                                'ui-lightbox',
                                'ui-media',
                                'ui-modals',
                                'ui-offcanvas',
                                'ui-pagination',
                                'ui-popovers',
                                'ui-progress',
                                'ui-placeholders',
                                'ui-spinner',
                                'ui-sweetalerts',
                                'ui-nav-tabs',
                                'ui-toasts',
                                'ui-tooltips',
                                'ui-typography',
                                'ui-video',
                                'ui-sortable',
                                'ui-swiperjs',
                                'ui-ribbon','ui-clipboard','ui-drag-drop',
                                'ui-rangeslider','ui-rating','ui-text-editor','ui-counter','ui-scrollbar','ui-stickynote','ui-timeline',
                                'form-basic-inputs',
                                'form-checkbox-radios',
                                'form-input-groups',
                                'form-grid-gutters',
                                'form-select',
                                'form-mask',
                                'form-fileupload',
                                'form-horizontal',
                                'form-vertical',
                                'form-floating-labels',
                                'form-validation',
                                'form-select2',
                                'form-wizard',
                                'form-pickers',
                                'tables-basic',
                                'data-tables',
                                'chart-apex','chart-c3','chart-js','chart-morris','chart-flot','chart-peity',
                                'icon-fontawesome','icon-tabler','icon-bootstrap',
                                'icon-remix','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline','icon-themify','icon-ionic',
                                'icon-material','icon-pe7','icon-simpleline','icon-themify','icon-weather','icon-typicon','icon-flag'
                                ) ? ' show active ' : '' }}" id="ui-elements">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Two Col Sidebar -->

<!-- Stacked Sidebar -->
<div class="stacked-sidebar" id="stacked-sidebar">
    <div class="sidebar sidebar-stacked" style="display: flex !important;">
        <div class="stacked-mini">
            <a href="{{url('index')}}" class="logo-small">
                <img src="{{URL::asset('build/img/logo-small.svg')}}" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="d-flex align-items-center flex-column">
                    <div class="mb-1 notification-item">
                        <a href="#" class="btn btn-menubar position-relative">
                            <i class="ti ti-bell"></i>
                            <span class="notification-status-dot"></span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="{{url('calendar')}}" class="btn btn-menubar">
                            <i class="ti ti-layout-grid-remove"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="{{url('chat')}}" class="btn btn-menubar position-relative">
                            <i class="ti ti-brand-hipchat"></i>
                            <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="{{url('email')}}" class="btn btn-menubar">
                            <i class="ti ti-mail"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-right d-flex justify-content-between flex-column">
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="{{URL::asset('build/img/profiles/avatar-02.jpg')}}" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="stack-menu">
                    <div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="#menu-dashboard" role="tab" class="nav-link {{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? ' show active ' : '' }}" title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
                                    <span><i class="ti ti-smart-home"></i></span>
                                    <p>Dashboard</p>
                                </a>
                            </div>
                           
                            <div class="col-6">
                                <a href="#menu-superadmin" role="tab" class="nav-link {{ Request::is('dashboard','companies','subscription','packages','domain','purchase-transaction') ? 'show active' : '' }}" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
                                    <span><i class="ti ti-user-star"></i></span>
                                    <p>Super Admin</p>
                                </a>
                            </div>
                           
                          
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade {{ Request::is('index','employee-dashboard','deals-dashboard','leads-dashboard') ? ' show active ' : '' }}"  id="menu-dashboard">
                            <ul class="stack-submenu">
                                <li><a href="{{url('index')}}" class="{{ Request::is('index') ? 'active' : '' }}">Admin Dashboard</a></li>
                                <li><a href="{{url('employee-dashboard')}}" class="{{ Request::is('employee-dashboard') ? 'active' : '' }}">Employee Dashboard</a></li>
                                <li><a href="{{url('deals-dashboard')}}" class="{{ Request::is('deals-dashboard') ? 'active' : '' }}">Deals Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('dashboard','companies','subscription','packages','packages-grid','domain','purchase-transaction') ? ' show active ' : '' }}" id="menu-superadmin">
                            <ul class="stack-submenu">
                        <li><a href="{{url('dashboard')}}" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                        <li><a href="{{url('companies')}}"  class="{{ Request::is('companies') ? 'active' : '' }}">Companies</a></li>
                        <li><a href="{{url('subscription')}}" class="{{ Request::is('subscription') ? 'active' : '' }}">Subscriptions</a></li>
                        <li><a href="{{url('packages')}}" class="{{ Request::is('packages','packages-grid') ? 'active' : '' }}">Packages</a></li>
                        <li><a href="{{url('domain')}}" class="{{ Request::is('domain') ? 'active' : '' }}">Domain</a></li>
                        <li><a href="{{url('purchase-transaction')}}" class="{{ Request::is('purchase-transaction') ? 'active' : '' }}">Purchase Transaction</a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('chat','voice-call','video-call','outgoing-call','incoming-call','call-history',
                            'calendar','email','todo','notes','social-feed','file-manager','kanban-view','invoices','invoice-details') ? ' show active ' : '' }}" id="menu-application">
                            <ul class="stack-submenu">
                                <li><a href="{{url('chat')}}" class="{{ Request::is('chat') ? 'active' : '' }}">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="{{url('call')}}" class="{{ Request::is('voice-call','video-call','outgoing-call','incoming-call','call-history') ? 'active' : '' }}">Calls<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="{{url('voice-call')}}" class="{{ Request::is('voice-call') ? 'active' : '' }}">Voice Call</a></li>
                                        <li><a href="{{url('video-call')}}" class="{{ Request::is('video-call') ? 'active' : '' }}">Video Call</a></li>
                                        <li><a href="{{url('outgoing-call')}}"  class="{{ Request::is('outgoing-call') ? 'active' : '' }}">Outgoing Call</a></li>
                                        <li><a href="{{url('incoming-call')}}" class="{{ Request::is('incoming-call') ? 'active' : '' }}">Incoming Call</a></li>
                                         <li><a href="{{url('call-history')}}"  class="{{ Request::is('call-history') ? 'active' : '' }}">Call History</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{url('calendar')}}" class="{{ Request::is('calendar') ? 'active' : '' }}">Calendar</a></li>
                                <li><a href="{{url('email')}}" class="{{ Request::is('email') ? 'active' : '' }}">Email</a></li>
                                <li><a href="{{url('todo')}}" class="{{ Request::is('todo') ? 'active' : '' }}">To Do</a></li>
                                <li><a href="{{url('notes')}}" class="{{ Request::is('notes') ? 'active' : '' }}">Notes</a></li>
                                <li><a href="{{url('file-manager')}}" class="{{ Request::is('file-manager') ? 'active' : '' }}">File Manager</a></li>
                                <li><a href="{{url('kanban-view')}}" class="{{ Request::is('kanban-view') ? 'active' : '' }}">Kanban</a></li>
                                <li><a href="{{url('invoices')}}" class="{{ Request::is('invoices','invoice-details') ? 'active' : '' }}">Invoices</a></li>
                            </ul>
                        </div>
                       
                        <div class="tab-pane fade {{ Request::is('clients-grid','clients','projects-grid','projects','tasks','task-details','task-board','project-details') ? ' show active ' : '' }}" id="menu-project">
                            <ul class="stack-submenu">
                                <li class="{{ Request::is('clients-grid','clients') ? 'active' : '' }}"><a href="{{url('clients-grid')}}"><span>Clients</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('projects-grid','projects','tasks','task-details','task-board','project-details') ? 'active subdrop' : '' }}"><span>Projects</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('projects-grid')}}" class="{{ Request::is('projects-grid','project-details','projects') ? 'active' : '' }}">Projects</a></li>
                                        <li><a href="{{url('tasks')}}" class="{{ Request::is('tasks','task-details') ? 'active' : '' }}">Tasks</a></li>
                                        <li><a href="{{url('task-board')}}" class="{{ Request::is('task-board') ? ' show active' : '' }}">Task Board</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('contacts-grid','contacts','contact-details','companies-grid','companies-crm','company-details','deals-grid','deals-details','deals'
                            ,'leads-grid','leads-details','leads','pipeline','analytics','activity') ? 'show active' : '' }}" id="menu-crm">
                            <ul class="stack-submenu">
                                <li class="{{ Request::is('contacts-grid','contacts','contact-details') ? 'active' : '' }}"><a href="{{url('contacts-grid')}}"><span>Contacts</span></a></li>
                                <li  class="{{ Request::is('companies-grid','companies-crm','company-details') ? 'active' : '' }}"><a href="{{url('companies-grid')}}"><span>Companies</span></a></li>
                                <li class="{{ Request::is('deals-grid','deals-details','deals') ? 'active' : '' }}"><a href="{{url('deals-grid')}}"><span>Deals</span></a></li>
                                <li class="{{ Request::is('leads-grid','leads-details','leads') ? 'active' : '' }}"><a href="{{url('leads-grid')}}"><span>Leads</span></a></li>
                                <li class="{{ Request::is('pipeline') ? 'active' : '' }}"><a href="{{url('pipeline')}}"><span>Pipeline</span></a></li>
                                <li class="{{ Request::is('analytics') ? 'active' : '' }}"><a href="{{url('analytics')}}"><span>Analytics</span></a></li>
                                <li class="{{ Request::is('activity') ? 'active' : '' }}"><a href="{{url('activity')}}"><span>Activities</span></a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('employees','employees-grid','employee-details','departments','designations','policy','tickets','tickets-grid','ticket-details','holidays',
                        'leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime','performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type','training','trainers','training-type','promotion','resignation','termination') ? ' show active ' : '' }}" id="menu-hrm">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('employees','employees-grid','employee-details','departments','designations','policy') ? 'active subdrop' : '' }}"><span>Employees</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('employees')}}" class="{{ Request::is('employees') ? 'active' : '' }}">Employee Lists</a></li>
                                        <li><a href="{{url('employees-grid')}}" class="{{ Request::is('employees-grid') ? 'active' : '' }}">Employee Grid</a></li>
                                        <li><a href="{{url('employee-details')}}" class="{{ Request::is('employee-details') ? 'active' : '' }}">Employee Details</a></li>
                                        <li><a href="{{url('departments')}}" class="{{ Request::is('departments') ? 'active' : '' }}">Departments</a></li>
                                        <li><a href="{{url('designations')}}" class="{{ Request::is('designations') ? 'active' : '' }}">Designations</a></li>
                                        <li><a href="{{url('policy')}}" class="{{ Request::is('policy') ? 'active' : '' }}">Policies</a></li>
        
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('tickets','ticket-details','tickets-grid') ? ' subdrop active ' : '' }}"><span>Tickets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('tickets')}}" class="{{ Request::is('tickets','tickets-grid') ? 'active' : '' }}">Tickets</a></li>
                                        <li><a href="{{url('ticket-details')}}" class="{{ Request::is('ticket-details') ? 'active' : '' }}">Ticket Details</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('holidays') ? 'active' : '' }}"><a href="{{url('holidays')}}"><span>Holidays</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings','attendance-admin','attendance-employee',
                            'timesheets','schedule-timing','overtime') ? 'active subdrop' : '' }}"><span>Attendance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="{{ Request::is('leaves','leaves-employee','leave-settings') ? 'active subdrop' : '' }}">Leaves<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="{{url('leaves')}}" class="{{ Request::is('leaves') ? 'active' : '' }}" >Leaves (Admin)</a></li>
                                                <li><a href="{{url('leaves-employee')}}" class="{{ Request::is('leaves-employee') ? 'active' : '' }}">Leave (Employee)</a></li>
                                                <li><a href="{{url('leave-settings')}}" class="{{ Request::is('leave-settings') ? 'active' : '' }}">Leave Settings</a></li>											
                                            </ul>												
                                        </li>
                                        <li><a href="{{url('attendance-admin')}}" class="{{ Request::is('attendance-admin') ? 'active' : '' }}">Attendance (Admin)</a></li>
                                <li><a href="{{url('attendance-employee')}}" class="{{ Request::is('attendance-employee') ? 'active' : '' }}">Attendance (Employee)</a></li>
                                <li><a href="{{url('timesheets')}}" class="{{ Request::is('timesheets') ? 'active' : '' }}">Timesheets</a></li>
                                <li><a href="{{url('schedule-timing')}}" class="{{ Request::is('schedule-timing') ? 'active' : '' }}">Shift & Schedule</a></li>
                                <li><a href="{{url('overtime')}}" class="{{ Request::is('overtime') ? 'active' : '' }}">Overtime</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="{{ Request::is('performance-indicator','performance-review','performance-appraisal','goal-tracking','goal-type') ? 'active subdrop' : '' }}"><span>Performance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('performance-indicator')}}" class="{{ Request::is('performance-indicator') ? 'active' : '' }}">Performance Indicator</a></li>
                                <li><a href="{{url('performance-review')}}" class="{{ Request::is('performance-review') ? 'active' : '' }}">Performance Review</a></li>
                                <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Performance Appraisal</a></li>
                                <li><a href="{{url('goal-tracking')}}" class="{{ Request::is('goal-tracking') ? 'active' : '' }}">Goal List</a></li>
                                <li><a href="{{url('goal-type')}}" class="{{ Request::is('goal-type') ? 'active' : '' }}">Goal Type</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('training','trainers','training-type') ? 'active' : '' }}"><span>Training</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('training')}}" class="{{ Request::is('training') ? 'active' : '' }}">Training List</a></li>
                                        <li><a href="{{url('trainers')}}" class="{{ Request::is('trainers') ? 'active' : '' }}">Trainers</a></li>
                                        <li><a href="{{url('training-type')}}" class="{{ Request::is('training-type') ? 'active' : '' }}">Training Type</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Request::is('promotion') ? 'active' : '' }}"><a href="{{url('promotion')}}"><span>Promotion</span></a></li>
                                <li class="{{ Request::is('resignation') ? 'active' : '' }}"><a href="{{url('resignation')}}"><span>Resignation</span></a></li>
                                <li class="{{ Request::is('termination') ? 'active' : '' }}"><a href="{{url('termination')}}"><span>Termination</span></a></li>		
                            </ul>
                        </div>
                        <div class="tab-pane fade {{Request::is('estimates','invoices','payments','expenses','provident-fund','taxes','categories','budgets','budget-expenses','budget-revenues','employee-salary','payslip','payroll') ? ' show active ' : '' }}" id="menu-finance">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('estimates','invoice','payments','expenses','provident-fund','taxes') ? 'active subdrop' : '' }}"><span>Sales</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('estimates')}}" class="{{ Request::is('estimates') ? 'active' : '' }}">Estimates</a></li>
                                <li><a href="{{url('invoice')}}" class="{{ Request::is('invoice') ? 'active' : '' }}">Invoices</a></li>
                                <li><a href="{{url('payments')}}" class="{{ Request::is('payments') ? 'active' : '' }}">Payments</a></li>
                                <li><a href="{{url('expenses')}}" class="{{ Request::is('expenses') ? 'active' : '' }}">Expenses</a></li>
                                <li><a href="{{url('provident-fund')}}" class="{{ Request::is('provident-fund') ? 'active' : '' }}">Provident Fund</a></li>
                                <li><a href="{{url('taxes')}}" class="{{ Request::is('taxes') ? 'active' : '' }}">Taxes</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('categories','budgets','budget-expenses','budget-revenues') ? 'active subdrop' : '' }}"><span>Accounting</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('categories')}}" class="{{ Request::is('categories') ? 'active' : '' }}" >Categories</a></li>
                                        <li><a href="{{url('budgets')}}" class="{{ Request::is('budgets') ? 'active' : '' }}">Budgets</a></li>
                                        <li><a href="{{url('budget-expenses')}}" class="{{ Request::is('budget-expenses') ? 'active' : '' }}">Budget Expenses</a></li>
                                        <li><a href="{{url('budget-revenues')}}" class="{{ Request::is('budget-revenues') ? 'active' : '' }}">Budget Revenues</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('employee-salary','payslip','payroll') ? 'active subdrop' : '' }}"><span>Payroll</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('employee-salary')}}" class="{{ Request::is('employee-salary') ? 'active' : '' }}">Employee Salary</a></li>
                                <li><a href="{{url('payslip')}}" class="{{ Request::is('payslip') ? 'active' : '' }}">Payslip</a></li>
                                <li><a href="{{url('payroll')}}" class="{{ Request::is('payroll') ? 'active' : '' }}">Payroll Items</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('assets','asset-categories','knowledgebase','activity','users','roles-permissions',
                        'expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report',
                        'profile-settings','security-settings','notification-settings','connected-apps','bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings',
                            'salary-settings','approval-settings','invoice-settings','leave-type','custom-fields','email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode','payment-gateways','tax-rates','currencies','custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'show active ' : '' }}" id="menu-administration">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('assets','asset-categories') ? 'active subdrop' : '' }}"><span>Assets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('assets')}}" class="{{ Request::is('assets') ? 'active' : '' }}">Assets</a></li>
                                        <li><a href="{{url('asset-categories')}}" class="{{ Request::is('asset-categories') ? 'active' : '' }}">Asset Categories</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('knowledgebase','knowledgebase-details','activity') ? 'active subdrop' : '' }}"><span>Help & Supports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('knowledgebase')}}" class="{{ Request::is('knowledgebase','knowledgebase-details') ? 'active' : '' }}">Knowledge Base</a></li>
                                        <li><a href="{{url('activity')}}" class="{{ Request::is('activity') ? 'active' : '' }}">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('users','roles-permissions') ? 'active subdrop' : '' }}"><span>User Management</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('users')}}" class="{{ Request::is('users') ? 'active' : '' }}">Users</a></li>
                                        <li><a href="{{url('roles-permissions')}}" class="{{ Request::is('roles-permissions') ? 'active' : '' }}">Roles & Permissions</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('expenses-report','invoice-report','payment-report','project-report','task-report','user-report','employee-report','payslip-report','attendance-report','leave-report','daily-report') ? 'active subdrop' : '' }}"><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('expenses-report')}}" class="{{ Request::is('expenses-report') ? 'active' : '' }}">Expense Report</a></li>
                                        <li><a href="{{url('invoice-report')}}" class="{{ Request::is('invoice-report') ? 'active' : '' }}">Invoice Report</a></li>
                                        <li><a href="{{url('payment-report')}}" class="{{ Request::is('payment-report') ? 'active' : '' }}">Payment Report</a></li>
                                        <li><a href="{{url('project-report')}}" class="{{ Request::is('project-report') ? 'active' : '' }}">Project Report</a></li>
                                        <li><a href="{{url('task-report')}}" class="{{ Request::is('task-report') ? 'active' : '' }}">Task Report</a></li>
                                        <li><a href="{{url('user-report')}}" class="{{ Request::is('user-report') ? 'active' : '' }}">User Report</a></li>
                                        <li><a href="{{url('employee-report')}}" class="{{ Request::is('employee-report') ? 'active' : '' }}">Employee Report</a></li>
                                        <li><a href="{{url('payslip-report')}}" class="{{ Request::is('payslip-report') ? 'active' : '' }}">Payslip Report</a></li>
                                        <li><a href="{{url('attendance-report')}}" class="{{ Request::is('attendance-report') ? 'active' : '' }}">Attendance Report</a></li>
                                        <li><a href="{{url('leave-report')}}" class="{{ Request::is('leave-report') ? 'active' : '' }}">Leave Report</a></li>
                                        <li><a href="{{url('daily-report')}}" class="{{ Request::is('daily-report') ? 'active' : '' }}">Daily Report</a></li> </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('profile-settings','security-settings','notification-settings','connected-apps') ? 'active subdrop' : '' }}">
                                        General Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('profile-settings')}}" class="{{ Request::is('profile-settings') ? 'active' : '' }}">Profile</a></li>
                                        <li><a href="{{url('security-settings')}}" class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a></li>
                                        <li><a href="{{url('notification-settings')}}" class="{{ Request::is('notification-settings') ? 'active' : '' }}">Notifications</a></li>
                                        <li><a href="{{url('connected-apps')}}" class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('bussiness-settings','seo-settings','localization-settings','prefixes','preferences','performance-appraisal','language','authentication-settings','ai-settings') ? 'active subdrop' : '' }}">
                                        Website Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('bussiness-settings')}}" class="{{ Request::is('bussiness-settings') ? 'active' : '' }}">Business Settings</a></li>
                                        <li><a href="{{url('seo-settings')}}" class="{{ Request::is('seo-settings') ? 'active' : '' }}">SEO Settings</a></li>
                                        <li><a href="{{url('localization-settings')}}" class="{{ Request::is('localization-settings') ? 'active' : '' }}">Localization</a></li>
                                        <li><a href="{{url('prefixes')}}" class="{{ Request::is('prefixes') ? 'active' : '' }}">Prefixes</a></li>
                                        <li><a href="{{url('preferences')}}" class="{{ Request::is('preferences') ? 'active' : '' }}">Preferences</a></li>
                                        <li><a href="{{url('performance-appraisal')}}" class="{{ Request::is('performance-appraisal') ? 'active' : '' }}">Appearance</a></li>
                                        <li><a href="{{url('language')}}" class="{{ Request::is('language') ? 'active' : '' }}">Language</a></li>
                                        <li><a href="{{url('authentication-settings')}}" class="{{ Request::is('authentication-settings') ? 'active' : '' }}">Authentication</a></li>
                                        <li><a href="{{url('ai-settings')}}" class="{{ Request::is('ai-settings') ? 'active' : '' }}">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('salary-settings','approval-settings','invoice-settings','leave-type','custom-fields') ? 'active subdrop' : '' }}">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('salary-settings')}}" class="{{ Request::is('salary-settings') ? 'active' : '' }}">Salary Settings</a></li>
                                        <li><a href="{{url('approval-settings')}}" class="{{ Request::is('approval-settings') ? 'active' : '' }}">Approval Settings</a></li>
                                        <li><a href="{{url('invoice-settings')}}" class="{{ Request::is('invoice-settings') ? 'active' : '' }}">Invoice Settings</a></li>
                                        <li><a href="{{url('leave-type')}}" class="{{ Request::is('leave-type') ? 'active' : '' }}">Leave Type</a></li>
                                        <li><a href="{{url('custom-fields')}}" class="{{ Request::is('custom-fields') ? 'active' : '' }}">Custom Fields</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="{{ Request::is('email-settings','email-template','sms-settings','sms-template','otp-settings','gdpr','maintenance-mode') ? 'active subdrop' : '' }}">
                                        System Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('email-settings')}}" class="{{ Request::is('email-settings') ? 'active' : '' }}">Email Settings</a></li>
                                        <li><a href="{{url('email-template')}}" class="{{ Request::is('email-template') ? 'active' : '' }}">Email Templates</a></li>
                                        <li><a href="{{url('sms-settings')}}" class="{{ Request::is('sms-settings') ? 'active' : '' }}">SMS Settings</a></li>
                                        <li><a href="{{url('sms-template')}}" class="{{ Request::is('sms-template') ? 'active' : '' }}">SMS Templates</a></li>
                                        <li><a href="{{url('otp-settings')}}" class="{{ Request::is('otp-settings') ? 'active' : '' }}">OTP</a></li>
                                        <li><a href="{{url('gdpr')}}" class="{{ Request::is('gdpr') ? 'active' : '' }}">GDPR Cookies</a></li>
                                        <li><a href="{{url('maintenance-mode')}}" class="{{ Request::is('maintenance-mode') ? 'active' : '' }}">Maintenance Mode</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('payment-gateways','tax-rates','currencies') ? 'active subdrop' : '' }}">
                                        Financial Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="{{url('payment-gateways')}}" class="{{ Request::is('payment-gateways') ? 'active' : '' }}">Payment Gateways</a></li>
                                        <li><a href="{{url('tax-rates')}}" class="{{ Request::is('tax-rates') ? 'active' : '' }}">Tax Rate</a></li>
                                        <li><a href="{{url('currencies')}}" class="{{ Request::is('currencies') ? 'active' : '' }}">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="{{ Request::is('custom-css','custom-js','cronjob','storage-settings','ban-ip-address','backup','clear-cache') ? 'active subdrop' : '' }}">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('custom-css')}}" class="{{ Request::is('custom-css') ? 'active' : '' }}">Custom CSS</a></li>
                                        <li><a href="{{url('custom-js')}}" class="{{ Request::is('custom-js') ? 'active' : '' }}">Custom JS</a></li>
                                        <li><a href="{{url('cronjob')}}" class="{{ Request::is('cronjob') ? 'active' : '' }}">Cronjob</a></li>
                                        <li><a href="{{url('storage-settings')}}" class="{{ Request::is('storage-settings') ? 'active' : '' }}">Storage</a></li>
                                        <li><a href="{{url('ban-ip-address')}}" class="{{ Request::is('ban-ip-address') ? 'active' : '' }}">Ban IP Address</a></li>
                                        <li><a href="{{url('backup')}}" class="{{ Request::is('backup') ? 'active' : '' }}">Backup</a></li>
                                        <li><a href="{{url('clear-cache')}}" class="{{ Request::is('clear-cache') ? 'active' : '' }}">Clear Cache</a></li>                                    </ul>
                               
                            </ul>
                        </div>
                        <div class="tab-pane fade {{ Request::is('blogs','blog-categories','blog-comments','blog-tags','countries','states','cities','testimonials','faq') ? '  active subdrop' : '' }}" id="menu-content">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('blogs','blog-categories','blog-comments','blog-tags') ? 'active' : '' }}">Blogs<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li class="{{ Request::is('blogs') ? 'active' : '' }}"><a href="{{url('blogs')}}">All Blogs</a></li>
                                        <li class="{{ Request::is('blog-categories') ? 'active' : '' }}"><a href="{{url('blog-categories')}}">Categories</a></li>
                                        <li class="{{ Request::is('blog-comments') ? 'active' : '' }}"><a href="{{url('blog-comments')}}">Comments</a></li>
                                        <li class="{{ Request::is('blog-tags') ? 'active' : '' }}"><a href="{{url('blog-tags')}}">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="{{ Request::is('countries','states','cities') ? 'active' : '' }}">Locations<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="{{url('countries')}}" class="{{ Request::is('countries') ? 'active' : '' }}">Countries</a></li>
                                        <li><a href="{{url('states')}}" class="{{ Request::is('states') ? 'active' : '' }}">States</a></li>
                                        <li><a href="{{url('cities')}}" class="{{ Request::is('cities') ? 'active' : '' }}">Cities</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{url('testimonials')}}" class="{{ Request::is('testimonials') ? 'active' : '' }}">Testimonials</a></li>
                                <li><a href="{{url('faq')}}" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ’S</a></li>

                            </ul>
                        </div>
                       
                       
                        
                    </div>
                </div>
            </div>
            <div class="p-3">
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12">Change Log<span class="badge bg-pink badge-xs text-white fs-10 ms-2">v4.0.2</span></a>
            </div>
        </div>
    </div>
</div>
<!-- /Stacked Sidebar -->


