@extends('layouts.default.app')

@section('title', 'お問い合わせ編集ページ')

@section('content')
    <div class="container mt-5 pb-3">
        <form action="{{ route('contact.update', $contact) }}" method="post">
            @csrf
            @method('patch')

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
                <p>希望対応：
                    @if (!$contact->is_contact_speed)
                        <span>普通</span>
                    @else
                        <span class="text-danger">早急に</span>
                    @endif
                </p>
            </div>

            <div class="mt-3">
                対応状況
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" id="flexCheckDefault" name="is_status"
                        {{ !$contact->is_status ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckDefault">
                        未対応
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" id="flexCheckChecked" name="is_status"
                        {{ $contact->is_status !== 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexCheckChecked">
                        対応済み
                    </label>
                </div>
                <div class="mb-3 mt-3 form-group">
                    <label for="memo" class="form-label">メモ</label>
                    <x-input-error :messages="$errors->get('memo')" />
                    <textarea class="form-control" id="memo" name="memo" rows="5">{{ old('memo', $contact->memo) }}</textarea>
                </div>
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
