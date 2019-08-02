<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class homeController extends Controller
{
   
    //vào trang chủ
    public function index(){
    	$err_msg = "";
    	return view('login',compact('err_msg'));
    }

    public function doLogin(){
    	$username = Request('username');
    	$username = str_replace('\'','',$username);
    	$username = str_replace('=','',$username);
    	$username = str_replace(' or ','',$username);
    	$user = DB::table('tbl_account')
    			 ->where([
		            ['enable', '=', 1],
		            ['username', '=', $username]
        		  ])->first();
    	if(empty($user)){
    		$err_msg = "User không tồn tại";
    		return view('login',compact('err_msg'));
    	}else{
    		if($user->local == '1'){
    			$password = md5(Request('password'));
    			if($user->password == $password){
    				session(['BCTUser' => $user->id]);
                    session(['BTCName' => $user->fullname]);
    				session(['BCTRole' => md5($user->role)]);
                        // echo $user->role;
    				switch($user->role){
    					case 'Administrator' : 
    						return redirect('/admin/home');
    						break;
    					case 'manager' :
    						break;
    					case 'am' :
    						break;
    					case 'technical':
    						break;
    					default:
    						break;
    				}
    			}else{
    				$err_msg = "Sai password";
    			   return view('login',compact('err_msg'));
    			}
    		}
    	}
    }

    public function logout(){
       session()->forget('BCTUser');
       session()->forget('BTCName');
       session()->forget('BCTRole');
       return redirect('/'); 
    }
}

?>