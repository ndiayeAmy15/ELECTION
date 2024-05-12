@extends('base')
<?php
use App\Models\Programme;
?>
@section('title','liste Secteur')

@section('content')

    <section class="wrapper">
        <div class="card-header">
            <span class="h4 text-center text-with text-center"> GESTION DES SECTEURS</span>
            <button class=" h4 btn btn-sm btn-with float-end text-success"><h4><a class="text-success" href="{{route('app_addSV')}}"> Ajouter un candidat</a></h4></button>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th class="text-dark h3" scope="col">#</th>
                <th class="text-dark" scope="col">Candidat</th>
                <th class="text-dark" scope="col"> Secteur</th>
                <th class="text-dark" scope="col">Programme </th>
                <th class="text-dark" scope="col">Action </th>
            </tr>
            </thead>
            <tbody>{{$i=1}}
            @foreach($secteur as $sect)
                <tr>
                    <th class="text-dark " scope="row">{{$i++}}</th>
                    <td class="text-dark" scope="row">{{$sect->nomSect}}</td>
                    <td class="text-dark">{{$sect->programmeSect}}</td>
                    <td class="text-dark">{{ Programme::findOrfail($sect->programme_id)->titre}}</td>
                    <td>
                        <a href=""><button class="btn btn-sm btn-success text-white"><i class="fas fa-edit"></i></button></a>
                        <a href=""><button class="btn btn-sm btn-secondary text-white"><i class="fas fa-trash"></i></button></a>
                         </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>



@endsection
