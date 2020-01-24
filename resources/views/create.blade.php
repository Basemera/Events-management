<!-- app/views/create.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Events Management System</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <nav class="navbar navbar-inverse">

            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('events') }}">View All Events</a></li>
            </ul>
        </nav>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>
        <h1>Create an event</h1>
        <form method="POST" action="/events">
            @csrf
            <label for="event_name">Event Name</label>
            <input type="text" class="form-control" id="event_name" name="event_name" placeholder="event name">
            <label for="description"> Description </label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description">
            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
</body>

</html>