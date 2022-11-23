<div class="sce_footer">
    <div class="sce_footer_wrapper">
      <div class="sce_footer_logo">
        <a href="{{url('/')}}">
          <img src='/home_sce/img/Logo_Everest_white.png' alt="Everest Education" />
        </a>
      </div>
      <div class="sce_footer_main">
        <div class="sce_footer_left">
          <h1>Canada Head Office</h1>
          <div class="sce_footer_left__info">
            <p>205-1803 91 st sw, Edmonton AB, Canada, T6X 0W8</p>
            <p>1 (780) 885-8484</p>
            <p>info@everestedu.ca</p>
          </div>
        </div>
        <div class="sce_footer_right">
          <div class="sce_footer_right__logo">
            <img src='/home_sce/img/Logo_MacEwan.svg' alt="MacEwan University" />
            <img src='/home_sce/img/Logo_Everest_ISE_white.png' alt="Everest Education" />
          </div>
          <div class="button-rectangle sce_footer_btn">
            <a href="{{url('/sce-programs-application-form')}}">Apply Now</a>
          </div>
        </div>
      </div>
      <div class="sce_footer_copyright">
        <hr />
        <h3>Copyright &copy; {{ date('Y') }} Everest Educational Services.
          All Rights Reserved.</h3>
      </div>
    </div>
  </div>

</div>
    <!--end app -->
    <script>
      var sce_coll = document.getElementsByClassName("sce_program_head");

      for (var i = 0; i < sce_coll.length; i++) {
        sce_coll[i].addEventListener("click", function() {
          this.classList.toggle("active_sce_programs");
          var content = this.nextElementSibling;
          if (content.style.maxHeight){
            content.style.maxHeight = null;
          } else {
            content.style.maxHeight = content.scrollHeight + "px";
          } 
        });
      }
    </script>
    <!-- bootstrap js -->
    {{-- <script src="home_sce/js/bootstrap.js"></script> --}}
    <script src="userdashboard/js/jquery-3.3.1.slim.min.js"></scrip
    <script script src="userdashboard/js/bootstrap.min.js"></script>
    <script src="userdashboard/js/jquery-3.3.1.min.js"></script>
  </body>
</html>