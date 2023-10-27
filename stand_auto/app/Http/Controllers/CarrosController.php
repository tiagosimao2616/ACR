<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosController extends Controller
{
    private $carros = [
        ["id" => 1, "nome" => "Golf GTI", "desc" => "Uma máquina de cascar pneus", "img" => "/img/carros/1.jpg"],
        ["id" => 2, "nome" => "Fiat Uno", "desc" => "Uma máquina de cascar pneus", "img" => "/img/carros/2.jpg"],
        ["id" => 3, "nome" => "Alpha Romeo", "desc" => "Uma máquina de cascar pneus", "img" => "/img/carros/3.jpg"],
        ["id" => 4, "nome" => "Renault 5", "desc" => "Uma máquina de cascar pneus", "img" => "/img/carros/4.jpg"]
    ];
    
    public function index(){
        return view("carros",["carros" => $this->carros]);
    }

    

    public function show($id){
       $carrosel = null;
       
       foreach ($this->carros as $carro){
        if ($id == $carro['id']){
            $carrosel = $carro;
        }
       }
       return view("detalhes",["carro" => $carrosel]);
}
}
