<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function home() {

    //variável de servidor: no futuro irá carregar dados a partir da Base de Dados
    $className = 'Técnico Especialista de Programação e Sistemas de Informação';

    $courseInfo =[
        'classesNr' =>5,
        'hrs'=>'1500h',
        'responsable' =>'Dra Anabela'
    ];

    //fazer debug de código (ver os valores armazenados)
    //dd($courseInfo['responsable']);


    $classes = ['TEPSI', 'Software Developer', 'LowCode'];

    return view('utils.home', compact('className','courseInfo'));
    }

    public function welcome() {
        return view('welcome');
}
}
