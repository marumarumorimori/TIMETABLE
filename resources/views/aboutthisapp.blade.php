@extends('layouts.layout')
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/aboutthisapp.css') }}" type="text/css">
  @endsection
@section('content')
<p class="bread">このアプリについて</p>


      <div class="adbar">
        <img src="image/adbar.png" class="adbar-img">
        <div class="ad-left">
          <p class="ad-left-text">簡単に時間割を<br>作れるアプリ</p>
          <a href="" class="ad-left-btn">時間割を作成する</a>
        </div>
      </div>

      <div class="cando">
        <h2>このアプリでできること</h2>
        <div class="cando-items">
          <div class="cando-item1 cando-item">
            <h3>予定時間と実際の学習時間を表示する</h3>
            <div class="cando-item-inner">
              <img src="image/cando1.png" alt="">
              <p>時間割を作成するだけでなく、
                予定時間と実際学習した時間と
                その差の時間を表示します。</p>
            </div>

          </div>
          <div class="cando-item2 cando-item">
            <h3>1コマを好きな時間に設定する</h3>
            <div class="cando-item-inner">
              <img src="image/cando2.png" alt="">
              <p>1コマを自分の好きな時間
                に設定し、集中力の低下を
                防ぐ事ができます。</p>
            </div>

          </div>
          <div class="cando-item3 cando-item">
            <h3>学習科目、時間を表示する</h3>
            <div class="cando-item-inner">
              <img src="image/cando3.png" alt="">
              <p>1日に学習する科目、時間「今日の時間割を見る」で確認する事が
                できます。また、次は何時からの勉強なのかを確認する事ができます。</p>
            </div>

          </div>
          <div class="cando-item4 cando-item">
            <h3>自分に合った時間割表を簡単に作成できる</h3>
            <div class="cando-item-inner">
              <img src="image/cando4.png" alt="">
              <p>勉強する上で大切な「予定を立てる」ことをたった5つ項目を入力するだけで時間割表を作ることができます。</p>
            </div>

          </div>
        </div>


<div class="btn">
  <a href="{{ route('register') }}" class="register-btn">会員登録はこちら</a>
</div>


@endsection
<script src="{{ asset('js/newcreattodo.js') }}"></script>