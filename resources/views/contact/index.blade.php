@extends('layouts.app')

@section('title', 'お問い合わせ一覧ページ')

@section('content')
<div class="container mt-5">
  <h2 class="h2">お問い合わせ一覧</h2>
  <ul class="list-group mt-3">
    @foreach ($contacts as $contact)
    <li class="list-group-item mb-3">
      <a href="{{ route('contact.show', $contact) }}" class="block">
        <h3 class="h3 mt-2">{{ $contact->title }}</h3>
        <p class="mt-4 btn {{ $contact->status === '未対応' ? 'btn-primary' : 'btn-success' }}">対応状況：{{ $contact->status }}</p>
        <p class="mt-4">{{ $contact->created_at->formatLocalized('%Y年%m月%d日 %H時%M分') }}</p>
        <p class="mt-4">{{ $contact->name }} 様</p>
        <p class="mt-2 mb-3">
          {{ Str::limit($contact->message, 50, '...') }}
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
