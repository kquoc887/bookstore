<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function getList() {
		$data = User::select('id','username','level','email')->orderBy('id','DESC')->get();
		return view('admin.user.list', compact('data'));
	}

    public function getAdd() {
    	return view('admin.user.add');
    }

    public function postAdd(UserRequest $request) {
        $user                 = new User();
        $user->username       = $request->txtUsername;
        $user->password       = Hash::make($request->txtPassword);
        $user->email          = $request->txtEmail;
        $user->level          = $request->rdoLevel;
        $user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Add User']);
    }

    public function getDelete($id) {
        $user_current_login = Auth::user()->id;
        $user               = USer::find($id);
        if( ($id == 1) || ($user_current_login != 1 && $user->level == 1)) {
            return redirect()->route('admin.user.list')->with(['flash_level' => 'danger','flash_message' => 'Sorry !! You Can\'t Not Access Delete User']);
        } else {
            $user->delete($id);
            return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Delete User']);
        }
    }

    public function getEdit($id) {
    	$user = User::find($id);
    	return view('admin.user.edit', compact('user'));
    }

    public function postEdit(Request $request, $id) {
        $user = User::find($id);
        if ($request->txtPassword) {
            $this->validate($request, 
            [
                'txtRePassword'      => 'same:txtPassword',
            ],
            [
                'txtRePassword.same' => 'Two password Don\'t Match'
            ]);
            $user->password = Hash::make($request->txtPassword);
        }
        $user->email          = $request->txtEmail;
        $user->level          = $request->rdoLevel;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('admin.user.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Edit User']);
    }


}
