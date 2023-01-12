@extends("layouts.master")

@section("contenu")
    <div class="row">
    <div class="col-12 p-4">
        <div class="jumbotron ">
                <h1 class="display-3">Bienvenu, <strong>{{userFullName()}} </strong></h1>

                <p class="lead">Vous pouvez maintenant gérer les fonctionnalités de l'application.</p>
                <hr class="my-4">

                <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Voir plus</a>
                </p>
        </div>
    </div>
</div>
@endsection