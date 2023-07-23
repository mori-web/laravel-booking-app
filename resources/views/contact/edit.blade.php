@extends('layouts.app')

@section('title', 'お問い合わせ編集ページ')

@section('content')
<div class="container mt-5">
  <h2 class="h2">お問い合わせ・編集ページ</h2>
  <form action="{{ route('contact.store') }}" method="post">
    
    @csrf
    
    <h3 class="h3 mt-4">
      {{ $contact->title }}
    </h3>
    
    <div class="mt-3">
      お名前：{{ $contact->name }} 様
    </div>
    <div class="mt-3">
      メールアドレス：{{ $contact->email }}
    </div>
    <div class="mt-3">
      メッセージ：<br>
      {{ $contact->message }}
    </div>
    <div class="mt-3">
      対応状況
    </div>

    <div class="d-flex mt-5">
      <div class="mt-2">
        <input type="submit" class="btn btn-outline-success" value="更新">
      </div>
      <div class="mt-2 ml-3">
        <a class="btn btn-outline-primary" onClick="history.back()">戻る</a>
      </div>
    </div>

  </form>
</div>
@endsection
