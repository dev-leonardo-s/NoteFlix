<x-layout title="Séries">
    <div class="c-panel">

        <a href="/series/create" class="btn btn-secondary mb-2">
            Adicionar Série
        </a>

        <ul class="list-group">
            @foreach ($series as $serie)
            <li class="list-group-item">{{$serie->nome}}</li>
            @endforeach
        </ul>
</x-layout>