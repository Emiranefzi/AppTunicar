<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'édition client</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" wire:submit.prevent="updateClient()" method="POST">
                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Nom</label>
                            <input type="text" wire:model="editClient.nom"
                                class="form-control @error('editClient.nom') is-invalid @enderror">

                            @error('editClient.nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Prenom</label>
                            <input type="text" wire:model="editClient.prenom"
                                class="form-control @error('editClient.prenom') is-invalid @enderror">

                            @error('editClient.prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Date de naissance</label>
                        <input type="date" class="form-control @error('editClient.dateNaissance') is-invalid @enderror"
                            wire:model="editClient.dateNaissance">
                        @error('editClient.dateNaissance')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



           

                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input type="text" class="form-control @error('editClient.email') is-invalid @enderror"
                            wire:model="editClient.email">
                        @error('editClient.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" class="form-control @error('editClient.ville') is-invalid @enderror"
                            wire:model="editClient.ville">
                        @error('editClient.ville')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Telephone 1</label>
                            <input type="text" class="form-control @error('editClient.tel') is-invalid @enderror"
                                wire:model="editClient.tel">
                            @error('editClient.tel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                     


                    <div class="form-group">
                        <label>Numero de piece d'identité</label>
                        <input type="text"
                            class="form-control @error('editClient.cin') is-invalid @enderror"
                            wire:model="editClient.cin">
                        @error('editClient.cin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Appliquer les modifications</button>
                    <button type="button" wire:click="goToListClient()" class="btn btn-danger">Retouner à la liste des
                        clients</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
</div>