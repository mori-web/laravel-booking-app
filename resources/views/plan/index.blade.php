@extends('layouts.app')

@section('title', '宿泊プラン 一覧ページ')

@section('content')
  
  @auth
  <div class="mt-5">
    <a href="{{ route('plan.create') }}" class="btn btn-primary">プラン新規作成</a>
  </div>
  @endauth



@endsection
