@extends('layouts.default.app')

@section('title', '宿泊プラン 一覧ページ')

@section('content')

    @auth
        <div class="mt-5">
            <a href="{{ route('plan.create') }}" class="btn btn-primary">プラン新規作成</a>
        </div>
    @endauth

    {{-- 検索一覧 --}}
    <form action="{{ route('plan.index') }}" method="get" class="">
        <div class="mt-3">
            <label for="" class="col-form-label">プラン名 検索</label>
            @include('components.form.text', ['name' => 'plan_search', 'class' => ''])
        </div>
        <div class="my-3">
            <button type="submit" class="btn btn-outline-primary">検索</button>
        </div>
    </form>

    {{-- 検索結果 --}}
    <h2 class="h2 mt-5">検索一覧</h2>
    <ul class="list-group mt-3">
        @foreach ($plan_searches as $plan_search)
            <li class="list-group-item mb-3">
                <a href="{{ route('plan.show', $plan_search) }}" class="block">
                    <h3 class="h3 mt-2">{{ $plan_search->name }}</h3>
                    <p class="mt-4">料金：{{ $plan_search->price }}</p>
                    <p class="mt-4">{{ $plan_search->description }}</p>
                </a>
            </li>
        @endforeach
    </ul>

    <h3 class="h3 mt-5">プラン一覧</h3>
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
                            <form action="{{ route('plan.destroy', $plan) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="ml-3">
                                    <button type="submit" class="btn btn-outline-danger"
                                        onClick="return confirm('本当に削除しますか？');">削除</button>
                                </div>
                            </form>
                        </div>
                    @endauth

                </div>

                <div class="card-body">
                    @if (!empty($plan->image))
                        <div class="mb-3">
                            <img src="{{ asset('storage/images/' . pathinfo($plan->image, PATHINFO_BASENAME)) }}"
                                alt="">
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

    <div class="mb-3">
        {{ $plans->links() }}
    </div>

@endsection
