@extends('layouts.app')

@section('content')
  <h1>Create Booking</h1>
  {{ Form::open(array('action' => 'PostsController@store'))}}


@endsection

