<?php

namespace App\Http\Livewire;

use App\Models\location;
use App\Models\client;
use App\Models\voiture;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class locationComp extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $addLocation = [];
    public $editLocation = [];
    public $search = "";

    public function render()
    {

        Carbon::setLocale("fr");
        
//fonction search
        $query = Location::query();
        $search = $this->search;

        if(isset($search))
            $this->resetPage();

        $query->when($search != "", function($query) use($search){
            $query->where("client_id", "like", "%{$search}%");
        });

        return view('livewire.locations.index', [
            "locations" => $query->latest()->paginate(10)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

            // 'required|email|unique:Clients,email Rule::unique("Clients", "email")->ignore($this->editClient['id'])
            return [
                'editLocation.dateDebut' => 'required',
                'editLocation.dateFin' => 'required',
                'editLocation.prix' => 'required',
                'editLocation.client_id' => 'required',
                'editLocation.voiture_id' => 'required',

 
            ];
        }

        return [
            'addLocation.dateDebut' => 'required',
            'addLocation.dateFin' => 'required',
            'addLocation.prix' => 'required',
            'addLocation.client_id' => 'required',
            'addLocation.voiture_id' => 'required',


        ];
    }

    public function goToAddLocation(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditLocation($id){
        $this->editLocation = Location::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }



    public function goToListLocation(){
        $this->currentPage = PAGELIST;
        $this->editLocation = [];
    }

    public function addLocation(){

        // V??rifier que les informations envoy??es par le formulaire sont correctes
        $validationAttributes = $this->validate();

        //dump($validationAttributes);
        // Ajouter un nouvel utilisateur
        Location::create($validationAttributes["addLocation"]);

        $this->addLocation = [];

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Location cr???? avec succ??s!"]);
    }

    public function updateLocation(){
        // V??rifier que les informations envoy??es par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Location::find($this->editLocation["id"])->update($validationAttributes["editLocation"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Location mise ?? jour avec succ??s!"]);

    }



    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous ??tes sur le point de supprimer $name de la liste des locations. Voulez-vous continuer?",
            "title" => "??tes-vous s??r de continuer?",
            "type" => "warning",
            "data" => [
                "location_id" => $id
            ]
        ]]);
    }

    public function deleteLocation($id){
        Location::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Location supprim??e avec succ??s!"]);
    }
}