@extends('layouts/admin')

@section('content')
    <h1>Pagina di Amministrazione</h1>
    <hr>
    <ul>
        <li>
            <a href="{{route('admin.projects.index')}}">Mostra i Progetti</a>
        </li>
    </ul>
@endsection