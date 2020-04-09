@extends('layouts.dashboard.manage')
@section('title')
    مدیریت کاربران
@endsection
@section('styles')
    <link rel="stylesheet"
          href="{{ asset('css/dashboard') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('scripts')
    <script src="{{ asset('css/dashboard') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

@endsection
@section('body-class')
    hold-transition skin-blue sidebar-mini
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">لیست کاربران</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <a class="btn btn-app" href="{{ route('users.create') }}"
                       style="display:block;margin: 10px 0px 10px 0px;">
                        <i class="fa fa-user-plus"></i>
                        افزودن کاربر جدید
                    </a>
                    <table class="table table-hover">
                        <tr>
                            <th>آیدی</th>
                            <th>نام کاربری</th>
                            <th>نام و نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>نقش</th>
                            <th>تاریخ عضویت</th>
                            <th>مدیریت</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>نام و نام خانوادگی</td>
                                <td>{{ $user->email }}</td>
                                <td> 4</td>
                                <td>{{ $user->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <a class="btn btn-app" href="{{route('users.edit', $user->id)}}">
                                        <i class="fa fa-edit"></i> ویرایش
                                    </a>
                                    <a class="btn btn-app">
                                        <i class="fa fa-trash-alt"></i>حذف
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div style="text-align: center">
                        {{ $users->links() }}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
    </div>
@endsection
