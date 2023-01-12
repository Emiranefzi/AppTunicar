<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'édition de voiture</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateVoiture()" method="POST">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>modele</label>
                            <input type="text" wire:model="editVoiture.modele"
                                class="form-control @error('editVoiture.modele') is-invalid @enderror">

                            @error('editVoiture.modele')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    <div class="form-group flex-grow-1">
                            <label>matricule</label>
                            <input type="text" wire:model="editVoiture.matricule"
                                class="form-control @error('editVoiture.matricule') is-invalid @enderror">

                            @error('editVoiture.matricule')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>





                <div class="form-group">
                        <label>Etat</label>
                        <select class="form-control @error('editVoiture.etat') is-invalid @enderror"
                            wire:model="editVoiture.etat">
                            <option value="">---------</option>
                            <option value="0">Excellent</option>
                            <option value="1">Très bon</option>
                            <option value="2">Bon</option>
                            <option value="3">Correct</option>
                        </select>
                        @error('editVoiture.etat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>



                <div class="form-group">
                        <label>Kilométrage</label>
                        <input type="number" class="form-control @error('editVoiture.kilometrage') is-invalid @enderror"
                            wire:model="editVoiture.kilometrage">
                        @error('editVoiture.kilometrage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>



                <div class="form-group">
                        <label>Prix</label>
                        <input type="number" class="form-control @error('editVoiture.prix') is-invalid @enderror"
                            wire:model="editVoiture.prix">
                        @error('editVoiture.prix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>



                <div class="form-group">
                        <label>Disponibilité</label>
                        <select class="form-control @error('editVoiture.disponibilite') is-invalid @enderror"
                            wire:model="editVoiture.disponibilite">
                            <option value="">---------</option>
                            <option value="0">Indisponible</option>
                            <option value="1">Disponible</option>

                        </select>
                        @error('editVoiture.disponibilite')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>



           <div class="p-4" >
                    <div class="form-group">
                         <input type="file" wire:model="editPhoto" id="image{{$inputEditFileIterator}}">
                                    </div>
                                    <div style="border: 1px solid #d0d1d3; border-radius: 20px; height: 200px; width:200px; overflow:hidden;">
                                            @if (isset($editPhoto))

                                                <img src="{{ $editPhoto->temporaryUrl() }}" style="height:200px; width:200px;">

                                            @else

                                            <img src="{{ asset($editVoiture["image"]) }}" style="height:200px; width:200px;">

                                            @endif
                                    </div>
                                    @isset($editPhoto)
                                    <div>
                                        <button
                                        type="button" 
                                        class="btn btn-default btn-sm mt-2"
                                        wire:click="$set('editPhoto', null)"
                                        >Réinitialiser</button>    
                                    </div> 
                                    @endisset
                         </div>



        
                     




                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Appliquer les modifications</button>
                    <button type="button" wire:click="goToListVoiture()" class="btn btn-danger">Retouner à la liste des
                        voitures</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>