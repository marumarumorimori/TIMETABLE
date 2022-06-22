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
<table class=indextable>
@foreach($todos as $todo)
<tr>
    <td class="indexdate">{{$todo->date}}</td>
    <td><th><a href="{{route('todo.show',['id'=>$todo->id])}}">詳細</a></th></td>
</tr>
@endforeach
</table>


@endsection

@section('js')
<script src="{{ asset('js/newcreattodo.js') }}"></script>
<script src="{{ asset('js/calendar.js') }}"></script>
@endsection