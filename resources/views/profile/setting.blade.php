@extends('layouts.layout')
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/setting.css') }}" type="text/css">
  @endsection
@section('content')

<form class="setting-container" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" >
  @csrf
    <h2 class="setting-title">設定</h2>
    <div class="setting-inner">
        <div class="name">
        <label for="name">名前</label>
        <input type="text" id="name" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" onfocus="this.select();" name="name">
        </div>
        <div class="image">
        <label for="avatar">プロフィール画像</label>
          <input id="r-emaile" type="file" class="form-control @error('email') is-invalid @enderror" name="avatar">
          @error('image')
            <p class="invalid-feedback" role="alert">
            <p>{{ $message }}</p>
            </p>
          @enderror
        </div>
<div class="settingokbtn-container">
<button  type="submit" class="settingokbtn">登録する</button>
</div>

</form>

</div>


<div class="logout">
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >ログアウトする</a>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@endsection
<script src="{{ asset('js/newcreattodo.js') }}"></script>