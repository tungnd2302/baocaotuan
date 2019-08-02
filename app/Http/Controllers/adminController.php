<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class adminController extends Controller
{

	public function __construct(){
			// print_r(session()->all());
	  //       die();
	        $currentUser = session()->get('BTCName');
	        view()->share('currentUser', $currentUser);
        }

	
    //vào trang chủ
    public function index(){
        // return view('admin.index',['currentUser' => $currentUser]);
    	return view('admin.index');
    }

    public function list(){
    	$users = DB::table('tbl_account')->get();
    	$currentUser = session()->get('BTCName');
    	// return view('admin.list',['users' => $users,'currentUser' => $currentUser]);
    	return view('admin.list',['users' => $users]);
    }

    public function edit(){
        $useredit = DB::table('tbl_account')
                    ->where("id",Request()->id)
                    ->first();
        // echo '<pre>';
        // print_r($useredit);
        // die();
        return view('admin.edit',['useredit' => $useredit]);
    }

    public function douseredit(){
        DB::table('tbl_account')
            ->where('id', Request()->id)
            ->update(['username'    => Request()->username,
                      'local'       => Request()->local,
                      'fullname'    => Request()->fullname,
                      'email'       => Request()->email,
                      'role'        => Request()->role,
                      'workphone'   => Request()->workphone,
                      'mobilephone' => Request()->mobilephone,
                    ]);
        return redirect('admin/list');
    }

    public function useradd(){
        return view('admin.add');
    }

    public function douseradd(){
        // echo '<pre>';
        // print_r(Request()->username);
        // echo '</pre>';
        // die;
        DB::table('tbl_account')->insert(
                ['username' => Request()->username, 
                 'password' => md5(Request()->password), 
                 'local' => Request()->local, 
                 'fullname' => Request()->fullname, 
                 'email' => Request()->email, 
                 'role' => Request()->role, 
                 'workphone' => Request()->workphone, 
                 'mobilephone' => Request()->mobilephone, 
                 'enable' => Request()->enable, 
                ]);
        return redirect('admin/list');
    }

    public function delete(){
        print_r(Request()->id);
        DB::table('tbl_account')->where('id', '=', Request()->id)->delete();
        return redirect('admin/list');

    }


    
}

?>