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
    $serie = Player::find($id);
    $serie->teams()->detach();
    $serie->delete();
    return redirect('/');
  }

  public function updateOne(Request $request, $id)
  {
    $player = Player::find($id);
    $rolesAll = Role::all();
    //pour gerer le formulaire
    $roles = [];//array vide
    foreach ($rolesAll as $value) {
      $roles[$value->id] = $value->role;// on met les gender dans un array
    }

    $teamsAll = Team::all();
    //pour gerer le formulaire
    $teams = []; //array vide
    foreach ($teamsAll as $value) {
      $teams[$value->id] = $value->team; // on met les couleur dans un array
    }
    return view('update', ['roles' => $roles, 'teams' => $teams, 'player' => $player]);
  }
  public function updateOneAction(Request $request)
  {

    $player = Player::find($request->id);
    $player->firstname = $request->firstname;
    $player->lastname = $request->lastname;
    $player->number = $request->number;
    $player->age = $request->age;
    $player->role_id = $request->role;
    $player->teams()->detach();
    $player->teams()->attach($request->teams);
    $player->save();
    return redirect('/');
  }
}
