@extends('layouts.layout')
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/todaystodo.css') }}" type="text/css">
  @endsection
@section('content')


@if (session('status'))
  <div class="alert alert-success" role="alert">
  {{ session('status') }}
  </div>
@endif
      @if (session('my_status'))
                      <div class="container mt-2">
                        <div class="alert alert-success">
                        {{ session('my_status') }}
                  </div>
                  </div>
        @endif

<div class="usernameandimage">
        <div>
        @if(Auth::user()->avatar)
            <img src="{{asset('/storage/image/'.Auth::user()->avatar)}}" >
        @endif
        </div>
        <p class="username"> {{ Auth::user()->name }}</p>
    </div>
<div class="todaystimetable-container">
    <h2><span>今日の時間割</h2>
    <div class="details">
      <p id="starttime">開始時間：<span id="h">{{$todo->hour1}}</span>:<span id="m">{{$todo->min1}}</span></p>
      <p>1コマの勉強時間 : <span id="studytime">{{$todo->studytime}}</span></p>
      <p>1コマの休憩時間 : <span id="resttime">{{$todo->resttime}}</span></p>

    </div>
      <div class="todaystimetable-outer">
        <h3>日付：{{$todo->date}}</h3>

          <div class="todaystimetable">
              <table class="timetable">
                <tr>
                  <th>時間</th>
                  <th>内容</th>

                </tr>
                <tr>
                  <td class="width30" id="todo1time"></td>
                  <td class="itodo">{{$todo->todostudy1}}</td>
                </tr>
                <tr>
                  <td class="width30" id="todo2time"></td>
                  <td class="itodo">{{$todo->todostudy2}}</td>
                </tr>

                <tr>

                  <td class="width30" id="todo3time"></td>
                  <td class="itodo">{{$todo->todostudy3}}</td>
                </tr>

                <tr>
                  <td class="width30" id="todo4time"></td>
                  <td class="itodo">{{$todo->todostudy4}}</td>
                </tr>

                <tr>
                  <td class="width30" id="todo5time"></td>
                  <td class="itodo">{{$todo->todostudy5}}</td>
                </tr>
              </table>
        </div>
    </div>
  </div>



@endsection
<script src="{{ asset('js/newcreattodo.js') }}"></script>