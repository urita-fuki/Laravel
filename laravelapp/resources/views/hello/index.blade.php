@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection


@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>へのアクションです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのアクションです。</p>
@endsection

@section('footer')
copyringht 2020 tuyano
@endsection