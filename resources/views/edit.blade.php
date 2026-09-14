<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <title>Edit Task</title>
</head>

<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header">
            <h2>Edit Task</h2>
        </div>

        <div class="card-body">

            <form action="{{ url('/tasks/' . $task->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>

                    <input type="text"
                           name="titel"
                           class="form-control"
                           value="{{ $task->titel }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>

                    <textarea name="description"
                              class="form-control"
                              rows="3">{{ $task->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="{{ url('/') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
