@extends('partials.layout')
@section('title', 'Confirm Password')
@section('content')
<div class="card bg-base-300 max-w-md mx-auto mt-10">
    <div class="card-body">
        <p class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">{{ __('Password') }}</legend>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                       class="input w-full @error('password') input-error @enderror"
                       placeholder="Password" />
                @error('password')
                    <p class="label text-error mt-2">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
