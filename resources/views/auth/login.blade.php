@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('Login') }}</h1>
                        <form method="POST" action="{{ route('login') }}" role="form">
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
                                <div class="control has-icons-left">
                                    <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
                                           type="password" placeholder="Password" name="password">
                                    <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                        </span>
                                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                    @endif
                                </div>
                            </div>

                            <div class="field">
                                <b-checkbox name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    {{ __('Remember Me') }}
                                </b-checkbox>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <button class="button is-primary is-outlined is-fullwidth">
                                        Login
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                @if (Route::has('password.request'))
                    <h5 class="has-text-centered m-t-20">
                        <a class="is-muted" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </h5>
                @endif
            </div>
        </div>
    </div>
@endsection
