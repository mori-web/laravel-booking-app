@extends('layouts.app')

@section('title', 'お問い合わせ詳細ページ')

@section('content')
<div class="container mt-5">
  <h2 class="h2">お問い合わせ・詳細ページ</h2>
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between">

      <div class="mt-3">
        
        <h2 class="h2">
          {{ $contact->title }}
        </h2>
        <div class="mt-3">
          対応状況：{{ $contact->status }}
        </div>
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
      </div>
  
      <div class="d-flex">
        <div class="ml-3">
          <a class="btn btn-outline-primary" href="{{ route('contact.edit',$contact) }}">編集</a>
        </div>
      </div>
  
    </div>
    {{-- <div class="card-body">
      {{ $cotact->message }}
    </div>
    <div class="card-footer">
      <span class="mr-2 float-right">
        投稿日時 {{ $contact->created_at->diffForHumans() }}
      </span>
    </div> --}}
  </div>
</div>
@endsection
