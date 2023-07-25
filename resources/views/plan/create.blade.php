@extends('layouts.app')

@section('title', '宿泊プラン作成ページ')

@section('content')
  <form action="{{ route('plan.store') }}" method="post">
    @csrf

    <div class="mb-3">
      <label for="title" class="form-label">タイトル</label>
      <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
    </div>

    <div class="form-group mb-3">
      <label for="price form-label">料金</label>
      <select class="form-control" id="price">
        <option selected>料金を設定してください</option>
        <option value="10000">10,000円</option>
        <option value="20000">20,000円</option>
        <option value="30000">30,000円</option>
        <option value="40000">40,000円</option>
        <option value="50000">50,000円</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">説明</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
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
