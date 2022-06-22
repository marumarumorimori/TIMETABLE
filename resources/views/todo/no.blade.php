@extends('layouts.layout')
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}" type="text/css">
    @endsection
@section('content')
<div class="usernameandimage">
        <div>
        @if(Auth::user()->avatar)
            <img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" alt="profile_image" >
        @endif
        </div>
        <p class="username"> {{ Auth::user()->name }}</p>
    </div>

    <h1 class="notodo">今日の予定はありません</h1>
@endsection

@section('js')
<script src="{{ asset('js/newcreattodo.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
@endsection