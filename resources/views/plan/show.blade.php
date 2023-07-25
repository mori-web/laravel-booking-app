@extends('layouts.app')

@section('title', '宿泊プラン 詳細ページ')

@section('content')

<div class="card mt-5">
  <div class="card-header">
    {{ $plan->name }}
  </div>
  <div class="card-body">
    
    
    @if(!empty($plan->image))
    <div class="mb-3">
      <img src="{{ $plan->image }}" alt="">
    </div>
    @endif
    
    <div class="mb-3">
      {{ $plan->price }}
    </div>

    <div class="mb-3">
      {{ $plan->description }}
    </div>

  </div>
</div>




@endsection
