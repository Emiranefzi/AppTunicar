<div class="row p-4 pt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-primary d-flex align-items-center">
          <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des clients</h3>

          <div class="card-tools d-flex align-items-center ">
          <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddClient()"><i class="fas fa-user-plus"></i> Nouveau client</a>
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
                <th style="width:15%;">Clients</th>
                <th style="width:20%;" class="text-center" >Numéro de téléphone</th>
                <th style="width:22%;" >Adresse e-mail</th>
                <th style="width:30%;" >Numéro de CIN</th>
                <th style="width:20%;" class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients as $client)
              <tr>
                
                <td>{{ $client->prenom }} {{ $client->nom }}</td>
                <td>{{ $client->tel }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->cin }}</td>
                <td class="text-center">
                  <button class="btn btn-link" wire:click="goToEditClient({{$client->id}})"> <i class="far fa-edit"></i> </button>
                  <button class="btn btn-link" wire:click="confirmDelete('{{ $client->prenom }} {{ $client->nom }}', {{$client->id}})"> <i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
              <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
              {{ $clients->links() }}
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
  </div>
