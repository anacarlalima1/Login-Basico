<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>";
        echo "<li>Carne</li>";
        echo "<li>Arroz</li>";
        echo "<li>Camisa Polo</li>";
        echo "<li>Sofá Cama</li>";
        echo "<li>Computador</li>";
        echo "<li>Limpeza</li>";
        echo "</ul>";
    }
}
