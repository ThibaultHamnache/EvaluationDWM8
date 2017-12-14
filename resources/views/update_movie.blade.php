@extends('layouts.base')

@section('title', 'UpdateMovie')
@section('main')
  <div class="container">
    <br>
    <h1>Update a Movie</h1>
    <br>
    {!! Form::open(['url' => '/movie/update_movie']) !!}
    {{{ Form::hidden('id', $movie->id) }}}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name', $movie->name) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Category', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, $movie->categories, ['multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date', $movie->release_date) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Price') }}}
        {{{ Form::number('price', $movie->price) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Stock') }}}
        {{{ Form::number('stock', $movie->stock) }}}
      </div>
      <div class="form-group">
        {{{ Form::submit('Update', ['class' => 'btn btn-outline-success']) }}}
      </div>
    {!! Form::close() !!}
  </div>
@endsection
