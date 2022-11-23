<nav id="sidebar">
    <div class="sidebar-header">
        <h3><img src="{{url('userdashboard/img/logo.png')}}" class="img-fluid"/><span>Everest Edu.</span></h3>
    </div>
    <ul class="list-unstyled components">
        <li  class="user_dashboard_active">
            <a href="{{url('/user_dashboard')}}" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
        </li>

        <div class="small-screen navbar-display">
        {{-- <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
            <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">notifications</i><span> 4 notification</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                            <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
            </ul>
        </li> --}}
    
    
        <li class="dropdown">
            <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">collections</i><span>My Applications</span></a>
            <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                <li>
                    <a href="{{url('/show_application')}}">MacEwan University SCE</a>
                </li>
                <li>
                    <a href="#">MRU Social Work Diploma</a>
                </li>
                <li>
                    <a href="#"> Olds College Business Management </a>
                </li>
            </ul>
        </li>
        
        <li  class="">
            <a href="#"><i class="material-icons">date_range</i><span>Calender</span></a>
        </li>
        
        
    </ul>

    
</nav>