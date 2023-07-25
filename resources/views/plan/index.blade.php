@extends('layouts.app')

@section('title', '宿泊プラン 一覧ページ')

@section('content')
  
  @auth
  <div class="mt-5">
    <a href="{{ route('plan.create') }}" class="btn btn-primary">プラン新規作成</a>
  </div>
  @endauth

  <ul class="list-group mt-3">
    @foreach ($plans as $plan)
      <li class="list-group-item mb-3">

          <div class="d-flex justify-content-between align-items-center">
            
            <div class="d-flex bd-highlight mt-2">
              <a class="block" href="{{ route('plan.show', $plan) }}">
                <h2 class="h4 text-primary">
                  {{ $plan->name }}
                </h2>
              </a>
              
            </div>

            @auth
            <div class="d-flex">
              <div class="ml-3">
                <a href="{{ route('plan.edit', $plan) }}" class="btn btn-outline-primary">編集</a>
              </div>
            </div>
            @endauth
            
          </div>
          
          <div class="card-body">
            @if(!empty($plan->image))
            <div class="mb-3">
              <img src="{{ $plan->image }}" alt="">
            </div>
            @endif
            <div class="mb-3">
              料金：{{ $plan->price }}
            </div>
            <div class="mb-3">
              説明：{{ $plan->description }}
            </div>
          </div>

      </li>
    @endforeach
  </ul>



@endsection
