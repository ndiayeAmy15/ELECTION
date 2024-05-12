@extends('base')

@section('title','register')
@section('content')
<div class="container">

  
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h1 class="text-center  text-muted  mb-3 mt-5">Ajouter un electeur</h1>
            <p class="text-center  text-muted  mb-5">Create a account if you don't have one</p>
            <form action="{{route('app_add_electeur_traitement')}} " method="post" id="form-register" class="row g-3">
            @csrf
            <div class="col-md-6 ">
                <label for= "firstname" class="form-label">Prenom</label>
                <input type="text"  class="form-control " id="firstname" name="prenom" value="{{ old('prenom')}}" required autocomplete="firstname" autofocus >
                <small class="text-danger fw-bold" id="error-register-prenom"></small>
            </div>
            <div class="col-md-6 ">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text"   class="form-control " id="nom" name="nom" value="{{old('nom')}}" required autocomplete="lastname" autofocus >
                <small class="text-danger" id="error-register-nom"></small>
            </div>
            <div class="col-md-6 ">
                <label for="email" class="form-label">CNI</label>
                <input type="text"  class="form-control " id="cni" name="cni" value="{{ old('cni')}}"  required autocomplete="cni" autofocus>
                <small id="error-register-email" class="text-danger"></small>
            </div>
           
            <div class="col-md-6 ">
                <label for="password" class="form-label">Adresse</label>
                <input type="text"  class="form-control " id="adresse" name="addresse" value="{{ old('addresse')}}"  required autocomplete="adresse" autofocus>
                <small id="error-register-password" class="text-danger"></small>
            </div>
           
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary " id="register-user">Register</button>
            </div>  
            </form>
        </div>
    </div>
</div> 
@endsection   
