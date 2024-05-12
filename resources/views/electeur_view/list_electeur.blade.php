@extends('base')

@section('title','liste Electeur')

@section('content')

    <section class="wrapper">
        <div class="card-header">
            <span class="h4 text-center text-with text-center"> GESTION DES ELECTEURS</span>
        </div>
        <table class="table ">
            <thead>
            <tr>
                <th class="text-dark h3" scope="col">#</th>
                <th class="text-dark" scope="col">Prenom Nom</th>
                <th class="text-dark" scope="col">Adresse </th>
                <th class="text-dark" scope="col"> CNI</th>
                <th class="text-dark" scope="col"> Email</th>
            </tr>
            </thead>
            <tbody>{{$i=1}}
            @foreach ($electeurs as $elec)
                <tr>
                    <th class="text-dark " scope="row">{{$i++}}</th>
                    <td class="text-dark" scope="row">{{$elec->name}}</td>
                    <td class="text-dark">{{$elec->adresse}}</td>
                    <td class="text-dark">{{$elec->cni}}</td>
                    <td class="text-dark">{{$elec->email}}</td>
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
