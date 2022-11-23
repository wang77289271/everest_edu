<div class="nav">
  <div class="nav_container">
    <div class="nav_left">
      <div class="nav_left__logo">
        <a href="{{url('/')}}"
          ><img src="home_sce/img/Logo_MacEwan.svg" alt="MacEwan University"
        /></a>

        <a href="{{url('/')}}"
          ><img src="home_sce/img/Logo_Everest_ISE.png" alt="Everest Education"
        /></a>
      </div>
    </div>
    {{-- <div class="nav_right"> --}}
      {{-- <div class="button-round nav_right__btn">
        <a href="">Apply Now </a>
      </div> --}}
    {{-- </div> --}}
    @if (Route::has('login'))
    
    <div class="nav_right_login">
      @auth
      <x-app-layout />
      @else
      <a href="{{ route('login') }}" class="sce_login">Login</a>
      <a href="{{ route('register') }}" class="sce_register">Register</a>
      @endauth
    </div>
    @endif
  </div>
</div>