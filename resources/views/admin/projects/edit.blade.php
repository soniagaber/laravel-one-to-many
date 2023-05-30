@extends ('layouts.admin');

@section ('content')

<h1>Modifica il progetto</h1>
<div class="container"> 
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" class="form-control">

    </div>
    <div class="mb-3">
        <label for="description">Descrizione del progetto</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>

@endsection