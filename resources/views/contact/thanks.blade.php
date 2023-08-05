@extends('layouts.default.app')

@section('title', 'お問い合わせ完了ページ')

@section('content')
<div class="container mt-5">
  <div class="text-center lh-lg">
    <h2 class="h2 pt-5">お問い合わせ完了</h2>
    <p class="pt-5">{{ $contact['name'] }}様</p>
    <p class="pt-2">お問い合わせを受け付けました。<br>スタッフが必要な情報を持って近くご連絡いたします。<br>もうしばらくお待ちくださいませ。</p>
    <a class="block mt-5" href="{{ route('top') }}">トップページへ戻る</a>
  </div>
</div>
@endsection

