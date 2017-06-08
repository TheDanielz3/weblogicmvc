<?php

use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\View;




class PlanoController extends BaseController
{

    public function index()
    {
        //devolve a vista com o formulario de insercao
        return View::make('plano.index');


    }

    public function show(){
    //buscar dados do form
    $credito=Post::get('credito');
    $numPrest=Post::get('numprest');


    //criar o modelo CalculadoraPlano e calcular plano
        $cp = new CalculadoraPlano();
        $plano = $cp->calculaPlano($credito,$numPrest);



        //criar a vista passando o plano
        return View::make('plano.show', ['plano' => $plano]);
        
    }
}