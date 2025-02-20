@extends('layouts.app')
@section('styles')
@parent
<!-- 親のスタイル（app.blade.phpのstylesセクション）を読み込む -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/pagesetting.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/common.css') }}" />
@endsection
@include('includes.header')
@section('content')
<main>
    <div style="height: 500px;"></div>
</main>
<!-- /.main -->
@include('includes.footer')
@endsection
