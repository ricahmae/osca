{{-- sidebar --}}

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span>OSCA-ADMIN<span>
         
        </h3>

        <label for="sidebar-toggle"><i class="fa fa-2x fa-bars" aria-hidden="true"></i></label>
    </div>

    <div class="sidebar-menu" id="">

        <ul>
            <!--nav-item-->
            <li class="{{'/admin/dashboard' == request()->path() ? 'active': '' }}">
                <a href="/admin/dashboard">
                    <span><i class="fas fa-chart-line"></i></span>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="{{'/admin/patient' == request()->path() ? : '' }}">
                <a href="/admin/applicant">
                    <span><i class="fas fa-user"></i></span>
                    <span>Applicants</span>
                </a>
            </li>

            <li class="{{'/admin/archives' == request()->path() ? : '' }}">
                <a href="/admin/loss">
                    <span><i class="fas fa-folder-open"></i></span>
                    <span>Loss</span>
                </a>
            </li>
            <li class="{{'/admin/exports' == request()->path() ? : '' }}">
                <a href="/admin/damaged">
                    <span><i class="fas fa-file-download"></i></span>
                    <span>Damaged</span>
                </a>
            </li>
            <li class="{{'/admin/exports' == request()->path() ? : '' }}">
                <a href="/admin/track">
                    <span><i class="fas fa-file-download"></i></span>
                    <span>Track</span>
                </a>
            </li>

            <li class="{{'/admin/exports' == request()->path() ? : '' }}">
                <a href="/admin/benefit">
                    <span><i class="fas fa-file-download"></i></span>
                    <span>Benefits</span>
                </a>
            </li>
            <li class="{{'/admin/exports' == request()->path() ? : '' }}">
                <a href="/admin/fieldoffice">
                    <span><i class="fas fa-file-download"></i></span>
                    <span>Field Offices</span>
                </a>
            </li>
            <li class="{{'/admin/exports' == request()->path() ? : '' }}">
                <a href="/admin/list">
                    <span><i class="fas fa-file-download"></i></span>
                    <span>Senior Citizen</span>
                </a>
            </li>
            <li class="{{'/admin/users' == request()->path() ? : '' }}">
                <a href="/admin/user">
                    <span><i class="fas fa-users"></i></span>
                    <span>Users</span>
                </a>
            </li>

            <li class="{{'' == request()->path() ? : '' }}">
                <a href="/logout">
                    <span><i class="fas fa-sign-out-alt"></i></span>
                    <span>Logout</span>
                </a>
            </li>

        </ul>
        <span><span>
    </div>

</div> 
