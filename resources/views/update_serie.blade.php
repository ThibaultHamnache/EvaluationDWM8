@extends('layouts.base')

@section('title', 'UpdateSerie')
@section('main')
  <div class="container">
    <br>
    <h1>Update a serie</h1>
    <br>
    {!! Form::open(['url' => '/serie/update_serie']) !!}
    {{{ Form::hidden('id', $serie->id) }}}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name', $serie->name) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Seasons') }}}
        {{{ Form::number('nb_seasons', $serie->nb_seasons) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Episodes') }}}
        {{{ Form::number('episodes', $serie->episodes) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Category', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, $serie->categories, ['class' => 'select', 'multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date', $serie->release_date) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('State') }}}
        {{{ Form::select('state', $states, $serie->state->id) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Price') }}}
        {{{ Form::number('price', $serie->price) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Stock') }}}
        {{{ Form::number('stock', $serie->stock) }}}
      </div>
      <div class="form-group">
        {{{ Form::submit('Update', ['class' => 'btn btn-outline-success']) }}}
      </div>
    {!! Form::close() !!}
  </div>
@endsection
