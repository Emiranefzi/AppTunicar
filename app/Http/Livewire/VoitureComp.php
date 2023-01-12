<?php

namespace App\Http\Livewire;


use App\Models\Voiture;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class voitureComp extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = "bootstrap";

    public $currentPage = PAGELIST;

    public $addVoiture = [];
    public $editVoiture = [];
    public $addPhoto = null;
    public $editPhoto = null;
    public $inputFileIterator = 0;
    public $inputEditFileIterator = 0;
    public $search = "";

    public function render()
    {

        Carbon::setLocale("fr");
        
//fonction search
        $query = Voiture::query();
        $search = $this->search;

        if(isset($search))
            $this->resetPage();

        $query->when($search != "", function($query) use($search){
            $query->where("modele", "like", "%{$search}%");
            $query->orWhere("matricule", "like", "%{$search}%");
        });

        return view('livewire.voitures.index', [
            "voitures" => $query->latest()->paginate(10)
        ])
        ->extends("layouts.master")
        ->section("contenu");
    }

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){

            // 'required|email|unique:Clients,email Rule::unique("Clients", "email")->ignore($this->editClient['id'])
            return [
                'editVoiture.modele' => 'required',
                'editVoiture.matricule' => ["required", Rule::unique("voiture", "matricule")->ignore($this->editVoiture["id"])],
                'editVoiture.etat' => 'required',
                'editVoiture.kilometrage' => 'required',
                'editVoiture.prix' => 'required',
                'editVoiture.disponibilite' => 'required',
                'editVoiture.image' => 'required',
 
            ];
        }

        return [
            "addVoiture.modele" => "required",
            "addVoiture.matricule" => "string|required|unique:voiture,matricule",
            "addVoiture.etat" => "required",
            "addVoiture.kilometrage" => "required",
            "addVoiture.prix" => "required",
            "addVoiture.disponibilite" => "required",
            "addPhoto" => "image|max:10240" // 10mb
        ];
        $customErrMessages = [];
        $propIds = [];

        $this->addPhoto = null;
        $this->inputFileIterator++;
  // Validation des erreurs

  // par défaut notre image est une placeholder
  $imagePath = "images/imageplaceholder.png";

  if($this->addPhoto != null){

      $path = $this->addPhoto->store('upload', 'public');
      $imagePath = "storage/".$path;

      $image = Image::make(public_path($imagePath))->fit(200, 200);
      $image->save();

  }
    }

    public function goToAddVoiture(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToEditVoiture($id){
        $this->editVoiture = Voiture::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }



    public function goToListVoiture(){
        $this->currentPage = PAGELIST;
        $this->editVoiture = [];
    }

    public function addVoiture(){

        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();

        //dump($validationAttributes);
        // Ajouter un nouvel utilisateur
        Voiture::create($validationAttributes["addVoiture"]);

        $this->addVoiture = [];

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Voiture créée avec succès!"]);
    }

    public function updateVoiture(){
        // Vérifier que les informations envoyées par le formulaire sont correctes
        $validationAttributes = $this->validate();


        Voiture::find($this->editVoiture["id"])->update($validationAttributes["editVoiture"]);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Voiture mise à jour avec succès!"]);

    }



    public function confirmDelete($name, $id){
        $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des voitures. Voulez-vous continuer?",
            "title" => "Êtes-vous sûr de continuer?",
            "type" => "warning",
            "data" => [
                "voiture_id" => $id
            ]
        ]]);
    }

    public function deleteVoiture($id){
        Voiture::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Voiture supprimée avec succès!"]);
    }
}