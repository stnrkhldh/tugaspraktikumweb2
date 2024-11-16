@extends('layouts.app')
@section('content')
<div class="container"></div>
    <div class="card"></div>
    <div class="cord-body"></div>
    <h1>Heloo, Selamat datang {{Auth::user()->nama}}</h1>
@endsection