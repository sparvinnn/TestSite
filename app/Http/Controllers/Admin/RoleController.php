<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function create(Request $request){
        $name = $request->name;

        try{
            Role::create([
                'name' => $name
            ]);

            unset($name);
            
            return response()->json([
                'msg' => 'successfully'
            ], 200);

            
        
        }catch(\Exception $exception){
            unset($name);
            return response()->json([
                'error' => $exception,
                'msg'   => 'failed'
            ], 500);
        }
    }
}
