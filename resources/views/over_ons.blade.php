@extends('layouts.master')
@section('title', 'Over ons')
@section('header')
    @include('partials.nieuwe_header_op_maat')
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1 class="display-3">Hallo!!!</h1>
            <p class="lead swatch-medium-low">Leer ons beter kennen!!!!!</p>            
        </div>
    </div>     
@endsection
@section('footerScripts')
    @parent
@endsection