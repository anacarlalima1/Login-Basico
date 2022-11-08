<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DepartamentoController extends Controller
{
    public function index()
    {
        echo "<h4>Lista de Categorias</h4>";
        echo "<ul>";
        echo "<li>Alimentos</li>";
        echo "<li>Eletrônicos</li>";
        echo "<li>Móveis</li>";
        echo "<li>Utensílios Doméstico</li>";
        echo "<li>Roupas</li>";
        echo "<li>Limpeza</li>";
        echo "</ul>";

        if(Auth::check()){
            $user = Auth::user();
            echo "<h4>Você está logado</h4>";
            echo"<p>" . $user->name . "</p>";
            echo"<p>" . $user->email . "</p>";
            echo"<p>" . $user->id . "</p>";
        }else{
            echo "<h4> Primeiro realize o login</h4>";
        }
    }
}
