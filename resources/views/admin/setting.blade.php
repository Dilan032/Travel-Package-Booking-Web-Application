@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="fw-light">Settings</h2>
    </div>
    <div class="container">
        <div class="mt-5 p-5" style="background-color: rgba(212, 212, 212, 0.268); width: 1000px; border-radius:5px; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);margin-left:100px;">
            <div class="d-flex justify-content-between">
                <div>
                    <h4 style="margin-top: -10px">Update Admin Details</h4>
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
                <button type="submit" class="btn btn-primary mt-2">{{ __('Save') }}</button>
            </form>   
        </div>

        {{-- update password --}}
        <div class="mt-5 p-5" style="background-color: rgba(212, 212, 212, 0.268); width: 1000px; border-radius:5px; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);margin-left:100px;">
            <div class="d-flex justify-content-between">
                <div>
                    <h4>Update Password</h4>
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
        
            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
        
                <div class="form-group mt-4">
                    <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                    <input id="update_password_current_password" name="current_password" type="password" class="form-control mt-1" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
        
                <div class="form-group mt-1">
                    <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                    <input id="update_password_password" name="password" type="password" class="form-control mt-1" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>
        
                <div class="form-group mt-1">
                    <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control mt-1" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
        
            </form>
        </div>
        <br><br><br>

    </div>
</main>

    
@endsection


