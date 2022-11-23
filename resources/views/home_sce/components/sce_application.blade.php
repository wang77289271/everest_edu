@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="sce_application">
    <div class="sce_application_wrapper">
        <h1>MacEwan SCE Form</h1>
        <p>Please fill out the form below!</p>
        <div class="sce_form">
            <form method="POST" action="{{url('add_sce_form')}}" enctype="multipart/form-data">
                @csrf
                {{-- personal info --}}
                @include('home_sce.components.sce_application_sections.sce_form_personal')
                <hr />
                {{-- edu history  --}}
                @include('home_sce.components.sce_application_sections.sce_form_edu')
                <hr />
                {{-- work exp --}}
                @include('home_sce.components.sce_application_sections.sce_form_workExp')
                <hr />
                {{-- language --}}
                @include('home_sce.components.sce_application_sections.sce_form_language')
                <hr />
                {{-- confirm --}}
                @include('home_sce.components.sce_application_sections.sce_form_confirm')

                <div class="sce_sceForm-btn">
                    <button type="submit" name="send">
                    SUBMIT
                </button>
            </div>
            </form>
        </div>
    </div>
</div>