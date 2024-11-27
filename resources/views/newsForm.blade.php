@extends('layouts.app')
@section('styles')
    @parent <!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/news.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@section('content')
    <main id="main" class="contents">
        <div class="news-contents">
            <h1 class="main-title">NEWS投稿</h1> <!-- メインタイトル -->
            <div class="input-group">
                <div class="input-item">
                    <div class="input-label">Title</div>
                    <input id="title" class="input-form" name="title" />
                    <div id="title_error" class="error-message"></div>
                </div>

                <div class="input-item">
                    <div class="input-label">Date</div>
                    <input type="date" id="date" class="input-form" name="date" />
                    <div id="date_error" class="error-message"></div>
                </div>

                <div class="input-item">
                    <div class="input-label">Category</div>
                    <select id="category" class="input-form" name="category">
                        <option value="">Please select</option>
                        <option value="news">News</option>
                        <option value="events">Events</option>
                        <option value="updates">Updates</option>
                    </select>
                    <div id="category_error" class="error-message"></div>
                </div>

                <div class="input-item">
                    <div class="input-label">Contents</div>
                    <textarea id="contents" class="input-form" name="contents"></textarea>
                    <div id="contents_error" class="error-message"></div>
                </div>

                <!-- 投稿ボタン -->
                <div class="input-item">
                    <button type="submit" class="submit-button">投稿</button>
                </div>
            </div>
        </div>
    </main>
    <!-- /.main -->
@endsection
