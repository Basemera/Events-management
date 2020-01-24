<!-- app/views/show.blade.php -->

@extends('layouts.app')

<h1>Showing {{ $event->event_name }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $event->event_name }}</h2>
    <p>
        <strong>Description:</strong> {{ $event->description }}<br>
    </p>
    <button onclick="window.location.href = '/events/{{ $event->id }}/edit'">Edit</button>
    <button onclick="window.location.href = '/events/{{ $event->id }}/delete'">Delete</button>
</div>