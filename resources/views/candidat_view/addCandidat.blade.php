@extends('base')

@section('title','Ajouter Candidats')

@section('content')

<section class="wrapper">
  <div class="container">

    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center  text-muted  mb-3 mt-5">Add Candidat</h1>
            <p class="text-center  text-muted  mb-5">Create a candidar if you don't have one</p>
            <form action="{{route('app_adding_candidat')}}" method="post" id="form-addCandidat" class="row g-3 " enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 ">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text"  class="form-control " id="prenom" name="prenom" value="{{ old('prenom')}}" required autocomplete="prenom" autofocus >
                <small class="text-danger fw-bold" id="error-register-prenom"></small>
            </div>
            <div class="col-md-6 ">
                <label for="nom" class="form-label">Nom</label>
                <input type="text"   class="form-control " id="nom" name="nom" value="{{ old('nom')}}" required autocomplete="nom" autofocus >
                <small class="text-danger" id="error-register-nom"></small>
            </div>
            <div class="col-md-12 ">
                <label for="partie" class="form-label">Partie</label>
                <input type="text"  class="form-control " id="partie" name="partie" value="{{ old('partie')}}"  required autocomplete="partie" autofocus>
                <small id="error-register-partie" class="text-danger"></small>
            </div>
           
            <div class="col-md-6 ">
                <label for="biographie" class="form-label">Biographie</label>
                <input type="text"  class="form-control " id="biographie" name="biographie" value="{{ old('biographie')}}"  required autocomplete="biographie" autofocus>
                <small id="error-register-biographie" class="text-danger"></small>
            </div>
          
            <div class="col-md-6 ">
                <label for="photo" class="form-label">Photo</label>
                <input type="file"  class="form-control " id="photo" name="photo" value="{{ old('photo')}}"  required autocomplete="photo" autofocus>
                <small id="error-register-photo" class="text-danger"></small>
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