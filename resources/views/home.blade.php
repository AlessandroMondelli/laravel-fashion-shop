@extends('layouts.main')

@section('title','Home Laravel Shop')

@section('content')
<main>
    <div id="shop">
        <div class="container">
            <div class="row">
                @foreach ($clothes as $cloth)
                <div class="col-lg-4 cloth-card">
                        <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h2><class="card-title">{{ $cloth->tipo }}</h2>
                            <p class="card-text">Taglia: {{ $cloth->taglia }}</p>
                            <p class="card-text">Prezzo: {{ $cloth->prezzo }}€</p>
                            @if ($cloth->sconto != NULL)
                                <p class="card-text">Sconto: {{ $cloth->sconto }}%</p>
                            @else <p class="card-text">Sconto non disponibile</p>
                            @endif
                            <a href="#" class="btn btn-primary">Acquista ora</a>
                          </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
