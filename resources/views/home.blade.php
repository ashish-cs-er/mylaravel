@extends('layouts.master')
@section('title','Home')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<h1>Home view</h1>
@stop
