@extends('layouts.dashboard.manage')
@section('title')
    مدیریت کاربران
@endsection
@section('styles')

@endsection
@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                auto_password: true
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
                    <h3 class="box-title">لیست کاربران</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="text">نام کاربری</label>
                            <input type="text" name="name" class="form-control" id="text"
                                   placeholder="نام کاربری را وارد کنید...">
                        </div>
                        <div class="form-group">
                            <label for="Email1">ایمیل</label>
                            <input type="email" class="form-control" name="email" id="Email1"
                                   placeholder="ایمیل را وارد کنید...">
                        </div>
                        <div class="form-group">
                            <label for="Password">رمز عبور</label>
                            <input type="password" class="form-control" name="password" id="Password"
                                   placeholder="رمز عبور را وارد کنید..." v-if="!auto_password">
                            <label style="display:block;">
                                <input type="checkbox" name="auto_generate" v-model="auto_password"> ساخت رمز عبور
                                تصادقی
                            </label>
                        </div>
                        <button type="submit" class="btn btn-block btn-info btn-lg">ثبت</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
    </div>
@endsection

