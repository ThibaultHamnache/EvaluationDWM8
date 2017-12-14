<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Category as Category;


class SerieController extends Controller
{
  public function index()
  {
    $series = Serie::all();
    return view('serie', ['series' => $series]);
  }

  public function insertOne(Request $request)
  {
    $serie = new Serie;
    $serie->name = $request->name;
    $serie->nb_seasons = $request->nb_seasons;
    $serie->episodes = $request->episodes;
    $serie->release_date = $request->release_date;
    $serie->price = $request->price;
    $serie->stock = $request->stock;
    $serie->category_id = $request->category;
    $serie->save();
    $serie->categories()->attach($request->categories);
    return redirect('/serie');
  }

  public function deleteOne(Request $request, $id)
  {
    $serie = Serie::find($id);
    $serie->categories()->detach();
    $serie->delete();
    return redirect('/serie');
  }

  public function updateOne(Request $request, $id)
  {
    $serie = Serie::find($id);

    $categoriesAll = Category::all();
    //pour gerer le formulaire
    $categories = []; //array vide
    foreach ($categoriesAll as $value) {
      $categories[$value->id] = $value->category; // on met les couleur dans un array
    }
    return view('update_serie', ['categories' => $categories, 'serie' => $serie]);
  }
  public function updateOneAction(Request $request)
  {

    $serie = Serie::find($request->id);
    $serie->name = $request->name;
    $serie->nb_seasons = $request->nb_seasons;
    $serie->episodes = $request->episodes;
    $serie->release_date = $request->release_date;
    $serie->price = $request->price;
    $serie->stock = $request->stock;

    $serie->categories()->detach();
    $serie->categories()->attach($request->categories);
    $serie->save();
    return redirect('/serie');
  }
}
