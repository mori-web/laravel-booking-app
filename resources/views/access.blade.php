@extends('layouts.app')

@section('title', 'アクセス案内 - みんなシステムズ旅館')

@section('content')
<div class="container py-5">
  <h1 class="mb-5">アクセス案内</h1>

  <!-- Google Map Embed -->
  <div class="row mb-4">
      <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.5708986188634!2d135.5021653151335!3d34.69388798043272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6f7e7509c39%3A0x2cd9a9f4eddd0b64!2z44CSNTQwLTAwMDIg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy655S677yS5LiB55uu77yV4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1589350246906!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  </div>

  <!-- Access Info -->
  <div class="row">
      <div class="col-lg-6">
          <h2 class="h4 mb-2">住所</h2>
          <p>〒123-4567 東京都港区芝公園4-2-8</p>

          <h2 class="h4 mb-2 mt-4">電話番号</h2>
          <p>03-1234-5678</p>

          <h2 class="h4 mb-2 mt-4">営業時間</h2>
          <p>全日: 24時間営業</p>
      </div>
      <div class="col-lg-6">
          <h2 class="h4 mb-2">最寄り駅</h2>
          <p>東京メトロ日比谷線 神谷町駅 徒歩10分</p>

          <h2 class="h4 mb-2 mt-4">駐車場</h2>
          <p>有り：10台（無料）</p>
      </div>
  </div>
</div>
@endsection

