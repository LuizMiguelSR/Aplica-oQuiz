@php
    $title = "Página Inicial";
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
        <h2>Página Inicial</h2>
        <div class="container">
            <div class="container">
                <div class="imagem">
                    <a href="{{ route('playlists.create') }}">
                        <img src="{{ asset('imagens/playlist.png') }}" alt="Registrar Container" title="Registrar Container">
                        <h6 class="menu">Nova Playlist</h6>
                    </a>
                </div>
            </div>
        </div>
    </main>
</section>
