<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function index2()
    {
        $users = User::all();
        return view('users2', ['users' => $users]);
    }

    public function show($userid)
    {
          // var_dump($request->input('id'));exit;
         
        $userid = User::findOrFail($userid);
        return view('detail', ['user' => $userid]);
    }

    public function optimize()
    {
          $exitCode = Artisan::call('optimize');
          return '<h1>Reoptimized class loader</h1>';
    }

    public function migrate()
    {
         // $exitCode = Artisan::call('migrate:fresh --seed');
         $exitCode = Artisan::call('migrate');
          return '<h1>migrated</h1>';
    }

    public function store() {
        
        $newuser = new User;
     // echo  request('codice_fiscale');
     // exit;
        $newuser->name = request('name');
        $newuser->surname = request('surname');

        $newuser->email = request('email');

        $newuser->password = request('password');
      $newuser->codice_fiscale = request('codice_fiscale');
        $newuser->save();
        return redirect('/')->with('mssg','nuovo user inserito');
        
      
        }


        public function create() {
  
            return  view('create');
      
        }


        public function delete($userid) {
  
            $user = User::find($userid);
      
            $user->delete($userid);
      
            echo "Delete Successful!";
      
        }


            
}