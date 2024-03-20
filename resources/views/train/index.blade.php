@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="row">
        @forelse($trains as $train)
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
                </div>
                <div class="card-footer">
                    <a href="{{route('train.show', $train)}}">piu dettagli...</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <h1>treni non trovati</h1>
        </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection
