@extends('layouts.app')
{{-- Estende il layout principale chiamato "app" --}}

@section('content')
    {{-- Sezione che definisce il contenuto della pagina --}}
    <div class="container">
        {{-- Contenitore principale --}}
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Original Title</th>
                            <th>Nationality</th>
                            <th>Date</th>
                            <th>Vote</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            {{-- Ciclo per mostrare ogni film nella tabella --}}
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->original_title }}</td>
                                <td>{{ $movie->nationality }}</td>
                                <td>{{ $movie->date }}</td>
                                <td>{{ $movie->vote }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
