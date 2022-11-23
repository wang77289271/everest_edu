@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="sce_back_tag">
    <a href="{{url('/show_sce_applications')}}"><< Back to Table</a>
</div>
<div class="sceAdmin_form_detail">
    <h1>Sce Web Form Applications</h1>
    <form action="{{url('/update_sce_application',$item->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="sceAdmin_form_detail__box">
            <label>First Name :</label>
            <input type="text" placeholder='write first name' name="fname" value="{{$item->fname}}" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Middle Name :</label>
            <input value="{{$item->mname}}" type="text" placeholder='write middle name' name="mname" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Last Name :</label>
            <input value="{{$item->lname}}" type="text" placeholder='write last name' name="lname" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Email</label>
            <input value="{{$item->email}}" type="text" placeholder='write email' name="email" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Address</label>
            <input value="{{$item->address}}"  type="text" placeholder='write address' name="address" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>City</label>
            <input value="{{$item->city}}" type="text" placeholder='write city' name="city" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>State</label>
            <input value="{{$item->state}}" type="text" placeholder='write state' name="state" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Country</label>
            <input value="{{$item->country}}" type="text" placeholder='write country' name="country" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Post Code</label>
            <input value="{{$item->postcode}}" type="text" placeholder='write post code' name="postcode" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Phone Code</label>
            <input value="{{$item->phone_code}}" type="text" placeholder='write phone code' name="phone_code" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Phone Number</label>
            <input value="{{$item->phone_number}}" type="text" placeholder='write phone number' name="phone_number" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>University/College</label>
            <input value="{{$item->university_name}}" type="text" placeholder='write university/college' name="university_name" />
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_top">
            <label>Degree & Marksheets File :</label>
            @if ($item->degreefile)
                <a href="{{url('/storage',$item->degreefile)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_bottom">
            <label>Upload New degree & Marksheets ?</label>
            <input type="file" name="degreefile" />
        </div>

        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_top">
            <label>10th & 12th Marksheets File :</label>
            @if ($item->marksheetsfile)
                <a href="{{url('/storage',$item->marksheetsfile)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_bottom">
            <label>Upload New 10th & 12th Marksheets ?</label>
            <input type="file" name="marksheetsfile" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Company</label>
            <input value="{{$item->company_name}}" type="text" placeholder='write company' name="company_name" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Work Position</label>
            <input value="{{$item->work_position}}" type="text" placeholder='write work position' name="work_position" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Work Experience</label>
            <input value="{{$item->work_exp}}" type="text" placeholder='write work experience' name="work_exp" />
        </div>

        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_top">
            <label>Resume File :</label>
            @if ($item->resume)
                <a href="{{url('/storage',$item->resume)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_bottom">
            <label>Upload New Resume ?</label>
            <input value="{{$item->resume}}" type="file" name="resume" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>IELTS / PTE / TOEFL</label>
            <select name="languageType">
                <option value="{{$item->languageType}}">{{$item->languageType}}</option>
                <option value="IELTS">IELTS</option>
                <option value="PTE">PTE</option>
                <option value="TOEFL">TOEFL</option>
            </select>
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Listening</label>
            <input value="{{$item->score_listening}}" type="text" placeholder='write listening score' name="score_listening" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Speaking</label>
            <input value="{{$item->score_speaking}}" type="text" placeholder='write specking score' name="score_speaking" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Writing</label>
            <input value="{{$item->score_writing}}" type="text" placeholder='write writing score' name="score_writing" />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Reading</label>
            <input value="{{$item->score_reading}}" type="text" placeholder='write reading score'  name="score_reading" />
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_top">
            <label>Language Document :</label>
            @if ($item->language_score)
                <a href="{{url('/storage',$item->language_score)}}" target="_blank">View File</a>
            @else  
                <p>N/A</p>
            @endif
        </div>
        <div class="sceAdmin_form_detail__box sceAdmin_form__margin_bottom">
            <label>Upload New Language Document ?</label>
            <input type="file" name="language_score"/>
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Status</label>
            <select name="status">
                <option value="{{$item->status}}">{{$item->status}}</option>
                <option value="Pending">Applied</option>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Created at :</label>
            <input type="text" name="updated_at" value="{{$item->created_at}}" readonly />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Updated at :</label>
            <input type="text" name="updated_at" value=<?= date("Y/m/d-h:i:sa") ?> readonly />
        </div>
        <div class="sceAdmin_form_detail_btn">
            <button type="submit">Save</button>
            <a onclick="return confirm('Are you sure to delete this?')" href="{{url('delete_sce_application',$item->id)}}">Delete</a>
        </div>
    </form>
</div>