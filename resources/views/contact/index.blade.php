@extends('layouts.default.app')

@section('title', 'お問い合わせ一覧ページ')

@section('content')
<div class="container mt-5">
    <h2 class="h2">お問い合わせ一覧</h2>
    <ul class="list-group mt-3">
        @foreach ($contacts as $contact)
        <li class="list-group-item mb-3">
            <a href="{{ route('contact.show', $contact) }}" class="block">
                <h3 class="h3 mt-2">{{ $contact->title }}</h3>
                <p class="mt-4">お問い合わせ日時：
                    @if(isset($contact->created_at))
                    {{ $contact->created_at->format('%Y年%m月%d日 %H時%M分') }}
                    @endif
                </p>
                <p>対応担当者：
                    @if(isset($contact->user->name))
                    {{ $contact->user->name }}
                    @endif
                </p>
                <p class="mt-4 btn {{ $contact->is_status === 1 ? 'btn-success' : 'btn-primary' }}">
                    対応状況：{{ $contact->is_status ? '対応済' : '未対応' }}</p>
                <p class="mt-4">{{ $contact->name }} 様</p>
                <p class="mt-2 mb-3">
                    {{ Str::limit($contact->message, 50, '...') }}
                </p>
                <div class="mt-3">
                    <p>希望対応：
                        @if ($contact->is_contact_speed === 0)
                        <span>普通</span>
                        @else
                        <span class="text-danger">早急に</span>
                        @endif
                    </p>
                </div>
                <p class="mt-5 mb-3">
                    メモ：
                    {{ Str::limit($contact->memo, 50, '...') }}
                </p>
            </a>
        </li>
        @endforeach
    </ul>
    <div class="pb-4">
        {{ $contacts->links() }}
    </div>
</div>


@endsection