@extends('layouts.app')

@section('title', '宿泊プラン編集ページ')

@section('content')
  <form action="{{ route('plan.update', $plan) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('patch')

    <div class="mb-3">
      <label for="name" class="form-label">プラン名</label>
      <x-input-error :messages="$errors->get('name')" />
      <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $plan->name) }}">
    </div>

    <div class="mb-3">
      @if(!empty($plan->image))
      <div class="mb-3">
        <img src="{{ asset('storage/images/' . pathinfo($plan->image, PATHINFO_BASENAME) ) }}" alt="">
      </div>
      @endif
      <label for="image" class="form-label">画像</label>
      <x-input-error :messages="$errors->get('image')" />
      <input class="form-control" type="file" name="image" id="image" value="{{ old('image', $plan->image) }}">
    </div>

    <div class="form-group mb-3">
      <label for="price form-label">料金</label>
      <x-input-error :messages="$errors->get('price')" />
      <select class="form-control" name="price" id="price">
        <option value="10000" {{ old('price', $plan->price) == 10000 ? 'selected' : '' }}>10,000円</option>
        <option value="20000" {{ old('price', $plan->price) == 20000 ? 'selected' : '' }}>20,000円</option>
        <option value="30000" {{ old('price', $plan->price) == 30000 ? 'selected' : '' }}>30,000円</option>
        <option value="40000" {{ old('price', $plan->price) == 40000 ? 'selected' : '' }}>40,000円</option>
        <option value="50000" {{ old('price', $plan->price) == 50000 ? 'selected' : '' }}>50,000円</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">説明</label>
      <x-input-error :messages="$errors->get('description')" />
      <textarea class="form-control" name="description" id="description" rows="5">{{ old('description', $plan->description) }}</textarea>
    </div>

    <div class="d-flex mb-3">
      <div class="btn btn-primary">
        <input type="submit" value="更新">
      </div>
      <div class="ml-3">
        <a class="btn btn-outline-primary" onClick="history.back();">戻る</a>
      </div>
    </div>

  </form>
@endsection
