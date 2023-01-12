<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'édition location</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateLocation()" method="POST">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Date de début</label>
                            <input type="date" wire:model="editLocation.dateDebut"
                                class="form-control @error('editLocation.dateDebut') is-invalid @enderror">

                            @error('editLocation.dateDebut')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Date fin</label>
                            <input type="date" wire:model="editLocation.dateFin"
                                class="form-control @error('editLocation.dateFin') is-invalid @enderror">

                            @error('editLocation.dateFin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Prix</label>
                        <input type="number" class="form-control @error('editLocation.prix') is-invalid @enderror"
                            wire:model="editLocation.prix">
                        @error('editLocation.prix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



           

                    <div class="form-group">
                        <label>Client concerné</label>
                        <input type="number" class="form-control @error('editLocation.client_id') is-invalid @enderror"
                            wire:model="editLocation.client_id">
                        @error('editLocation.client_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>Voiture louée</label>
                        <input type="number" class="form-control @error('editLocation.voiture_id') is-invalid @enderror"
                            wire:model="editLocation.voiture_id">
                        @error('editLocation.voiture_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Appliquer les modifications</button>
                    <button type="button" wire:click="goToListLocation()" class="btn btn-danger">Retouner à la liste des
                        locations</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>