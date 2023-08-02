@extends('layouts.app')

@section('title', '客室紹介ページ')

@section('content')
  <img src="{{ asset('images/single_room.jpg') }}" alt="">
  <img src="{{ asset('images/double_room.jpg') }}" alt="">
  <img src="{{ asset('images/twin_room.jpg') }}" alt="">
@endsection