@extends('layouts.master')
@section('title', 'Contacteer ons voor info of een afspraak')
@section('header')
    @include('partials.nieuwe_header_op_maat')
@endsection
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home-page') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <ul class="nav nav-pills nav-justified card-header-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="contact-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="contact" aria-selected="true">ccntactformulier</a> <!-- OPLETTEN!!!! -->
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="info-tab" data-toggle="pill" href="#info" role="tab" aria-controls="info" aria-selected="false">info</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="kaart-tab" data-toggle="pill" href="#kaart" role="tab" aria-controls="kaart" aria-selected="false">kaart</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content"> <!-- OPLETTEN!!!! -->
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab"> <!-- OPLETTEN!!!! -->                    
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2">
                                    <div class="alert" id="contact-alert" role="alert">
                                        Uw boodschap werd met succes verzonden.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2">
                                    <form id="contactForm" class="needs-validation" role="form" action="/send/contactForm" method="post" novalidate>
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label for="name" class="col-md-3 text-right">
                                                Naam:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="text" id="name" class="form-control" name="name" minlength="2" autofocus required>
                                                <div class="invalid-feedback">
                                                    Het invullen van een naam die uit minstens twee tekens bestaat is verplicht!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-md-3 text-right">
                                                E-mailadres:
                                            </label>
                                            <div class="col-md-9">
                                                <input type="email" id="email" class="form-control" name="email" required>
                                                <div class="invalid-feedback">
                                                    Vult u aub een geldig e-mailadres in!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="boodschap" class="col-md-3 text-right">
                                                Bericht:
                                            </label>
                                            <div class="col-md-9">
                                                <textarea id="boodschap" class="form-control" name="boodschap" rows="6" required></textarea>
                                                <div class="invalid-feedback">
                                                    U dient hier uw boodschap in te vullen!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-9 offset-md-3">
                                                <button id="sendRequestButton" type="submit" class="btn btn-primary mr-4">Verzenden</button>
                                                <button id="btnReset" type="reset" class="btn btn-outline-secondary">Annuleren</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>  <!-- col -->
                            </div>  <!-- row -->
                        </div> <!-- tab-pane OPLETTEN!!!! -->                    
                        <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab"> <!-- OPLETTEN!!!! -->
                            KUT!!!!!  
                        </div> <!-- OPLETTEN!!!! -->
                        <div class="tab-pane fade" id="kaart" role="tabpanel" aria-labelledby="kaart-tab"> <!-- OPLETTEN!!!! -->
                            KAART EN ROUTE!!!!!  
                        </div> <!-- OPLETTEN!!!! -->
                    </div> <!-- tab-content -->
                </div>  <!-- card-body -->
                <div class="card-footer">
                    <a href="#" class="card-link">algemene voorwaarden</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>  <!-- card -->
        </div>  <!-- col-12 -->
    </div>  <!-- row -->
@endsection
@section('footerScripts');
    @parent
    <script src="{{ asset('js/contactFormIncludingAjaxCalls.js') }}" defer></script>
@endsection