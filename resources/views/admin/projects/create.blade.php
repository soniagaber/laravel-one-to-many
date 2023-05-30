@extends ('layouts.admin');

@section ('content')

<h1>Crea un nuovo progetto
</h1>

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

    <div class="mb-3">
        <label for="github_link">Github Link</label>
        <input class="form-control" type="text" id="github_link" name="github_link">
    </div>

    <div class="mb-3">
      <label for="language">Linguaggio di programmazione</label>
      <input class="form-control" type="text" id="language" name="language">
    </div>

    <div class="mb-3">
      <label for="creation_date">Data di Creazione</label>
      <input class="form-control" type="date" id="creation_date" name="creation_date">
    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
</div>

@endsection