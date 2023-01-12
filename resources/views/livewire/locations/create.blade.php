<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'ajout de location</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="addLocation()" method="POST">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Date de début</label>
                            <input type="date" wire:model="addLocation.dateDebut"
                                class="form-control @error('addLocation.dateDebut') is-invalid @enderror">

                            @error('addLocation.dateDebut')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                       <div class="form-group flex-grow-1 mr-2">
                            <label>Date fin</label>
                            <input type="date" wire:model="addLocation.dateFin"
                                class="form-control @error('addLocation.dateFin') is-invalid @enderror">

                            @error('addLocation.dateFin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>

                    

                    <div class="form-group">
                        <label>Prix</label>
                        <input type="number" class="form-control @error('addLocation.prix') is-invalid @enderror"
                            wire:model="addLocation.prix">
                        @error('addLocation.prix')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                
                    <div class="form-group">
                        <label>Id client concerné</label>
                        <input type="number" class="form-control @error('addLocation.client_id') is-invalid @enderror"
                            wire:model="addLocation.client_id">
                        @error('addLocation.client_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

             
                    <div class="form-group">
                        <label>Id voiture louée</label>
                        <input type="number" class="form-control @error('addLocation.voiture_id') is-invalid @enderror"
                            wire:model="addLocation.voiture_id">
                        @error('addLocation.voiture_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>





                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <button type="button" wire:click="goToListLocation()" class="btn btn-danger">Retouner à la liste des
                        locations</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>