@extends('layouts.default.app')

@section('title', '宿泊プラン 詳細ページ')

@section('content')

<div class="card mt-5 mb-5">
  <div class="card-header">
    {{ $plan->name }}
  </div>
  <div class="card-body">

    @if(!empty($plan->image))
    <div class="mb-3">
      <img src="{{ asset('storage/images/' . pathinfo($plan->image, PATHINFO_BASENAME) ) }}" alt="">
    </div>
    @endif

    <div class="mb-3">
      料金：{{ $plan->price }}
    </div>

    <div class="mb-3">
      説明：{{ $plan->description }}
    </div>

  </div>
</div>




@endsection
