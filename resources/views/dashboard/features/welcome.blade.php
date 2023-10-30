@extends('dashboard.apps')

@section('title')
Home - {{ Auth::user()->name }}
@endsection

@section('content')
<h1>Welcome ,<span>{{ Auth::user()->name }}</span></h1>
@endsection