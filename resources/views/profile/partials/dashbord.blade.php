<div class="d-flex justify-content-between">
    <h2>My Profile</h2>
    <a href="{{ route('profile.edit') }}" class="fs-6">Edit Profile</a>
</div>

{{-- User Details --}}
<div class="container mt-5">
    <div class="mb-3">
        <input type="text" value="User's Name :                   {{ $user->name }}" class="form-control" id="exampleFormControlInput1" readonly>
    </div>
    <div class="mb-3">
        <input type="text" value="Email :                               {{ $user->email }}" class="form-control" id="exampleFormControlInput1" readonly>
    </div>
    <div class="mb-3">
        <input type="text" value="Phone Number :                {{ $user->phone_number }}" class="form-control" id="exampleFormControlInput1" readonly>
    </div>
    <div class="mb-3">
        <input type="text" value="Country :                            {{ $user->user_country }}" class="form-control" id="exampleFormControlInput1" readonly>
    </div>





    
</div>
