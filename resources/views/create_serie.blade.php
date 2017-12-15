@extends('layouts.base')

@section('title', 'CreateSerie')
@section('main')
  <div class="container">
    <br>
    <h2>Add a new Serie</h2>
    <br>
    {!! Form::open(['url' => '/serie/insert']) !!}
      <div class="form-group">
        {{{ Form::label('Name') }}}
        {{{ Form::text('name', '', array('required' => 'required')) }}}
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
        {{{ Form::label('Category', 'Category', ['class' => 'align-top']) }}}
        {{{ Form::select('categories[]', $categories, 0, ['class' => 'select', 'multiple' => true]) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Release Date') }}}
        {{{ Form::number('release_date') }}}
      </div>
      <div class="form-group">
        {{{ Form::label('State') }}}
        {{{ Form::select('state', $states, null, ['class' => 'select_state']) }}}
      </div>
      <div class="form-group">
        {{{ Form::label('Price') }}}
        {{{ Form::number('price', '', array('required' => 'required')) }}}
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
