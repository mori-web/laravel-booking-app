@extends('layouts.default.app')

@section('title', 'お問い合わせ確認ページ')

@section('content')
<div class="container mt-5 pb-3">
    <p class="mb-5">以下の内容で受け付けますが、よろしいでしょうか？</p>

    <form action="{{ route('contact.store') }}" method="post">

        @csrf
        <input type="hidden" name="title" value="{{ $contact['title'] }}">
        <input type="hidden" name="name" value="{{ $contact['name'] }}">
        <input type="hidden" name="email" value="{{ $contact['email'] }}">
        <input type="hidden" name="is_contact_speed" value="{{ $contact['is_contact_speed'] }}">
        <input type="hidden" name="message" value="{{ $contact['message'] }}">

        <div>
            <p>
                タイトル：{{ $contact['title'] }}
            </p>
            <p>
                お名前：{{ $contact['name'] }}
            </p>
            <p>
                メールアドレス：{{ $contact['email'] }}
            </p>
            <p>
                希望対応：{{ $contact['is_contact_speed'] == 0 ? '普通' : '早急' }}
            </p>
            <p>
                メッセージ：{{ $contact['message'] }}
            </p>
        </div>

        <div class="d-flex mt-4">
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