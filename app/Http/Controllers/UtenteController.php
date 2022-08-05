<?php

namespace App\Http\Controllers;

use App\Models\Utente;
use Artisan;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function utenti()
    {
        $utenti = Utente::all();
        return view('utenti', ['utentiii' => $utenti]);
    }

    public function index2()
    {
        $utenti = Utente::all();
        return view('users2', ['users' => $utenti]);
    }

    public function show($utenteid)
    {
        // var_dump($request->input('id'));exit;

        $utenteid = Utente::findOrFail($utenteid);
        return view('show', ['utente' => $utenteid]);
    }

    public function destroy($id)
    {

        $userid = Utente::findOrFail($id);
        $userid->delete();
        return redirect('/utenti');
        // return view('detail', ['utente' => $userid]);
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

    public function store()
    {

        $newuser = new Utente;

        $newuser->name = request('name');
        $newuser->email = request('email');

        $newuser->password = request('password');

        $newuser->save();
        return redirect('/')->with('mssg', 'nuovo utente inserito');

    }

    public function create()
    {

        return view('create');

    }

    public function delete($id)
    {

        $utenteid = Utente::findOrFail($id);

        $utenteid->delete();
        return redirect('/utenti');

    }

}
