<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
use Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('manage.users.index')->withUsers($users);
    }

    public function create()
    {
        return view('manage.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
        ]);
        if (!empty($request->password)) {
            $password = trim($request->password);
        } else {
            # set the manual password
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($password);
        if ($user->save()) {
            return redirect()->route('users.index');
        } else {
            Session::flash('danger', 'ببخشید یه مشکلی هنگام ساخت کاربر جدید به وجود آمده !');
            return redirect()->back();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view("manage.users.edit")->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password_options == 'auto') {
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $user->password = Hash::make($str);
        } elseif ($request->password_options == 'manual') {
            $user->password = Hash::make($request->password);
        }
        if ($user->save()){
            return redirect()->route('users.index');
        }else {
            Session::flash('danger', 'ببخشید یه مشکلی هنگام ویرایش  مشخصات کاربر به وجود آمده !');
            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        //
    }
}
