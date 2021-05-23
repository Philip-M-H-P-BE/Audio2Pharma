@extends('layouts.master')
@section('title', 'Audio2Pharma')
@section('header')
    @include('partials.nieuwe_header_op_maat')
@endsection
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="display-1">Hallo iedereen!!!</h1>
            <p class="lead">Dit wordt de <span class="badge badge-danger badge-pill">homepagina</span>!!!!!</p>
        </div>
    </div>
@endsection
@section('footerScripts');
    @parent
@endsection