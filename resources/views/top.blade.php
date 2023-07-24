@extends('layouts.app')

@section('title', 'TOPページ')

@section('content')
<div class="bg-image text-center d-flex align-items-center">
  <div class="container">
      <h1 class="display-4 bg-text">ようこそ 東京旅館へ</h1>
      <p class="lead bg-text">最高の滞在地を一箇所で見つけられる場所。</p>
  </div>
</div>
<div class="container">
  <div class="d-flex p-5">
    <a class="block p-5" href="{{ route('top') }}">topページ</a>
    <a class="block ml-5 p-5" href="{{ route('access') }}">アクセスページ</a>
    <a class="block ml-5 p-5" href="{{ route('contact.create') }}">お問い合わせ</a>
  </div>
</div>
@endsection
