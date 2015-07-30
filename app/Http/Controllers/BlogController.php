<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        $header = array
        (
            array("Blog do AZV", "A Clean Blog Theme by Start Bootstrap")
        );

        $posts = array
        (
            array("Marcelo Azevedo","Agosto de 2015","Titulo 04","Sub-titulo 04","Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth."),
            array("Marcelo Azevedo","Julho de 2015","Titulo 03","Sub-titulo 03","Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth."),
            array("Marcelo Azevedo","Junho de 2015","Titulo 02","Sub-titulo 02","Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth."),
            array("Marcelo Azevedo","Maio de 2015","Titulo 01","Sub-titulo 01","Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.")
        );

        return view( 'pages.index', compact( 'posts' ), compact( 'header' ) );
    }

    public function autor($nome)
    {
        return view( 'pages.autor', compact( 'nome' ) );
    }

}
