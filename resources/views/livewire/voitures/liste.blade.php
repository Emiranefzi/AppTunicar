<div class="row p-8 pt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-primary d-flex align-items-center">
          <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des voitures</h3>

          <div class="card-tools d-flex align-items-center ">
          <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddVoiture()"><i class="fas fa-user-plus"></i> Nouvelle voiture</a>
            <div class="input-group input-group-md" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" wire:model.debounce.700ms="search" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0 table-striped" style="height: 400px;">
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th style="width:10%;">Modèle</th>
                <th style="width:10%;" class="text-center" >Matricule</th>
                <th style="width:10%;" >Kilométrage</th>
                <th style="width:10%;" >Prix</th>
                <th style="width:10%;" >Etat</th>
                <th style="width:10%;" >Disponibilté</th>
                <th style="width:7%;" >Image</th>
                <th style="width:15%;" class="text-center">Actions</th>


              </tr>
            </thead>
            <tbody>
              @foreach($voitures as $voiture)
              <tr>
                
                <td>{{ $voiture->modele }}</td>
                <td>{{ $voiture->matricule }}</td>
                <td>{{ $voiture->kilometrage }}</td>

                <td>{{ $voiture->prix }}</td>
                <td class="text-center">
                     @if($voiture->disponibilite)
                             <span class="badge badge-success">Disponible</span>
                                    @else
                                        <span class="badge badge-danger">Indisponible</span>
                                    @endif
                </td>



                <td class="text-center">
                     @if($voiture->etat==0)
                             <span class="badge badge-light">Excellent</span>
                                    @elseif ($voiture->etat==1)
                                        <span class="badge badge-light">Très bon</span>

                                         @elseif ($voiture->etat==2)
                                            <span class="badge badge-light">Bon</span>
                                            @else
                                                 <span class="badge badge-light">Correct</span>

                                    @endif
                </td>




                <td>
                    <img src="{{asset($voiture->image)}}" alt="" style="width:60px;height:60px;">

                </td>
                <td class="text-center">
                  <button class="btn btn-link" wire:click="goToEditVoiture({{$voiture->id}})"> <i class="far fa-edit"></i> </button>
                  <button class="btn btn-link" wire:click="confirmDelete('{{ $voiture->modele }} {{ $voiture->matricule}}', {{$voiture->id}})"> <i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
              <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
              {{ $voitures->links() }}
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
  </div>
