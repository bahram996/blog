@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Reset Password') }}</h1>
                        <form method="POST" action="{{ route('password.email') }}" role="form">
                            @csrf
                            <div class="field">
                                <div class="control has-icons-left has-icons-right">
                                    <input name="email" type="email"
                                           class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                                           placeholder="{{ __('E-Mail Address') }}"
                                           value="{{ old('email') }}" autofocus>
                                    <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    </span>
                                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <p class="control">
                                    <button class="button is-primary is-outlined is-fullwidth">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                @if (Route::has('password.request'))
                    <h5 class="has-text-centered m-t-20">
                        <a class="is-muted" href="{{ route('login') }}">
                            {{ __('Back to Login?') }}
                        </a>
                    </h5>
                @endif
            </div>
        </div>
    </div>@endsection
