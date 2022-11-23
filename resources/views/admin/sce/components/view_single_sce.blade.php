@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="sce_back_tag">
    <a href="{{url('/show_sce_applications')}}"><< Back to Table</a>
</div>

<div class="view_single_sce">
    <div class="view_single_sce_wrapper">
        {{-- Personal Information --}}
        <h2>Personal Information</h2>
        <div class="view_single_sce__item">
            <h1>Full Name: </h1>
            <p>{{$sce_item->fname}} {{$sce_item->mname}} {{$sce_item->lname}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Email: </h1>
            <p>{{$sce_item->email}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Address: </h1>
            <p>{{$sce_item->address}}, {{$sce_item->city}}, {{$sce_item->country}}, {{$sce_item->postcode}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Phone: </h1>
            <p>{{$sce_item->phone_code}} {{$sce_item->phone_number}}</p>
        </div>
        <hr />

        {{-- Educational History --}}
        <h2>Educational History</h2>
        <div class="view_single_sce__item">
            <h1>University/College Name: </h1>
            <p>{{$sce_item->university_name}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Degree & Marksheets: </h1>
            @if ($sce_item->degreefile)
                <a href="{{url('/storage',$sce_item->degreefile)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>10th & 12th Marksheets: </h1>
            @if ($sce_item->marksheets)
                <a href="{{url('/storage',$sce_item->marksheets)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <hr />

        {{-- Work Experience --}}
        <h2>Work Experience</h2>
        <div class="view_single_sce__item">
            <h1>Company Name: </h1>
            <p>{{$sce_item->company_name}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Position: </h1>
            <p>{{$sce_item->work_position}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Work Experience: </h1>
            <p>{{$sce_item->work_exp}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Resume: </h1>
            @if ($sce_item->resume)
                <a href="{{url('/storage',$sce_item->resume)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <hr />

        {{-- English Language Proficiency --}}
        <h2>English Language Proficiency</h2>
        <div class="view_single_sce__item">
            <h1>IELTS/PTE/TOEFL: </h1>
            <p>{{$sce_item->languageType}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Score(L/S/W/R): </h1>
            <p>{{$sce_item->score_listening}}/{{$sce_item->score_speaking}}/{{$sce_item->score_writing}}/{{$sce_item->score_reading}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Score Document: </h1>
            @if ($sce_item->language_score)
                <a href="{{url('/storage',$sce_item->language_score)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <hr />
        {{-- English Language Proficiency --}}
        <h2>Status</h2>
        <div class="view_single_sce__item">
            <h1>Status: </h1>
            <p>{{$sce_item->status}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Submitted at: </h1>
            <p>{{$sce_item->created_at}}</p>
        </div>
        <hr />
        <div class="view_single_sce__item">
            <h1>Updated at: </h1>
            <p>{{$sce_item->updated_at}}</p>
        </div>
        <hr />
    </div>
    <div class="view_single_sce__btn">
        <a class="btn btn-info" href="{{url('single_sce_application',$sce_item->id)}}">Edit</a>
    </div>
</div>