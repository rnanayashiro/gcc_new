@extends('layouts.app')
@section('styles')
    @parent
    @vite([
        'resources/css/pagesetting.css',
        'resources/css/common.css',
        'resources/css/news.css',
    ])
@endsection
@include('includes.header')
@section('content')
    <!-- resources/views/newsForm.blade.php -->

    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NEWS投稿</title>
    </head>
    <main id="main" class="contents">
        <div class="news-contents">
            <h1 class="main-title">NEWS投稿</h1> <!-- メインタイトル -->

            <!-- フォームの開始 -->
            <form action="{{ route('news.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf <!-- CSRFトークン -->
                <div class="input-group">
                    <!-- タイトル -->
                    <div class="input-item">
                        <div class="input-label">Title</div>
                        <input id="title" class="input-form" name="title" value="{{ old('title') }}" />
                        @error('title')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- 日付 -->
                    <div class="input-item">
                        <div class="input-label">Date</div>
                        <input type="date" id="date" class="input-form" name="date"
                            value="{{ old('date') }}" />
                        @error('date')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- カテゴリ -->
                    <div class="input-item">
                        <div class="input-label">Category</div>
                        <select id="category" class="input-form" name="category">
                            <option value="">Please select</option>
                            <option value="news" {{ old('category') == 'news' ? 'selected' : '' }}>News</option>
                            <option value="events" {{ old('category') == 'events' ? 'selected' : '' }}>Events</option>
                            <option value="updates" {{ old('category') == 'updates' ? 'selected' : '' }}>Updates</option>
                        </select>
                        @error('category')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- 画像 -->
                    <div class="input-item">
                        <div class="input-label">Image</div>
                        <input type="file" id="image" class="" name="image" accept="image/*" />
                        @error('image')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- 本文 -->
                    <div class="input-item">
                        <div class="input-label">Contents</div>
                        <textarea id="contents" class="input-form" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- 投稿ボタン -->
                    <div class="input-item">
                        <button type="submit" class="submit-button">投稿</button>
                    </div>
                </div>
            </form>
            @if (session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif
        </div>
    </main>

    </html>
    @include('includes.footer')
@endsection
