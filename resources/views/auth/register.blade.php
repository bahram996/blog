@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-one-third is-offset-one-third m-t-100">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">{{ __('register') }}</h1>
                        <form method="POST" action="{{ route('register') }}" role="form">
                            @csrf

                            <div class="field">
                                <div class="control has-icons-left has-icons-right">
                                    <input name="name" type="text"
                                           class="input {{ $errors->has('name') ? ' is-danger' : '' }}"
                                           placeholder="{{ __('Name') }}"
                                           value="{{ old('name') }}" autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                                    </span>
                                        <span class="icon is-small is-right"><i class="fa fa-exclamation-triangle"></i></span>
                                    @endif
                                </div>
                            </div>


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

                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <div class="control has-icons-left">
                                            <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
                                                   type="password" placeholder="Password" name="password">
                                            <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                                        </span>
                                                <span class="icon is-small is-right"><i
                                                            class="fa fa-exclamation-triangle"></i></span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <div class="control has-icons-left">
                                            <input type="password" class="input" name="password_confirmation"
                                                   placeholder="Confirm Password" id="password-confirm">
                                            <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <p class="control">
                                    <button class="button is-primary is-outlined is-fullwidth">
                                        register
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
                <h5 class="has-text-centered m-t-20">
                    <a class="is-muted" href="{{ route('login') }}">
                        {{ __('Already have an Account ?') }}
                    </a>
                </h5>
            </div>
        </div>
    </div>
@endsection
