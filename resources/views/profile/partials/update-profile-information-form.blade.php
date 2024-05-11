<div class="d-flex justify-content-between">
    <div>
        <h2 style="margin-top: -10px">Profile Information</h2>
        <br>
    </div>

    {{-- display massage --}}
    <div style="position: relative; ">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
</div>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

{{-- form start --}}
<form method="post" action="{{ route('profile.update') }}">
    @csrf
    @method('patch')

    {{-- user name --}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label fw-semibold">Name</label>
        <input name="name" type="text" value="{{ old('name', $user->name) }}" class="form-control" id="exampleFormControlInput1" required>
        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
    </div>
    
    {{-- user email --}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label fw-semibold">Email address</label>
        <input name="email" type="email" value="{{ old('email', $user->email) }}" class="form-control" id="exampleFormControlInput1" >
        {{-- input validation --}}
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
    </div>
    {{-- user phone number --}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label fw-semibold">Phone Number</label>
        <input name="phone_number" type="text" value="{{ old('phone_number', $user->phone_number) }}" class="form-control" id="exampleFormControlInput1" >
    </div>

    {{-- user country --}}
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label fw-semibold"> Country </label>
        <input name="user_country" type="text" value="{{ old('country', $user->user_country) }}" class="form-control" id="exampleFormControlInput1" >
    </div>

    <button type="submit" class="btn btn-primary mt-2">{{ __('Save') }}</button>
</form>


