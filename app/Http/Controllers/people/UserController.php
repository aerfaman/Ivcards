<?php

namespace App\Http\Controllers\people;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Input;
use Redirect;
use DB;

class UserController extends Controller
{

    // display login view
    public function getInfo()
    {

        if(Auth::guest())
        {
            return view('user.login');
        }
        $email=DB::table('users')->where('name',Auth::user()->name)->pluck('email');
        return view('user.info')->with('name',Auth::user()->name)->with('email',$email);

    }

    public function postResetpasswd(Request $request)
    {

        $rules=[
            'old_password' => 'required|between:5,18',
            'password' => 'required|between:6,18|confirmed',
            // 'password_confirmation' => 'required|between:6,18',
        ];
        $message=[
            'required' => ':attribute 必须填写.',
            'between' => ':attribute 必须大于:min位小于:max位.',
            'confirmed' => '请输入两次相同密码.',
        ];
        $this->validate($request, $rules,$message);
        if(!Hash::check(Input::get('old_password'),Auth::user()->password))
        {
            return Redirect::back()->withInput()->withErrors('当前密码不正确!');
        }
        $user=User::find(Auth::user()->id);
        $user->password=Hash::make(Input::get('password'));
        if ($user->save())
        {
            $message = ['status' => 'success', 'content' => '注册成功,马上登录你的账号吧'];
            return Redirect::to('user/login')->with('message', $message);
        } else
        {
            $mesage = ['status' => 'danger', 'content' => '注册失败'];
            return Redirect::back()->withInput()->withErrors('注册失败');
        }
    }
    public function getLogin()
    {
        return view('user.login');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alpha_num|between:6,12',
            'captcha' => 'required|captcha',
        ],[
            'required' => ':attribute 必须填写.',
            'email' => ':attribute 格式不正确.',
            'captcha' => ':attribute 输入不正确.',
        ]);
        // if (Input::get('remember') == 'on')
        // {
        //     $remember = true;
        // }
        // else
        // {
        //     $remember = false;
        // }
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')], true)) {
            // return Redirect::to('people/' . Auth::user()->name);
            return Redirect::to('/');
        } else {
            return Redirect::back()->withInput()->withErrors('登陆失败');
        }
    }
    public function getRegister()
    {
        return view('user.register');
    }
    public function postCreate(Request $request)
    {
        $rules = [
            'username' => 'required|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|between:6,12|confirmed',
            'password_confirmation' => 'required|between:6,12',
        ];
        $this->validate($request, $rules,[
            'required' => ':attribute 必须填写.',
            'unique' => '啊,这个邮箱被注册了,用别的邮箱注册,或者点击忘记密码.',
            'email' => ':attribute 格式不正确.',
            'between' => ':attribute 必须大于:min位小于:max位.',
            'confirmed' => '请输入两次相同密码.',
        ]);
        $user = new User;
        $user->name = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        if ($user->save()) {
            $message = ['status' => 'success', 'content' => '注册成功,马上登录你的账号吧'];
            return Redirect::to('user/login')->with('message', $message);
        } else {
            $mesage = ['status' => 'danger', 'content' => '注册失败'];
            return Redirect::back()->withInput()->withErrors('注册失败');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/user/login');
    }
    public function getSetting()
    {
        if (Auth::guest()) {
            $message = ['status' => 'danger', 'content' => '请先登录'];
            return Redirect('user/login')->with('message', $message);
        } else {
            $userInfo = ['name' => Auth::user()->name, 'email' => Auth::user()->email];
        }
        return view('user.setting')->withUserinfo($userInfo);
    }

}
