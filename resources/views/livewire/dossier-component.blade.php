<div class="container-fluid mb-4">
    <div class="card {{ $toggle ? 'd-none' : '' }}">
        <div class=" card-body">

            <div class="row m-1">
                <h3>La Liste des dossiers</h3>
                <div class="ml-auto">
                    <button class="btn btn-primary" wire:click="toggleVal()">
                        <i class="fas fa-plus"></i>
                        Ajouter dossier
                    </button>
                </div>
            </div>

            <div class="row mb-2 mt-5">
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recherche...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label for="datefrom" class="col-form-label">de : &nbsp;</label>
                        <input id="datefrom" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label for="datede" class="col-form-label">á : &nbsp;</label>
                        <input id="datede" type="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1">10</option>
                            <option value="2">25</option>
                            <option value="3">50</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row p-2">
                <table class="table table-bordered mb-5  table-responsive">
                    <thead class="bg-secondary text-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">N° DE DOSSIER</th>
                            <th scope="col">NOM</th>
                            <th scope="col">N° CAIER CHANTIER</th>
                            <th scope="col">LIEU DES TRAVAUX</th>
                            <th scope="col">DATE</th>
                            <th scope="col">NATURE DES TRAVAUX</th>
                            <th scope="col">CIN</th>
                            <th scope="col">N° TELEPHONE</th>
                            <th scope="col">SUPERFICIE EN M²</th>
                            <th scope="col">N° D'AUTORISATION</th>
                            <th scope="col">AVANCEMENT DES TRAVAUX</th>
                            <th scope="col">LES P.V</th>
                            <th scope="col">ACHIVEMENT DES TRAVAUX</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dossiers as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th>{{ $data->id_dossier }}</th>
                                <td>{{ $data->nom_client }}</td>
                                <td>{{ $data->n_cahier_chantier }}</td>
                                <td>{{ $data->lieux_travaux }}</td>
                                <td>{{ $data->date_depot }}</td>
                                <td>{{ $data->nature }}</td>
                                <td>{{ $data->cin_client }}</td>
                                <td>{{ $data->n_tel_client }}</td>
                                <td>{{ $data->superfecie }}</td>
                                <td>{{ $data->n_autorisation }}</td>
                                <td>{{ $data->date_evancement }}</td>
                                <td>{{ $data->pvs }}</td>
                                <td>{{ $data->date_acheivement }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $dossiers->links() !!}
                </div>
            </div>

        </div>
    </div>

    <div class="card {{ !$toggle ? 'd-none' : '' }} mb-4">
        <div class=" card-body">
            <h3 class="mb-4">Creation d'un dossier</h3>
            <div class="row">
                <div class="col-md-6">
                    <label for="numero-dossier" class="col-form-label">N° DE DOSSIER</label>
                    <input type="text" class="form-control" placeholder="SAISIRE N° DE DOSSIER...">
                </div>
                <div class="col-md-6">
                    <label for="nom-client" class="col-form-label">NOM CLIENT</label>
                    <dir class="form-group d-flex p-0 m-0">
                        <select class="form-control w-auto">
                            <option value="" selected>-- CHOISIRE CLIENT --</option>
                            <option value="1">wp12</option>
                            <option value="1">wp13</option>
                            <option value="1">wp14</option>
                        </select>
                        <button type="button" class="btn btn-outline-secondary ml-2" data-toggle="modal"
                            data-target="#createClient">
                            <i class="fas fa-plus"></i>
                            Ajouter client
                        </button>
                    </dir>
                </div>
                <div class="col-md-6">
                    <label for="numero-chantier" class="col-form-label">N° CAIER CHANTIER</label>
                    <input type="text" class="form-control" placeholder="SAISIRE N° CAIER CHANTIER...">
                </div>
                <div class="col-md-6">
                    <label for="numero-chantier" class="col-form-label">LIEU DES TRAVAUX</label>
                    <input type="text" class="form-control" placeholder="SAISIRE LIEU DES TRAVAUX...">
                </div>
                <div class="col-md-6">
                    <label for="numero-chantier" class="col-form-label">DATE</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="numero-chantier" class="col-form-label">NATURE DES TRAVAUX</label>
                    <input type="text" class="form-control" placeholder="SAISIRE NATURE DES TRAVAUX...">
                </div>
                <div class="col-md-6">
                    <label for="tel-client" class="col-form-label">SUPERFICIE EN M²</label>
                    <input type="text" class="form-control" placeholder="SAISIRE SUPERFICIE EN M²...">
                </div>
                <div class="col-md-6">
                    <label class="col-form-label">N° D'AUTORISATION</label>
                    <input type="text" class="form-control" placeholder="SAISIRE N° D'AUTORISATION...">
                </div>
                <div class="col-md-6">
                    <label for="tel-client" class="col-form-label">AVANCEMENT DES TRAVAUX</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="tel-client" class="col-form-label">LES P.V</label>
                    <input type="text" class="form-control" placeholder="SAISIRE  LES P.V...">
                </div>
                <div class="col-md-6">
                    <label for="tel-client" class="col-form-label">ACHIVEMENT DES TRAVAUX</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-12 text-center m-5">
                    <button type="submit" class="btn btn-primary btn-lg">ENREGISTRER</button>
                </div>
            </div>


        </div>
    </div>

    @livewire('client-component')

</div>
