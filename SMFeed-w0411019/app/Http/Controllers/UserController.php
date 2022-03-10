<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('IsAdmin');
    }


    public function create(){
        return view('user.create');
    }

    public function store(){


        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        //dd(request()->input('roles'));


        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();

        $user->roles()->sync(request()->input('roles'));


        return redirect('/admin/users/'.$user->id);
    }


    public function index(User $users){

        $usersFiltered = array();

        foreach($users->get() as $user) {
            if ($user->roles()->get()->count()>0){
                $usersFiltered[] = $user;
            }
        }

        return view('user.index',compact('usersFiltered'));
    }


    public function show(User $user){


        return view('user.show',compact("user"));
    }



    public function edit(User $user){

        $roles = $user->roles()->pluck('roles.id')->toArray();

        return view('user.edit',compact('user','roles'));
    }



    public function update(){

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email',
        ]);

        $user = User::where('id','=',request()->id)->first();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->updated_at = Carbon::now();
        $user->save();

        //dd(request()->input('roles'));

        $user->roles()->sync(request()->input('roles'));


        return redirect('/admin/users/'.$user->id);
    }

    public function destroy(User $user){

        $user->delete();

        return redirect('/admin/users');
    }

}
