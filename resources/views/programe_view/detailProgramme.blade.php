@extends('base')
<?php
use App\Models\Programme;
?>
@section('title','detail Programme')

@section('content')


<section class="wrapper">
    <div class="card-header">
        
        <button class=" h4 btn btn-sm btn btn-success float-end "><h4><a class="text-white" href="{{route('app_detailCandidat',['id' => $Programme->id ])}}"> Retour au Programme</a></h4></button>
        
    </div>
    <div class="card-header">
        <span class="h4 text-center text-with text-center"> Gestion des Secteurs du {{$Programme->titre}}</span>
       
    </div>
<div class="card col-md-7 mt-4 ml-7">
    <div class="card-header text-center">
        <h2>Liste des Secteurs
        </h2> 
    </div>
    
    <div class="card-body">
       
        <div class="row mt-2" id="listeE">
           
            <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nom Secteur</th>
                    <th>Programme du Secteur</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Programme->secteurs as $sect)   
                <tr>
                    <td>{{ $sect->nomSect }}</td>
                     <td>{{ $sect->programmeSect }}</td>
                   
                 </tr>
                @endforeach
              
            </tbody>
            </table>
        </div>
        
    </div>
    
</div>

</section>

@endsection
