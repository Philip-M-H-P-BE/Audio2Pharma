@extends('layouts.master')
@section('title', 'Contacteer ons voor info of een afspraak')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h1 class="display-3">Hallo!!!</h1>
            <p class="lead swatch-medium-low">Voorlopig is er hier nog niets...!!!!!</p>
            <p>
                <button type="button" class="btn btn-medium-high">Experiment mbt build</button>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <div class="alert alert-success" id="contact-alert">
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
        </div>
    </div>
@endsection
@section('footerScripts');
    @parent
    <script src="{{ asset('js/defineAjaxCalls.js') }}" defer></script>
@endsection