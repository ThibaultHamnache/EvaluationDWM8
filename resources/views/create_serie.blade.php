@extends('layouts.base')

@section('title', 'CreateSerie')
@section('main')
  <div class="container">
    <h1>Add a new Serie</h1>
    {!! Form::open(['url' => '/serie/insert']) !!}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Seasons') }}}
        {{{ Form::number('nb_seasons') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Episodes') }}}
        {{{ Form::number('episodes') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Gategory', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, 0, ['multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('State') }}}
        {{{ Form::select('state', $states, null) }}}
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
