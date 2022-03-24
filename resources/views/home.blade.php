@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam. Het idee van Zwerkbal lijkt te zijn gebaseerd op het non-fictieve horseball.</p>
    <div class="grid-container">
        <div class="container">
            <div class="Aankomende-toernooien"><p style="font-size: 40">Aantal aankomende <br>toernooien:</p><h1>5</h1></div>
            <div class="totale-teams"><p style="font-size: 40">Totaal aantal teams:</p><h1>26</h1></div>
            <div class="Snitch"></div>
        </div>
    </div>
    
@endsection