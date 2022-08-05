
@extends('layouts.listautenti')
@section('title', 'About Us')



@section('header')
    @parent
    <h3>About Us</h3>
    <p> is awesome!</p>
@endsection

@section('content')
@foreach ($users as $user) 
               
               <li> {{ $user->first_name }}</li>
           
               @endforeach
@endsection