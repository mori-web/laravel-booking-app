@extends('layouts.app')

@section('title', 'お問い合わせページ')

@section('content')
<div class="container mt-5">
  
  <form action="{{ route('contact.store') }}" method="post">
    
    @csrf
    
    <div class="mb-3">
      <label for="title" class="form-lavel">タイトル</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    
    <div class="mb-3">
      <label for="name" class="form-lavel">お名前</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-lavel">メールアドレス</label>
      <input type="text" name="email" id="email" class="form-control">
    </div>

    <div class="mb-3">
      <input type="hidden" name="status" value="unfinished">
    </div>

    <div class="mb-3 form-group">
      <label for="message" class="form-label">お問い合わせ内容</label>
      <textarea class="form-control" id="message" name="message" rows="5"></textarea>
    </div>

    <div class="d-flex">
      <div class="mt-2">
        <input type="submit" class="btn btn-outline-success" value="送信">
      </div>
      <div class="mt-2 ml-3">
        <a class="btn btn-outline-primary" onClick="history.back()">戻る</a>
      </div>
    </div>

  </form>
</div>
@endsection
