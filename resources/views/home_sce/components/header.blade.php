@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="header">
        <div class="header_wrapper">
          <div class="header_left">
            <div class="header_left_content">
              <h1>Study Professional</h1>
              <h1>Postgraduate Programs</h1>
              <h1>in <span class="maroon-text">MacEwan University</span></h1>
              <h2>
                Study Professional Postgraduate Programs in
                <span class="maroon-text"> MacEwan University</span>
              </h2>

              <p>
                MacEwan University SCE International offers executive post
                graduate professional development programs for international
                students to further develop their education with practical
                projects and social skill building for a truly Canadian
                University experience.
              </p>
              <div class="header_btn button-rectangle">
                <a href="{{url('/sce-programs-application-form')}}"> <span> Apply Now </span></a>
              </div>
            </div>
          </div>
          <div class="header_right">
            <div class="header_right__img">
              <img
                src="home_sce/img/Header_graduate.png"
                alt="Study Professional Postgraduate Programs in MacEwan University"
              />
            </div>
          </div>
        </div>
      </div>