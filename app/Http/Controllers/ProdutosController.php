<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        echo "<h4>Listagem de produtos</h4";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";
    }
}
