@extends ('layouts.admin');

@section ('content')

<h1>Crea un nuovo progetto
</h1>

<div class="container"> 
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title">Titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $project->title}}">
      
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div> 
        @enderror

    </div>
    <div class="mb-3">
        <label for="description">Descrizione del progetto</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description' ?? $project->description)}}</textarea>

        @error('description')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="github_link">Github Link</label>
        <input class="form-control @error('github_link') is-invalid @enderror" type="text" id="github_link" name="github_link" value="{{old('github_link' ?? $project->github_link)}}">
        @error('github_link')
          <div class="invalid-feedback">
            {{$message}}
          </div> 
        @enderror
    </div>

    <div class="mb-3">
      <label for="language">Linguaggio di programmazione</label>
      <input class="form-control @error('language') is-invalid @enderror" type="text" id="language" name="language" value="{{old('language' ?? $project->language)}}">
      @error('language')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3">
      <label for="creation_date">Data di Creazione</label>
      <input class="form-control @error('creation_date') is-invalid @enderror" type="date" id="creation_date" name="creation_date" value="{{old('creation_date' ?? $project->creation_date)}}">
      @error('creation_date')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>

@endsection