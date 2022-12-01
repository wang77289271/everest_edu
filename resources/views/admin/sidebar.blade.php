<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{url('/')}}" style="color:#fff;">
            {{-- Everest Edu --}}
            {{-- <img src="admin/assets/images/Logo_EverestEdu.png" alt="logo" /> --}}
            Everest Education
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
        <div class="profile-desc">
            <div class="profile-pic">
            <div class="count-indicator">
                <img class="img-xs rounded-circle " src="admin/assets/images/favicon.png" alt="admin">
                <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
                <h5 class="mb-0 font-weight-normal">Admin</h5>
                <span>Admin</span>
            </div>
            </div>
            <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-settings text-primary"></i>
                </div>
                </div>
                <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                    <i class="mdi mdi-onepassword  text-info"></i>
                </div>
                </div>
                <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                </div>
            </a>
            </div>
        </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/user_dashboard')}}">
                <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                <i class="mdi mdi-application"></i>
                </span>
                <span class="menu-title">Sce Applications</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/show_sce_applications')}}">Show</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/view_sce_applications')}}">Create</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/admin_get_user')}}">
                <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-content-copy"></i>
              </span>
              <span class="menu-title">Website Content</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Main</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Sce website</a></li>
              </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#contactusSubmission" aria-expanded="false" aria-controls="contactusSubmission">
              <span class="menu-icon">
                <i class="mdi mdi-comment-multiple-outline"></i>
              </span>
              <span class="menu-title">Contact Us Forms</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contactusSubmission">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">All</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('/sce_contact_forms')}}">Sce website</a></li>
              </ul>
            </div>
        </li>
    </ul>
</nav>
