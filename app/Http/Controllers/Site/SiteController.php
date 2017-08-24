<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return view("site.home");
    }
    
    public function contato(){
        return view("site.contato");
    }
    
    public function listarProdutos(){
        return view("site.lista-de-produtos");
    }
}
