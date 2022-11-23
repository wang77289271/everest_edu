@if(session()->has('message'))
<div class="alert alert-success" x-data="{show:true}" x-init="setTimeout(()=>show=false, 2500)" x-show="show">
    {{session()->get('message')}}
</div>
@endif
<div class="sce_back_tag">
    <a href="{{url('/admin_get_user')}}"><< Back to Users</a>
</div>
<div class="sceAdmin_form_detail">
    <h3>Send email to: <span>{{$user->email}}</span></h3>
    <form action="{{url('/send_email_message_to_user', $user->id)}}" method="POST">
        @csrf
        <div class="sceAdmin_form_detail__box">
            <label>Subject :</label>
            <input
                type="text"
                placeholder='e.g. Application status update...'
                name="send_user_email_subject"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Greeting :</label>
            <input
                type="text"
                placeholder='e.g. You have a new update on your application'
                name="send_user_email_greeting"
            />
        </div>
        <div class="sceAdmin_form_detail__box">
            <label>Email :</label>
            <textarea
                type="message"
                placeholder='e.g. check your account...'
                name="send_user_email_content"
            ></textarea>
        </div>
        
        <button type="submit" class="btn btn-success" style="padding: 8px 15px; margin-top: 20px">Send email</button>
    </form>
</div>