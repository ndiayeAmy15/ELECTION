@extends('base')
<?php
use App\Models\Candidat;
use App\Models\Programme;

?>
@section('title','detail candidat')

@section('content')
<section class="wrapper">
    <div class="card-header">
        <span class="h4 text-center text-with text-center"></span>
        <button class=" h4 btn btn-sm btn-with float-end text-with"><h4><a href="{{route('app_list_Candidat')}}"> Retour au candidat</a></h4></button>
    </div>
    
    <div class="card-header">
        <span class="h4 text-center text-with text-center">Les programme </span>
    </div>

<div class="card col-md-7 mt-4 ml-7">
    <div class="card-header text-center">
        <h2>Liste des Programme
        </h2>
    </div>
    
    <div class="card-body">
       
        <div class="row mt-2" id="listeE">
           
            <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenue</th>
                    <th>Candidat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidat->programmes as $programme)       
                    <tr>
                       <td>{{ $programme->titre }}</td>
                        <td>{{ $programme->contenue }}</td>
                        <td></td>
                        <td>
                            <a href=""><button class="btn btn-sm btn-success text-white"><i class="fas fa-edit"></i></button></a>
                            <a href=""><button class="btn btn-sm btn-secondary text-white"><i class="fas fa-trash"></i></button></a> 
                             <a href="{{route('app_detailProgramme',['id' => $programme->id])}}"><button class="btn btn-sm btn-info text-white"><i class="fa-solid fa-info"></i></i></button></a> 
                         </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        
    </div>
    
</div>

</section>

@endsection
