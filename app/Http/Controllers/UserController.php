<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{

    public function index(){
        $users = Users::all();

        return view('users.index', ['users' => $users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone_number'=> 'required|min:10',
            'address' => 'required', 
            
        ]);

        $newUser = Users::create($data);

        return redirect(route('user.index'));
        
    }
   
    //
}