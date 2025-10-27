@extends('layouts.app')
@section('styles')
    @parent
    @vite([
        'resources/css/pagesetting.css',
        'resources/css/common.css',
    ])
@endsection
@include('includes.header')
@section('content')
<main>
    <div style="height: 500px;"></div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
