@extends('layouts.default.app')

@section('title', 'お問い合わせ詳細ページ')

@section('content')
<div class="container mt-5 pb-3">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between">

      <div class="mt-3">
        
        <h2 class="h2">
          {{ $contact->title }}
        </h2>
        <p class="mt-4">お問い合わせ日時：{{ $contact->created_at->formatLocalized('%Y年%m月%d日 %H時%M分') }}</p>
        <div class="mt-3">
          <p>希望対応：
              @if ($contact->contact_speed == 0)
                  <span>普通</span>
              @else
                  <span class="text-danger">早急に</span>
              @endif
          </p>
      </div>
        <p class="mt-5">管理者対応日時：{{ $contact->updated_at->formatLocalized('%Y年%m月%d日 %H時%M分') }}</p>
        <p class="mt-2 btn {{ $contact->status === '未対応' ? 'btn-primary' : 'btn-success' }}">対応状況：{{ $contact->status }}</p>
        <div class="mt-5">
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
      
    </div>
  </div>
  <div class="bg-white p-4">
    <p>メモ：</p>
    {{ $contact->memo }}
  </div>
  <div class="d-flex mt-3">
    <div class="mt-2">
      <a class="btn btn-outline-primary" href="{{ route('contact.edit',$contact) }}">編集</a>
    </div>
    <div class="mt-2 ml-2">
      <a class="btn btn-outline-primary" onClick="history.back()">戻る</a>
    </div>
  </div>
</div>
@endsection
