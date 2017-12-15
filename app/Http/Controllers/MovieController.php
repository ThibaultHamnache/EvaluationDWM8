<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie as Movie;
use App\Category as Category;
use App\State as State;

class MovieController extends Controller
{
  public function index()
  {
    $movies = Movie::orderBy('name', 'asc')->with('categories')->paginate(5);
    return view('movie', ['movies' => $movies]);
  }

  public function insertOne(Request $request)
  {
    $movie = new Movie;
    $movie->name = $request->name;
    $movie->release_date = $request->release_date;
    $movie->price = $request->price;
    $movie->stock = $request->stock;
    $movie->category_id = $request->category;
    $movie->save();
    $movie->categories()->attach($request->categories);
    return redirect('/movie');
  }

  public function deleteOne(Request $request, $id)
  {
    $movie = Movie::find($id);
    $movie->categories()->detach();
    $movie->delete();
    return redirect('/movie');
  }

  public function updateOne(Request $request, $id)
  {
    $movie = Movie::find($id);

    $categoriesAll = Category::all();
    //pour gerer le formulaire
    $categories = []; //array vide
    foreach ($categoriesAll as $value) {
      $categories[$value->id] = $value->category; // on met les couleur dans un array
    }
    return view('update_movie', ['categories' => $categories, 'movie' => $movie]);
  }
  public function updateOneAction(Request $request)
  {

    $movie = Movie::find($request->id);
    $movie->name = $request->name;
    $movie->release_date = $request->release_date;
    $movie->price = $request->price;
    $movie->stock = $request->stock;

    $movie->categories()->detach();
    $movie->categories()->attach($request->categories);
    $movie->save();
    return redirect('/movie');
  }
}
