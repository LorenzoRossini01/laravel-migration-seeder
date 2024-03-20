@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3><b>Treno </b>{{$train->codice_treno}}</h3>
                    <p>{{$train->azienda}}</p>
                </div>
                <div class="card-body">
                    <p><b>dalla stazione di: </b>{{$train->stazione_di_partenza}}</p>
                    <p><b>alla stazione di: </b>{{$train->stazione_di_arrivo}}</p>
                    <p><b>delle ore: </b>{{$train->orario_di_partenza}}</p>
                    <p><b>arriverà a destinazione alle ore: </b>{{$train->orario_di_arrivo}}</p>
                    <p><b>n° carrozze: </b>{{$train->numero_carrozze}}</p>
                    <p>
                        <b>in orario: </b>
                        @if($train->in_orario==1)
                        si
                        @else 
                        no
                        @endif
                    </p>
                    @if($train->in_orario==0)
                        <p><b>minuti di ritardo: </b>{{$train->minuti_di_ritardo}} min</p>
                        @endif
                    <p>
                        <b>cancellato: </b>
                        @if($train->cancellato==1)
                        si
                        @else 
                        no
                        @endif
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{route('train.index')}}">go back</a>
                </div>
            </div>
        </div>

      </div>
    </div>
  </section>
@endsection
