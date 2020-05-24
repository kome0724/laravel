@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>Controller value<br>'message' = {{ $message }}</p>
<p>ViewController value<br>'view_message' = {{ $view_message }}</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
