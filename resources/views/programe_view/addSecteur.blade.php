@extends('base')

@section('title','Ajouter secteur')

@section('content')

<section class="wrapper">
  <div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center  text-muted  mb-3 mt-5">Add Secteur for Programme</h1>
            <p class="text-center  text-muted  mb-5">Create a secteur if you don't have one</p>
            <form action="{{route('app_add_secteur')}}" method="post" id="form-addProgramme" class="row g-3 " >
            @csrf
            <div class="col-md-6 ">
                <label for="nomSect	" class="form-label">Nom Secteur</label>
                <input type="text"  class="form-control " id="nomSect" name="nomSect" value="{{ old('nomSect')}}" required autocomplete="nomSect	" autofocus >
                <small class="text-danger fw-bold" id="error-register-nomSect	"></small>
            </div>
            <div class="col-md-6 ">
                <label for="programmeSect" class="form-label">Contenue du secteur</label>
                <input type="text"   class="form-control " id="programmeSect" name="programmeSect" value="{{ old('programmeSect')}}" required autocomplete="programmeSect" autofocus >
                <small class="text-danger" id="error-register-programmeSect"></small>
            </div>

            <div class="col-md-12 ">
                <select name="programme_id" id="programme_id" placeholder="programme_id" required="">
                    @foreach ($programmes as $prog)
                    <option value="{{$prog->id}}">{{$prog->titre}}</option>
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