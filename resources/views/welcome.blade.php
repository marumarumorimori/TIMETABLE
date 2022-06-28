@extends('layouts.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" type="text/css">
@endsection
        @section('content')
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="width">
            @if (!session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
            @endif

    <div class="main-visual">
      <img src="image/mainvisual.png" alt="時間割をつくって、効率よく勉強しよう！">
    </div>


    <div class="adbar">
      <img src="image/adbar.png" class="adbar-img">
      <div class="ad-left">
        <p class="ad-left-text">簡単に時間割を<br>作れるアプリ</p>
        <a href="{{ route('register') }}" class="ad-left-btn">時間割を作成する</a>
      </div>
    </div>

    <div class="main-container">
      <div class="goodpoint1-text goodpoint goodpoint-text">
        <h2>継続しやすい環境</h2>
        <p>勉強したい期間の時間割表をたったの５つのステップで
          作成することができます。今日のみ、曜日、カレンダー
          の3つから選び、自分の都合の良いようにスケジュール
          が立てられます。</p>
      </div>

      <div class="goodpoint1-image goodpoint">
        <img src="image/goodpoint1.png">
      </div>

      <div class="goodpoint2-text goodpoint goodpoint-text">
        <h2>追い込みの環境をサポート</h2>
        <p>勉強開始時間と終了時間を指定し、その後休憩時間を指
          定することで、無駄な時間を作らずに学習できる。</p>
      </div>

      <div class="goodpoint2-image goodpoint">
       <img src="image/goodpoint2.png" alt="">
      </div>

      <div class="goodpoint3-text goodpoint goodpoint-text">
        <h2>目標達成しやすい環境</h2>
        <p>実際の学習時間と予定の学習時間の差を見ることによっ
          て、目標を達成させやくさせます。</p>
      </div>

      <div class="goodpoint3-image goodpoint">
        <img src="image/goodpoint3.png" alt="">
       </div>
    </div>

    <div class="adbar">
      <img src="image/adbar.png" class="adbar-img">
      <div class="ad-left">
        <p class="ad-left-text">簡単に時間割を<br>作れるアプリ</p>
        <a href="{{ route('register') }}" class="ad-left-btn">時間割を作成する</a>
      </div>
    </div>
  </div>
        </div>
        @endsection
    </body>
</html>
