<!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modalInlineForm" tabindex="-1" role="dialog" aria-labelledby="modalInlineFormLabel" aria-describedby="this modal contains a search form" aria-hidden="true"> {{-- Note that you don’t need to add role="dialog" since we already add it via JavaScript. --}}
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInlineFormLabel">Zoekformulier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid px-0">
                    <form novalidate id="modalInlineForm" class="needs-validation">
                        <div class="row flex-grow-1">
                            <div class="col-md-9">
                                <div class="form-group mb-4 mb-md-2">
                                    <label for="searchfield" class="sr-only">
                                        Zoeken:
                                    </label>
                                    <input type="text" id="searchfield" name="searchfield" class="form-control flex-grow-1" placeholder="Zoeken" required minlength="2">
                                    <div class="invalid-feedback">
                                        Gebruik een zoekterm die uit minstens twee tekens bestaat.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-0 mb-md-2">
                                    <button id="btnSubmitSearchForm" class="btn btn-outline-success btn-block ml-md-auto" type="submit">Zoeken</button>   
                                </div>
                            </div>
                        </div>
                    </form>
                </div>  <!-- container-fluid -->
            </div>  <!-- modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
            </div>
        </div>  <!-- model-content -->
    </div>  <!-- modal-dialog -->
</div>  <!-- modal -->