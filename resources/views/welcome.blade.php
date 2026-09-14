ِ<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>Tasks Management System</title>
</head>

<body>

<div class="container">

    <h1>Tasks Management System</h1>

    <form method="POST" action="{{ url('/tasks') }}">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>

            <input type="text"
                   class="form-control"
                   id="tit"
                   name="titel"
                   placeholder="Task Title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>

            <textarea class="form-control"
                      id="description"
                      name="description"
                      rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</div>


<div class="container mt-3">

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
<tbody>

    @foreach ($tasks as $task)

        <tr>
            <th scope="row">{{ $loop->iteration }}</th>

            <td>{{ $task->titel }}</td>

            <td>{{ $task->description }}</td>

            <td>

            <a href="{{ url('/tasks/' . $task->id) }}" class="btn btn-info btn-sm">View</a>

               <a href="{{ url('/tasks/' . $task->id . '/edit') }}"
   class="btn btn-warning btn-sm">
    Edit
</a>
                <form action="{{ url('/tasks/' . $task->id) }}" method="POST" style="display:inline;">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
    Delete
</button>
</form>

            </td>
        </tr>

    @endforeach

</tbody>
    </table>

</div>

</body>
</html>
