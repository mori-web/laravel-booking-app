@extends('layouts.app')

@section('title', 'アクセス案内 - みんなシステムズ旅館')

@section('content')
<div class="container py-5">

  <!-- Google Map Embed -->
  <div class="row mb-4">
      <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.752495593064!2d139.74340807641627!3d35.65846913122289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd956a37a9%3A0xaf3bb79f07f4144b!2z44CSMTA1LTAwMTEg5p2x5Lqs6YO95riv5Yy66Iqd5YWs5ZyS77yU5LiB55uu77yS4oiS77yS4oiS77yY!5e0!3m2!1sja!2sjp!4v1690076319233!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
  <div class="mt-5">
    <a class="btn btn-outline-primary" onClick="history.back();">TOP</a>
  </div>
</div>
@endsection

