@extends('layouts.dashboard.manage')
@section('title')
    مدیریت کاربران
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vue-dashboard.css') }}">
@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                password_options: 'keep'
            }
        });
    </script>
@endsection
@section('body-class')
    hold-transition skin-blue sidebar-mini
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header" style="border-bottom: 1px solid #eee">
                    <h3 class="box-title">لیست کاربران - {{ $user->name }}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="form-group">
                            <label for="text">نام کاربری</label>
                            <input type="text" name="name" class="form-control" id="text"
                                   placeholder="نام کاربری را وارد کنید..." value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="Email1">ایمیل</label>
                            <input type="email" class="form-control" name="email" id="Email1"
                                   placeholder="ایمیل را وارد کنید..." value="{{$user->email}}">
                        </div>
                        <div class="field">
                            <label for="password">رمز عبور</label>
                            <div class="field">
                                <b-radio v-model="password_options" name="password_options" native-value="keep">رمز عبور
                                    رو تغییر نده !
                                </b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_options" name="password_options" native-value="auto">ساختن
                                    رمز عبور تصادفی
                                </b-radio>
                            </div>
                            <div class="field">
                                <b-radio v-model="password_options" name="password_options" native-value="manual">تغیر
                                    رمز عبور به صورت دستی
                                </b-radio>
                                <p class="control">
                                    <input type="password" class="input" name="password" id="password"
                                           v-if="password_options == 'manual'"
                                           placeholder="رمز عبور جدید را وارد کنید....">
                                </p>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-info btn-lg">ویرایش</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

