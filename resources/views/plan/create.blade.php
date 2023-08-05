@extends('layouts.default.app')

@section('title', '宿泊プラン作成ページ')

@section('content')
  <form action="{{ route('plan.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">プラン名</label>
      <x-input-error :messages="$errors->get('name')" />
      <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
    </div>

    <div class="form-group mb-3">
      <label for="price form-label">料金</label>
      <x-input-error :messages="$errors->get('price')" />
      <select class="form-control" name="price" id="price">
        <option value="10000">10,000円</option>
        <option value="20000">20,000円</option>
        <option value="30000">30,000円</option>
        <option value="40000">40,000円</option>
        <option value="50000">50,000円</option>
      </select>
    </div>

    <div class="mb-3">
      <x-input-error :messages="$errors->get('image')" />
      <input class="form-control-file" type="file" name="image" id="image">
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">説明</label>
      <x-input-error :messages="$errors->get('description')" />
      <textarea class="form-control" name="description" id="description" rows="5">{{ old('description') }}</textarea>
    </div>

    <div class="d-flex">
      <div class="btn btn-primary">
        <input type="submit" value="作成">
      </div>
      <div class="ml-3">
        <a class="btn btn-outline-primary" onClick="history.back();">戻る</a>
      </div>
    </div>

  </form>
@endsection
