@extends('partials.layout')
@section('title', 'Forgot Password')
@section('content')
<div class="card bg-base-300 max-w-md mx-auto mt-10">
    <div class="card-body">
        <p class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </p>

        @if (session('status'))
            <p class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </p>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __('Email') }}</legend>
                <input id="email" name="email" type="email" required autofocus
                       value="{{ old('email') }}"
                       class="input w-full @error('email') input-error @enderror"
                       placeholder="Email" />
                @error('email')
                    <p class="label text-error mt-2">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
