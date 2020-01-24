<!-- app/views/edit.blade.php -->

@extends('layouts.app')
    <div>
        <h1>Update an event</h1>
        <form method="POST" action="/events/{{ $event->id }}">
            @csrf
            @method('PUT')

            <label for="event_name">Event Name</label>
            <input type="text" class="form-control" id="event_name" name="event_name" placeholder="event name" value={{ $event->event_name }}>
            <label for="description"> Description </label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" value={{ $event->description }}>
            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
