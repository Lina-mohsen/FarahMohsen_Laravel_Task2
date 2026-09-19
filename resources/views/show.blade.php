<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <title>Task Details</title>
</head>

<body>

<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            <h2>Task Details</h2>
        </div>

        <div class="card-body">

            <h5>Title</h5>
            <p>{{ $task->title }}</p>

            <h5>Description</h5>
            <p>{{ $task->description }}</p>

            <a href="{{ url('/') }}" class="btn btn-primary">
                Back
            </a>

        </div>
    </div>

</div>

</body>
</html>
