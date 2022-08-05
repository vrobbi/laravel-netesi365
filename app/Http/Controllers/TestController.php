<?php

namespace App\Http\Controllers;

// use App\Library\Interfacce\ServizioInterfaccia;


class TestController extends Controller
{   
    public function scrivotest()
    {
        return 'il test controller esterno';
    }

    public function index(ServizioInterfaccia $variabilequalsiasi)
    {    //domsomethingusefull è un metodo della classe demouno e demodue registrati da serviziointerfaccia
        echo $variabilequalsiasi->doSomethingUseful();
      // echo $customServiceInstance->boot();
    }
}