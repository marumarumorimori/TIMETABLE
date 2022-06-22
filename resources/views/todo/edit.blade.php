@extends('layouts.layout')

  @section('css')
  <link rel="stylesheet" href="{{ asset('css/creattodo.css') }}" type="text/css">
  @endsection

  @section('content')


<p class="bread">編集</p>
<!-- <form method="POST" action=""> -->
<form method="POST" action="{{route('todo.update', $todo->id)}}">
  @csrf

  <div class="creattodo" name="creattodo">

          <div class="creattodo1">
              <legend for="date">&#10102; 日付</legend>
              <div class="when1">
                <input type="date" id="date" onchange="showdate()" name="date" value="{{ $todo->date }}" required>
              </div>
          </div>

          <div class="creattodo2">
              <legend for=“hour1”>&#10103;勉強開始時間</legend>
              <div>
                    <div id="studydate1">
                      <select name="hour1" id="hour1" onchange="decidetime()" class="inputborder" required>
                      <option value="{{$todo->hour1}}" id="h" selected>{{$todo->hour1}}</option>
                        <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      <span>時</span>
                      <select name="min1" id="min1" onchange="decidetime()" class="inputborder" required>
                          <option value="{{$todo->min1}}" id="m" selected>{{$todo->min1}}</option>
                          <option value="00">00</option>
                          <option value="05">05</option>
                          <option value="10">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="35">35</option>
                          <option value="40">40</option>
                          <option value="45">45</option>
                          <option value="50">50</option>
                          <option value="55">55</option>
                      </select>
                      <span>分</span>
                  </div>
            </div>
</div>

<div class="creattodo3">

<div class="creattodo3-comatime">
<legend>&#10104; 1コマの勉強時間</legend>

<div class="comatime">
<select name="studytime" id="studytime" onchange="decidetime()" class="inputborder" required>
<option value="{{$todo->studytime}}" selected>{{$todo->studytime}}</option>

  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="35">35</option>
  <option value="40">40</option>
  <option value="45">45</option>
  <option value="50">50</option>
  <option value="55">55</option>
  <option value="60">60</option>

</select>
<span>分</span>
</div>
</div>

<div class="creattodo3-resttime">
<legend>1コマの休憩時間</legend>

<div class="resttime">
  <select name="resttime" id="resttime" onchange="decidetime()" required>
  <option value="{{$todo->resttime}}" selected>{{$todo->resttime}}</option>
    <option value="5">5</option>
    <option value="10">10</option>
    <option value="15">15</option>
    <option value="20">20</option>
    <option value="25">25</option>
    <option value="30">30</option>
    <option value="35">35</option>
    <option value="40">40</option>
    <option value="45">45</option>
    <option value="50">50</option>
    <option value="55">55</option>
    <option value="60">60</option>

  </select>
  <span>分</span>
 </div>
</div>
</div>
          <!-- <div class="creattodo4">
          <legend>&#10105; 何時間目までするか</legend>
          <select name="totaltime" id="totaltime" onchange="createtable()" class="inputborder">
        <option value="{{ $todo->totaltime }}" selected>{{ $todo->totaltime }}</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
          </div> -->


          <div class="creattodo5">
                <legend for=“checktodo”>&#10106; 科目を入力 </legend>
                <div class="creatodo-timetable">
                  <div class="nextbackjikanwari">

                    <p>時間割</p>

                  </div>


                  <ul class="creattodo-timetable-inner">
                    <li class="day focus">

                    <table>
                        <tr>
                          <th></th>
                          <th class="daytitle width30" id="daytitle2">日付</th>
                          <th class="width70">内容</th>
                        </tr>
                          <tr>
                          <td>1</td>
                          <td id="todo1time" >00:00 - 00:00</td>
                          <td>
                            <input type="text" name="todostudy1" id="todo1" class="textclass" value="{{ $todo->todostudy1 }}" onfocus="this.select();" required>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td id="todo2time">00:00 - 00:00</td>
                          <td>
                          <input type="text" name="todostudy2" id="todo2" class="textclass"  value="{{ $todo->todostudy2 }}" onfocus="this.select();" required>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td id="todo3time">00:00 - 00:00</td>
                          <td>
                          <input type="text" name="todostudy3" id="todo3" class="textclass"  value="{{ $todo->todostudy3 }}" onfocus="this.select();" required>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td id="todo4time">00:00 - 00:00</td>
                          <td>
                          <input type="text" name="todostudy4" id="todo4" class="textclass"  value="{{ $todo->todostudy4 }}" onfocus="this.select();" required>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td id="todo5time">00:00 - 00:00</td>
                          <td>
                            <input type="text" name="todostudy5" id="todo5" class="textclass"  value="{{ $todo->todostudy5 }}" onfocus="this.select();" required>
                          </td>
                        </tr>
                      </table>

                    </li>

                  </ul>
          </div>

          </div>
                <div class="creattodo-button-container">
                <button type="submit" class="creattodo-button">時間割を作成する</button></div>

                </div>

</form>
@endsection
@section('js')
<script src="{{ asset('js/newcreattodo.js') }}"></script>
@endsection