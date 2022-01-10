<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index() {
        echo "<h4>Listagem de departamentos</h4>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";

        if(Auth::check()) {
            echo "<h4>Usuário logado: " . Auth::user()->name . "</h4>";
        } else {
            echo "<h4>Usuário não logado</h4>";
        }
    }

}
