@extends('layouts.app')

@section('SousTitre', 'Email Reset Password')

@section('content')

<div id="formContact" class="formContact">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
        @csrf

        <div class="form-group offset-md-1 col-md-10">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>

            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>


        <div class="form-group text-center">
            <button class="FormBtn btn btn-primary btn-lg" type="submit">{{ __('Send Password Reset Link') }} &raquo;</button>
        </div>
    </form>
</div>

@endsection
