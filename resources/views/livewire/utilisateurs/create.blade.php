<div class="row p-4 pt-5">
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'un nouvel utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent="addUser()">
                <div class="card-body">

                {{-- <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label >Nom</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label >Prenom</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div> --}}

                    <div class="form-group">
                        <div class="form-group flex-grow-1 mr-2">
                            <label >Nom</label>
                            <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror">

                            @error("newUser.nom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label >Prénom</label>
                            <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is-invalid @enderror">

                            @error("newUser.prenom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                  <div class="form-group">
                    <div class="form-group flex-grow-1 mr-2">
                            <label >Date de naissance</label>
                            <input type="date" wire:model="newUser.dateNaissance" class="form-control @error('newUser.dateNaissance') is-invalid @enderror">

                            @error("newUser.dateNaissance")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group flex-grow-1 mr-2">
                            <label >Téléphone </label>
                            <input type="number" class="form-control @error('newUser.tel') is-invalid @enderror" wire:model="newUser.tel">
                            @error("newUser.tel")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>



                    <div class="form-group flex-grow-1">
                            <label >Ville</label>
                            <input type="text" wire:model="newUser.ville" class="form-control @error('newUser.ville') is-invalid @enderror">

                            @error("newUser.ville")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                <div class="form-group">
                            <label >Numéro de carte CIN </label>
                            <input type="number" class="form-control @error('newUser.cin') is-invalid @enderror" wire:model="newUser.cin">
                            @error("newUser.cin")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                </div>





                <div class="form-group">
                    <label >Adresse e-mail</label>
                    <input type="email" class="form-control @error('newUser.email') is-invalid @enderror" wire:model="newUser.email">
                    @error("newUser.email")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                </div>

                 
                        
  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password" class="form-control" disabled placeholder="Password" >
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListUser()" class="btn btn-danger">Retouner à la liste des utilisateurs</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>


        <script>
        window.addEventListener("showSuccessMessage",event=>{
            Swal.fire({
                position:'top-end',
                icon:'success',
                toast:'true',
                title: event.detail.message || "Opération éfféctuée avec succès",
                showConfirmButton: false,
                timer: 3000
            }
            )
        }) 
        </script>