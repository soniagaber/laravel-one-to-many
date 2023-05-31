@extends('layouts/admin')

@section('content')

    <h1>{{$project->title}}</h1>
    <h2>Categoria:</h2>
    <p>{{$project->description}}</p>

    <div class="container">
        <div class="d-flex justify-content-around">
            <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary">Modifica il progetto</a>
    
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina il progetto
        </button>
    </div>
    
  
  <!-- Modal -->
            
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare il progetto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                
                <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Sì, elimina definitivamente</button>
                    
                </form>
                
            </div>
        </div>
    </div>
</div>

</div>

</div>

</div>

</div>
@endsection