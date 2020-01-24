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
                <li><a href="{{ URL::to('events/create') }}">Create an event</a>
            </ul>
        </nav>
    </div>
</body>