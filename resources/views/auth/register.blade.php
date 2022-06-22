@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
@endsection
@section('content')
<p class="bread">新規会員登録</p>

     <div class="register-content">
      <p class="register-title">新規会員登録</p>
      <h3>新規会員登録</h3>
      <form method="POST" action="{{ route('register') }}" class="mailetype-container">
        @csrf
     <div class="r-user-input">
       <p class="r-user-titile">ユーザー名<span class="reqred">必須</span></p>
       <input id="r-user" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="ユーザー名" autofocus>
       @error('name')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror
     </div>

     <div class="r-maile-input">
      <p class="r-emaile-titile">メールアドレス<span class="reqred">必須</span></p>
      <input id="r-emaile" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">
      @error('email')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="r-pass-input">
      <p class="r-pass-titile">パスワード<span class="reqred">必須</span></p>
      <input id="r-pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード">
      @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="r-pass-input">
      <p class="r-pass-titile">パスワード(確認)<span class="reqred">必須</span></p>
      <input id="r-pass-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="パスワード(確認)">

    </div>
      <div>
           <!-- <input type="button" name="r-register-btn" value="送信する" onclick="location.href='./sentmaile.html'"> -->
           <button type="submit" class="btn btn-primary" class="r-maile-btn">登録する</button>
             <p>アカウントはお持ちですか?  <a href="{{ route('login') }}" class="login-btn"><i class="fa-solid fa-caret-right"></i>ログインする</a></p>
         </div>

      </form>

@endsection
