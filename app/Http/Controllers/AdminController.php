<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
        return view('pages.admin');
    }
    public function all_saler(){
        
        $all_saler = DB::table('tbl_saler')->get();
        $manager_saler  = view('pages.admin')->with('all_saler',$all_saler);
    	return view('pages.admin')->with('all_saler', $manager_saler);

    }
}
