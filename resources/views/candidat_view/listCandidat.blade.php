@extends('base')

@section('title','liste Candidats')

@section('content')

<section class="wrapper">
    <div class="card-header">
        <span class="h4 text-center text-with text-center"> GESTION DES CANDIDATS</span>
        <button class=" h4 btn btn-sm btn-with float-end text-with"><h4><a href="{{route('app_add_candidat_view')}}"> Ajouter un candidat</a></h4></button>
    </div>
    <table class="table ">
        <thead>
          <tr>
            <th class="text-dark h3" scope="col">#</th>
            <th class="text-dark" scope="col">Prenom</th>
            <th  class="text-dark" scope="col">Nom</th>
            <th class="text-dark" scope="col"> Partie</th>
            <th class="text-dark" scope="col"> Biographie</th>
            <th class="text-dark" scope="col"> photo</th>
            <th class="text-dark" scope="col"> Action</th>


          </tr>
        </thead>
        <tbody>{{$i=1}}
        @foreach ($candidats as $cand)
          <tr >
            <th class="text-dark " scope="row">{{$i++}}</th>
            <td class="text-dark" scope="row">{{$cand->prenom}}</td>
            <td class="text-dark">{{$cand->nom}}</td>
            <td class="text-dark">{{$cand->partie}}</td>
            <td class="text-dark">{{$cand->biographie}}</td>
            <td>@if ($cand->photo)
                <img src="{{asset('storage/images/'.$cand->photo)}}" class="card-img-top" alt="" style="height: 100px;width:200px;">
            @else
            <img src="{{asset('storage/images/IMG_0027.JPG')}}" alt="" style="height: 100px;width:200px;">  
            @endif</td>
            <td>
               <a href="{{route('app_update_Candidat',['id' => $cand->id])}}"><button class="btn btn-sm btn-success text-white"><i class="fas fa-edit"></i></button></a>
               <a href="{{route('app_delate_Candidat',['id' => $cand->id])}}"><button class="btn btn-sm btn-secondary text-white"><i class="fas fa-trash"></i></button></a> 
                <a href="{{route('app_detailCandidat',['id' => $cand->id] )}}"><button class="btn btn-sm btn-info text-white"><i class="fa-solid fa-info"></i></i></button></a>
            </td>

          </tr>
        @endforeach
        </tbody>
      </table> 

{{-- <div class="row">
    
   
        
       
        <div class="col-md-4 mb-3 ">
            <div class="card" style="width: 18rem;">
                @foreach ($candidats as $cand)
                @if ($cand->photo)
                    <img src="{{asset('storage/images/'.$cand->photo)}}" class="card-img-top" alt="" style="height: 50px;width:100px;">
                @else
                <img src="{{asset('storage/images/IMG_0027.JPG')}}" alt="" style="height: 50px;width:100px;">  
                    
                @endif
                <div class="card-body bg-light text-with text-center">
                <h1 class="card-title">{{$cand->prenom}} {{$cand->nom}}</h1>
                <p class="card-text"><h3>Nom du Partie : {{$cand->partie}}</h3></p>
                <a href="#" class="btn btn-primary  btn-sm float-end">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
</div> --}}
</section>

@endsection