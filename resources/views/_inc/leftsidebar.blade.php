<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ti-home"></i> <span>
                            Dashboard </span>
                    </a>
                </li>
                </li>
                <li>
                    <a href="{{ route('exams.index') }}" class="waves-effect"><i class="ti-write"></i><span> Manage
                            Exams </span></a>
                </li>
                    <li>
                        <a href="{{ route('courses.index') }}" class="waves-effect"><i class="ti-book"></i><span> Manage
                                Courses </span></a>
                    </li>
                    <li>
                        <a href="{{ route('subjects.index') }}" class="waves-effect"><i class="ti-agenda"></i><span> Manage
                                Subjects </span></a>
                    </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
