@extends('layouts.helloapp')

@section('title', 'Person.find')

@section('menubar')
    @perent
    検索ページ
@endsection

@section('content')
    <form action="/person/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="subnit" value="find">
    </from>
    @if (isset($item))
        <table>
            <tr><th>Data</th></tr>
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        </table>
    @endif
@endsection

@section('footer')
copyright 2017 tuyano
@endsection