@php
    $title = "Nova Playlist";
@endphp

@extends('layouts.layout')

@section('content')
<section>
    <main>
        <div class="container">
            <div class="imagem">
                <img src="{{ asset('imagens/versus.png') }}" alt="Batalha de Músicas" title="Batalha de Músicas">
                <h1>Batalha de Músicas</h1>
            </div>
        </div>
        <h2>Nova Playlist</h2>

        <div class="form">
            <form class="row g-3" method="post" action="{{ route('playlists.store') }}">
                @csrf
                <div class="col-md-12 mt-5">
                    <label for="playlist_name">Nome da Playlist:</label>
                    <input name="playlist_name" type="text" class="form-control" id="playlist_name" placeholder="playlist" required pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" maxlength="50">
                </div>
                <div class="col-md-12 mt-5">
                    <label for="playlist_url">URL da música:</label>
                    <input name="playlist_urls[]" type="text" class="form-control" id="playlist_url" placeholder="url" required maxlength="255">
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-primary" onclick="addUrl()">Adicionar URL</button>
                </div>
                <div id="urlInputs"></div>
                <div class="col-md-2 text-center">
                    <button type="submit" class="btn btn-primary">ADICIONAR</button>
                </div>
            </form>
        </div>

        <script>
            let urlCount = 1;

            function addUrl() {
                let urlInputs = document.getElementById('urlInputs');
                let newUrlInput = document.createElement('div');
                newUrlInput.innerHTML = `
                    <div class="col-md-12 mt-3">
                        <label for="playlist_url">URL da música:</label>
                        <input name="playlist_urls[]" type="text" class="form-control" id="playlist_url${urlCount}" placeholder="url" required maxlength="255">
                    </div>
                `;
                urlInputs.appendChild(newUrlInput);
                urlCount++;
            }
        </script>

        <div class="container">
            <div class="imagem">
                <a href="/home">
                    <img class="back" src="{{ asset('imagens/back-button.png') }}" alt="Voltar" title="Voltar">
                    <h6 class="menu">Voltar</h6>
                </a>
            </div>
        </div>
    </main>
</section>
