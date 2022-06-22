    @extends('layouts.layout')
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css">
    @endsection

    @section('content')
            @if(session('message'))
        <div class="bg-blue-300 w-1/2 mx-auto p-2 mb-4 text-white">
            {{ session('message' )}}
        </div>
        @endif
        <div class="contact-content">
        <p class="contact-title">お問い合わせ</p>
        <h3>お問い合わせ</h3>
        <form class="contacttype-container" method="post" action="{{ route('contact.store') }}">
        @csrf
        <div class="contact-textarea">
        @guest
        <div class="contactname">
            <label for="name">名前</label>
            <input type="text" name="name" placeholder="名前">
        </div>
        <div class="contactemail">
            <label for="email">メールアドレス</label>
            <input type="text" name="email" placeholder="メールアドレス">
        </div>
        <textarea name="contacts" id=""  placeholder="お問い合わせ内容をご記入ください"></textarea>
            @if (Route::has('register'))
            @endif
            @else
            <textarea name="" id=""  placeholder="お問い合わせ内容をご記入ください"></textarea>
            @endif

        </div>


        <div class="contact-btn">
            <input type="submit" name="contact-btn" value="送信する">
        </div>

        </form>
        </div>



@endsection
