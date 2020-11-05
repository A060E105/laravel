@extends('layouts.app')

@section('title', 'Page title')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection

@php
    $records = ['abc'];
@endphp

@if (count($records) === 1)
    <p>I have one record!</p>
@elseif (count($records) > 1)
    <p>I have multiple record!</p>
@else
    <p>I don't have any records!</p>
@endif


<form method="POST" action="/profile">
    @csrf
    <input type="text" name="user" />
    <input type="submit" />
</form>