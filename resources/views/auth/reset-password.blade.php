@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')
<div class="card bg-base-300 max-w-md mx-auto mt-10">
    <div class="card-body">
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __('Email') }}</legend>
                <input id="email" name="email" type="email" required autofocus autocomplete="username"
                       value="{{ old('email', $request->email) }}"
                       class="input w-full @error('email') input-error @enderror"
                       placeholder="Email" />
                @error('email')
                    <p class="label text-error mt-2">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Password -->
            <fieldset class="fieldset mt-4">
                <legend class="fieldset-legend">{{ __('Password') }}</legend>
                <input id="password" name="password" type="password" required autocomplete="new-password"
                       class="input w-full @error('password') input-error @enderror"
                       placeholder="Password" />
                @error('password')
                    <p class="label text-error mt-2">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Confirm Password -->
            <fieldset class="fieldset mt-4">
                <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                       class="input w-full @error('password_confirmation') input-error @enderror"
                       placeholder="Confirm Password" />
                @error('password_confirmation')
                    <p class="label text-error mt-2">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
