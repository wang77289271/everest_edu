@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="sce_back_tag">
    <a href="{{url('/show_sce_applications')}}"><< See All Sce Applications</a>
</div>
<div class="sceAdmin_form_detail">
    <h1>Create Application</h1>
    <form action="{{url('/create_sce_application')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="sceAdmin_form_detail__box">
            <label>First Name :</label>
            <input
                type="text"
                placeholder='write first name'
                name="fname"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Middle Name :</label>
            <input
                type="text"
                placeholder='write middle name'
                name="mname"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Last Name :</label>
            <input
                type="text"
                placeholder='write last name'
                name="lname"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Email</label>
            <input
                type="text"
                placeholder='write email'
                name="email"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Address</label>
            <input
                type="text"
                placeholder='write address'
                name="address"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>City</label>
            <input
                type="text"
                placeholder='write city'
                name="city"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>State</label>
            <input
                type="text"
                placeholder='write state'
                name="state"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Country</label>
            <input
                type="text"
                placeholder='write country'
                name="country"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Post Code</label>
            <input
                type="text"
                placeholder='write post code'
                name="postcode"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Phone Code</label>
            <input
                type="text"
                placeholder='write phone code'
                name="phone_code"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Phone Number</label>
            <input
                type="text"
                placeholder='write phone number'
                name="phone_number"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>University/College</label>
            <input
                type="text"
                placeholder='write university/college'
                name="university_name"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Upload degree & Marksheets :</label>
            <input
                type="file"
                name="degreefile"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Upload 10th & 12th marksheets</label>
            <input
                type="file"
                name="marksheetsfile"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Company</label>
            <input
                type="text"
                placeholder='write company'
                name="company_name"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Work Position</label>
            <input
                type="text"
                placeholder='write work position'
                name="work_position"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Work Experience</label>
            <input
                type="text"
                placeholder='write work experience'
                name="work_exp"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Resume</label>
            <input
                type="file"
                name="resume"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>IELTS / PTE / TOEFL</label>
            <input
                type="text"
                placeholder='write IELTS / PTE / TOEFL'
                name="languageType"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Listening</label>
            <input
                type="text"
                placeholder='write listening score'
                name="score_listening"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Speaking</label>
            <input
                type="text"
                placeholder='write specking score'
                name="score_speaking"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Writing</label>
            <input
                type="text"
                placeholder='write writing score'
                name="score_writing"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Reading</label>
            <input
                type="text"
                placeholder='write reading score'
                name="score_reading"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Upload language document</label>
            <input
                type="file"
                name="language_score"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Status</label>
            <select name="status">
                <option value="Pending">Applied</option>
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
                <option value="Rejected">Rejected</option>
            </select>
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Updated at :</label>
            <input
                type="text"
                placeholder={inputs.updated_at}
                name="updated_at"
                value=<?= date("Y/m/d-h:i:sa") ?>
                readonly
            />
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>