    @extends('layouts.layout')
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css">
    @endsection

    @section('content')

        <div class="contact-content">
        <p class="contact-title">お問い合わせ</p>
        <h3>お問い合わせ</h3>

        <form class="contacttype-container" method="post" action="{{ route('contact.store') }}">
        @csrf
        <div class="contact-textarea">

        <div class="contactname">
            <label for="email">メールアドレス</label>
            <input type="email" name="name" placeholder="メールアドレス" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <p class="error-message">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="contactemail">
            <label for="title">タイトル</label>
            <input type="text" name="title" placeholder="タイトル" value="{{ old('title') }}">
            @if ($errors->has('title'))
                <p class="error-message">{{ $errors->first('title') }}</p>
            @endif

        </div>
        <textarea name="body" id=""  placeholder="お問い合わせ内容をご記入ください">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p class="error-message">{{ $errors->first('body') }}</p>
        @endif

        </div>


        <div class="contact-btn">
            <input type="submit" name="contact-btn" value="入力内容確認">
        </div>

        </form>
        </div>



@endsection
