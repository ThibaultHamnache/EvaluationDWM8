<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CreateSerieController extends Controller
{
  public function index()
  {
    $categoriesAll = category::all();
    //pour gerer le formulaire
    $categories = []; //array vide
    foreach ($categoriesAll as $value) {
      $categories[$value->id] = $value->category; // on met les couleur dans un array
    }
    return view('create_serie', ['categories' => $categories]);
  }
}
