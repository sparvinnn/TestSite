<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request){

        try{
            User::create([
                'name'      => $request->name,
                'role_id'   => (integer)$request->role_id,
                'mobile'    => $request->mobile,
                'email'     => $request->email,
                'password'  => $request->password,
            ]);
            return response()->json([
                'msg' => 'successfully'
            ], 200);

        }catch(\Exception $exception){
            return response()->json([
                'data'  => $exception,
                'msg'   => 'failed'
            ], 500);
        }
    }
}
