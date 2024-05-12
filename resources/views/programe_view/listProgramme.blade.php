@extends('base')
<?php
use App\Models\Candidat;
?>
@section('title','listeApprenant')

@section('content')

    <section class="wrapper">
        <div class="card-header">
            <span class="h4 text-center text-with text-center"> GESTION DES PROGRAMMES</span>
            <button class=" h4 btn btn-sm btn-with float-end text-with"><h4><a class="text-success" href="{{route('app_add_programme')}}"> Ajouter un candidat</a></h4></button>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th class="text-dark h3" scope="col">#</th>
                <th class="text-dark" scope="col">Titre</th>
                <th class="text-dark" scope="col"> Candidat</th>
                <th class="text-dark" scope="col">Contenue </th>
                <th class="text-dark" scope="col">Action </th>
            </tr>
            </thead>
            <tbody>{{$i=1}}
            @foreach ($listProg as $prog)
                <tr>
                    <th class="text-dark " scope="row">{{$i++}}</th>
                    <td class="text-dark" scope="row">{{$prog->titre}}</td>
                    <td class="text-dark">{{$prog->contenue}}</td>
                    <td class="text-dark">{{Candidat::findOrfail($prog->candidat_id)->prenom}} {{Candidat::findOrfail($prog->candidat_id)->nom}}</td>
                    <td>
                        <a href=""><button class="btn btn-sm btn-success text-white"><i class="fas fa-edit"></i></button></a>
                        <a href=""><button class="btn btn-sm btn-secondary text-white"><i class="fas fa-trash"></i></button></a>
                        <a href="{{route('app_detailProgramme',['id' => $prog->id])}}"><button class="btn btn-sm btn-info text-white"><i class="fa-solid fa-info"></i></i></button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </section>
@endsection
