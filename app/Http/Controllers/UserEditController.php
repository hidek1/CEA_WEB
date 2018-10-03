<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class UserEditController extends Controller
{   

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('dashboard_user_edit', compact('user'));
    }

    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails())
        {
            return back()->withInput()->withErrors($validator);
        }
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'password_appear' => $request->password,
        ]);
        return redirect('dashboard_user_list/camp');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
 
        $user->delete();
 
        return redirect('dashboard_user_list');
    }
}
