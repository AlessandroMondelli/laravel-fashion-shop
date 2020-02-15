@extends('layouts.main')

@section('title','Create Element')

@section('content')
<main>
    <div id="create">
        <div class="container">
            <div class="row">
                <form class="" action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo indumento</label>
                        <input type="text" name="tipo" class="form-control" placeholder="Inserire tipo"></input>
                    </div>
                    <div class="form-group">
                        <label for="taglia">Taglia indumento</label>
                        <select name="taglia" class="form-control">
                            <option>XS</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prezzo">Prezzo</label>
                        <input type="text" name="prezzo" class="form-control" placeholder="Inserire Prezzo"></input>
                    </div>
                    <div class="form-group">
                        <label for="sconto">Sconto</label>
                        <input type="text" name="sconto" class="form-control" placeholder="Inserire sconto"></input>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="Invia" value="Crea">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
