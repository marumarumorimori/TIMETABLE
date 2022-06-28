@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css">
@endsection

@section('content')
<div class="logincon">
<h3 class="login-title">ログイン</h3>
                    <form method="POST" action="{{ route('login') }}" class="logintype-container">
                        @csrf
                        <div class="l-maileandpass-input">
                        <div class="l-maile-input">
                            <p class="l-emaile-titile">メールアドレス<span class="reqred">必須</span></p>
                            <input id="l-emaile" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">
                            @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </p>
                            @enderror
                        </div>

                        <div class="l-pass-input">
                        <p class="l-pass-titile">パスワード<span class="reqred">必須</span></p>
                        <input id="l-pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワード">
                        @error('password')
                                    <p class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </p>
                        @enderror
                        </div>

                        </div>



                        <div class="l-login-btn">
                                <div class="form-check">
                                <label class="nextloginauto" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        次回から自動ログイン
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary" id="login-loginbtn">
                                    ログインする
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="l-forgetpass" href="{{ route('password.request') }}">
                                    パスワードを忘れた方
                                    </a>
                                @endif -->
                            </div>
</div>
                        </div>
                    </form>
</div>
@endsection
