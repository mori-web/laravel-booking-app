@extends('layouts.app')

@section('title', 'お問い合わせページ')

@section('content')
<div class="container mt-5">
  <form action="{{ route('contact.store') }}" method="post">
    @csrf
    
    <input type="submit" value="送信">
  </form>
</div>
@endsection
