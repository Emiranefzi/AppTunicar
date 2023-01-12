<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'ajout d'une voiture</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="addVoiture()" method="POST">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Modèle</label>
                            <input type="text" wire:model="addVoiture.modele"
                                class="form-control @error('addVoiture.modele') is-invalid @enderror">

                            @error('addVoiture.modele')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Matricule</label>
                            <input type="text" wire:model="addVoiture.matricule"
                                class="form-control @error('addVoiture.matricule') is-invalid @enderror">

                            @error('addVoiture.matricule')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    
                 <div class="form-group">
                    <label >Etat</label>
                    <select class="form-control @error('addVoiture.etat') is-invalid @enderror" wire:model="addVoiture.etat">
                        <option value="">---------</option>
                        <option value="0">Excellente</option>
                        <option value="1">Très bon</option>
                        <option value="2">Bon</option>
                        <option value="3">Correct</option>
                    </select>
                    @error("addVoiture.etat")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>             


                    <div class="form-group">
                        <label>Kilométrage</label>
                        <input type="number" class="form-control @error('addVoiture.kilometrage') is-invalid @enderror"
                            wire:model="addVoiture.kilometrage">
                        @error('addVoiture.kilometrage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>




                    <div class="form-group">
                        <label>Prix</label>
                        <input type="number" class="form-control @error('addVoiture.prix') is-invalid @enderror"
                            wire:model="addVoiture.prix">
                        @error('addVoiture.prix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>





                    <div class="form-group">
                    <label >Disponibilité</label>
                    <select class="form-control @error('addVoiture.disponibilite') is-invalid @enderror" wire:model="addVoiture.disponibilite">
                        <option value="">---------</option>
                        <option value="1">Disponible</option>
                        <option value="0">Indisponible</option>

                    </select>
                    @error("addVoiture.disponibilite")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                
                        <div class="p-4" >
                                        <div class="form-group">
                                            <input type="file" wire:model="addPhoto" id="image{{$inputFileIterator}}">
                                        </div>
                                        <div style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden;">
                                                @if ($addPhoto)

                                                    <img src="{{ $addPhoto->temporaryUrl() }}" style="height:200px; width:200px;">
                                                @endif
                                        </div>
                        </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" wire:click="goToListVoiture()" class="btn btn-danger">Retouner à la liste des
                        voitures</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>