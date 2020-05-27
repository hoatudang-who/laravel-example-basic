<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
session_start();
class HomeController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_user');
        if($admin_user){
            return Redirect::to('admin');
        }else{
            return Redirect::to('/')->send();
        }
    }
    public function index(){
    	return view('welcome');
    }
    public function show_dashboard(){
        $this->AuthLogin();
    	return view('pages.admin');
    }
    public function dashboard(Request $request){
    	$admin_user = $request->admin_user;
    	$admin_password = md5($request->admin_password);

    	$result = DB::table('tbl_admin')->where('admin_user',$admin_user)->where('admin_password',$admin_password)->first();
    	if($result){
            Session::put('admin_user',$result->admin_user);
            Session::put('admin_password',$result->admin_password);
            return Redirect::to('/admin');
        }else{
            Session::put('message','Tên đăng nhập hoặc mật khẩu không chính xác');
            return Redirect::to('/');
        }

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_user',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
