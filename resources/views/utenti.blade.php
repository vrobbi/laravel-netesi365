@extends('layouts.app')

<div class="container">
<div>
    <h2>Lista degli utenti</h2></div>
<div class="row justify-content-center">
    
        <div class="col-md-8">
                @foreach ($utentiii as $utente)

                <li> <a href="/utenti/{{ $utente->id }}">{{ $utente->name }} </a></li>

                @endforeach

                  <a href="/create">Crea nuovo utente</a>
               
            </div>
        </div>
     </div>    
   