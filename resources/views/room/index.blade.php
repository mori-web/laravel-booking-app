@extends('layouts.default.app')

@section('title', '客室紹介ページ')

@section('content')
<div class="mt-3 pb-3">
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card p-4 h-100">
        <div class="">
          <img class="card-img-top" src="{{ asset('images/single_room.jpg') }}" alt="">
        </div>
        <div class="mt-3">
          <h2 class="h4">シングルルーム</h2>
          <div class="mt-3">
            <p class="">この部屋はシングルルームです。<br>お部屋の詳細に付きはしてはお気軽にお問い合わせくださいませ。</p>
          </div>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">ユニットバス</li>
            <li class="list-group-item">冷蔵庫</li>
            <li class="list-group-item">テレビ</li>
            <li class="list-group-item">アメニティ</li>
          </ul>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">エアコン</li>
            <li class="list-group-item">Wi-Fi</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card p-4 h-100">
        <div class="">
          <img class="card-img-top" src="{{ asset('images/double_room.jpg') }}" alt="">
        </div>
        <div class="mt-3">
          <h2 class="h4">ダブルルーム</h2>
          <div class="mt-3">
            <p class="">この部屋はダブルルームです。<br>お部屋の詳細に付きはしてはお気軽にお問い合わせくださいませ。</p>
          </div>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">バス</li>
            <li class="list-group-item">トイレ</li>
            <li class="list-group-item">冷蔵庫</li>
            <li class="list-group-item">テレビ</li>
            <li class="list-group-item">アメニティ</li>
          </ul>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">エアコン</li>
            <li class="list-group-item">Wi-Fi</li>
            <li class="list-group-item">照明</li>
            <li class="list-group-item">空気清浄機</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card p-4 h-100">
        <div class="">
          <img class="card-img-top" src="{{ asset('images/twin_room.jpg') }}" alt="">
        </div>
        <div class="mt-3">
          <h2 class="h4">ツインルーム</h2>
          <div class="mt-3">
            <p class="">この部屋はツインルームです。<br>お部屋の詳細に付きはしてはお気軽にお問い合わせくださいませ。</p>
          </div>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">バス</li>
            <li class="list-group-item">トイレ</li>
            <li class="list-group-item">冷蔵庫</li>
            <li class="list-group-item">大型テレビ</li>
            <li class="list-group-item">アメニティ</li>
          </ul>
          <ul class="list-group list-group-horizontal mt-3">
            <li class="list-group-item">エアコン</li>
            <li class="list-group-item">Wi-Fi</li>
            <li class="list-group-item">ユニットバス</li>
            <li class="list-group-item">空気清浄機</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <div class="my-3">
    <a href="{{ route('top') }}" class="btn btn-outline-primary">TOP</a>
  </div>

</div>
@endsection