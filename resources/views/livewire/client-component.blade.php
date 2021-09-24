<div class="modal fade" tabindex="-1" role="dialog" id="createClient" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form wire:submit.prevent="createClient">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Creation client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="nom_client" class="col-form-label">NOM CLIENT</label>
                            <input type="text" wire:model.defer="nom_client"
                                class="form-control  @error('nom_client')  is-invalid @enderror"
                                placeholder="SAISIRE NOM CLIENT..." id="nom_client">
                            @error('nom_client') <div class="  invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="cin_client" class="col-form-label">CIN CLIENT</label>
                            <input type="text" wire:model.defer="cin_client"
                                class="form-control @error('cin_client')  is-invalid @enderror"
                                placeholder="SAISIRE CIN CLIENT..." id="cin_client">
                            @error('cin_client') <div class="  invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="tel_client" class="col-form-label">TELEPHONE CLIENT</label>
                            <input type="text" class="form-control @error('tel_client')  is-invalid @enderror"
                                wire:model.defer="tel_client" placeholder="SAISIRE TELEPHONE CLIENT..." id="tel_client">
                            @error('tel_client') <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">ENREGISTRER</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">FERMER</button>
                </div>
            </div>
        </form>
    </div>
</div>
