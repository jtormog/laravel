<?php

namespace App\Http\Controllers;

class Product
{
    public $name, $id;
    function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }
}


class ProductController extends Controller
{

    public $seleccion, $ofertas, $topventas;

    function init_variables()
    {

        // JSON String 
        $this->seleccion = json_decode('[
        { "name" : "producto seleccion 1", "id" : 991},
        { "name" : "producto seleccion 2", "id" : 992}
        ]');

        // Array asociativo
        $this->ofertas = [
            ["name" => "Croqueta Espía", "id" => 101, "precio" => 9.99, "imagen" => "https://ejemplo.com/imagenes/croqueta-espia.jpg"],
            ["name" => "Tortilla de Altura", "id" => 102, "precio" => 4.50, "imagen" => "https://ejemplo.com/imagenes/tortilla-altura.jpg"],
            ["name" => "Churro Saltarín", "id" => 103, "precio" => 7.25, "imagen" => "https://ejemplo.com/imagenes/churro-saltarin.jpg"],
            ["name" => "Café Matutino Supremo", "id" => 104, "precio" => 3.99, "imagen" => "https://ejemplo.com/imagenes/cafe-matutino-supremo.jpg"],
            ["name" => "Queso de Batalla", "id" => 105, "precio" => 5.75, "imagen" => "https://ejemplo.com/imagenes/queso-batalla.jpg"],
            ["name" => "Bocadillo Galáctico", "id" => 106, "precio" => 6.50, "imagen" => "https://ejemplo.com/imagenes/bocadillo-galactico.jpg"],
            ["name" => "Zumo de Huracán", "id" => 107, "precio" => 4.99, "imagen" => "https://ejemplo.com/imagenes/zumo-huracan.jpg"],
            ["name" => "Tapa Rompedientes", "id" => 108, "precio" => 8.20, "imagen" => "https://ejemplo.com/imagenes/tapa-rompedientes.jpg"],
            ["name" => "Helado de la Abuela", "id" => 109, "precio" => 3.50, "imagen" => "https://ejemplo.com/imagenes/helado-abuela.jpg"]
        ];
        
        
        
        // Array de objetos
        $this->topventas = [
            new Product("producto top 1", 995),
            new Product("producto top 2", 996)
        ];
    }

    function index(){
        $this->init_variables();
        return view("products/index")->with("ofertas", $this->ofertas);
    }
}
