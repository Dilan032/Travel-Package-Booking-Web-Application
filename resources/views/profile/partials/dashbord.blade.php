<div class="d-flex justify-content-between">
    <h2>My Profile</h2>
    {{-- <a href="{{ route('profile.edit') }}" class="fs-6">Edit Profile</a> --}}
</div>

{{-- User Details --}}
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="row pb-2">
                <div class="col-4 fw-bold">Name</div>
                <div class="col-8">{{ $user->name }}</div>
                <hr>
            </div>
            <div class="row pb-2">
                <div class="col-4 fw-bold">Email:</div>
                <div class="col-8">{{ $user->email }}</div>
                <hr>
            </div>
            <div class="row pb-2">
                <div class="col-4 fw-bold">Phone Number:</div>
                <div class="col-8">{{ $user->phone_number }}</div>
                <hr>
            </div>
            <div class="row pb-2">
                <div class="col-4 fw-bold">Country:</div>
                <div class="col-8">{{ $user->user_country }}</div>
                <hr>
            </div>
            {{-- <div class="row pb-2">
                <div class="col-4 fw-bold">Gender:</div>
                <div class="col-8">{{ $user->gender }}</div>
                <hr>
            </div> --}}
        </div>
    </div>
</div>
