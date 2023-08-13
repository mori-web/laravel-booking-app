@extends('layouts.default.app')

@section('title', '宿泊プラン 詳細ページ')

@section('content')

<div class="card mt-5 mb-5">
  <div class="card-header">
    <div class="">
      {{ $plan->name }}
    </div>

    <div class="d-flex">
      <div class="ml-3">
        {{-- <a class="btn btn-outline-primary" href="{{ route('comment.edit',$comment) }}">編集</a> --}}
      </div>
      <form action="{{ route('plan.destroy', $plan) }}" method="post">
        @csrf
        @method('delete')
        <div class="ml-3">
          <button type="submit" class="btn btn-outline-danger" onClick="return confirm('プランを削除しますか？');">削除</button>
        </div>
      </form>
    </div>
    
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
