@extends('base')

@section('title','Ajouter programme')

@section('content')

<section class="wrapper">
  <div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center  text-muted  mb-3 mt-5">Add Program for candidat</h1>
            <p class="text-center  text-muted  mb-5">Create a programme if you don't have one</p>
            <form action="{{route('app_add_programme')}}" method="post" id="form-addProgramme" class="row g-3 " >
            @csrf
            <div class="col-md-6 ">
                <label for="titre" class="form-label">Titre </label>
                <input type="text"  class="form-control " id="titre" name="titre" value="{{ old('titre')}}" required autocomplete="titre" autofocus >
                <small class="text-danger fw-bold" id="error-register-titre"></small>
            </div>
            <div class="col-md-6 ">
                <label for="contenue" class="form-label">Contenue du programme</label>
                <input type="text"   class="form-control " id="contenue" name="contenue" value="{{ old('contenue')}}" required autocomplete="contenue" autofocus >
                <small class="text-danger" id="error-register-contenue"></small>
            </div>

            <div class="col-md-12 ">
                <select name="candidat_id" id="candidat_id" placeholder="candidat_id" required="">
                    @foreach ($candidats as $cand)
                    <option value="{{$cand->id}}">{{$cand->prenom}} {{$cand->nom}}</option>
                    @endforeach
                </select>
                <small class="text-danger fw-bold" id="error-register-profil"></small>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary " id="register-user">Register</button>
            </div>  
            <p class="text-center  text-muted  mb-5"> <a href="{{route('app_list_Candidat')}}"> Consulter la liste des candidats ?</a></p>
            </form>
        </div>
    </div>
</div> 
 

</section>

@endsection