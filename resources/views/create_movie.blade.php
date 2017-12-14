@extends('layouts.base')

@section('title', 'CreateMovie')
@section('main')
  <div class="container">
    <br>
    <h1>Add a new Movie</h1>
    <br>
    {!! Form::open(['url' => '/movie/insert']) !!}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Category', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, 0, ['multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Price') }}}
        {{{ Form::number('price') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Stock') }}}
        {{{ Form::number('stock') }}}
      </div>
      <div class="form-group">
        {{{ Form::submit('Insérer', ['class' => 'btn btn-outline-success']) }}}
      </div>
    {!! Form::close() !!}
  </div>
@endsection
