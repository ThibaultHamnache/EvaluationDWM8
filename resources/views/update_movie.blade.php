@extends('layouts.base')

@section('title', 'UpdateMovie')
@section('main')
  <div class="container">
    <br>
    <h2>Update a Movie</h2>
    <br>
    {!! Form::open(['url' => '/movie/update_movie']) !!}
    {{{ Form::hidden('id', $movie->id) }}}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name', $movie->name, array('required' => 'required')) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Category', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, $movie->categories, ['class' => 'select', 'multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date', $movie->release_date) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Price') }}}
        {{{ Form::number('price', $movie->price, array('required' => 'required')) }}}
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
