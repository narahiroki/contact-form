@extends('layouts.app')

@section('title', 'お問い合わせ')

@section('content')
    <h1>お問い合わせ</h1>

    <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf

        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" id="name" name="name" value="{{ $name }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ $email }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="subject">件名</label>
            <input type="text" id="subject" name="subject" value="{{ $subject }}">
            @error('subject')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">本文</label>
            <textarea id="body" name="body" rows="6">{{ $body }}</textarea>
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="actions">
            <button type="submit">確認画面へ</button>
        </div>
    </form>
@endsection
