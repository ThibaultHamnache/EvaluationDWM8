<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\State;


class CreateSerieController extends Controller
{
  public function index()
  {
    $statesAll = State::all();
    //pour gerer le formulaire
    $states = [];//array vide
    foreach ($statesAll as $value) {
      $states[$value->id] = $value->state;// on met les gender dans un array
    }

    $categoriesAll = category::all();
    //pour gerer le formulaire
    $categories = []; //array vide
    foreach ($categoriesAll as $value) {
      $categories[$value->id] = $value->category; // on met les couleur dans un array
    }
    return view('create_serie', ['states' => $states, 'categories' => $categories]);
  }
}
