<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Student view</title>
</head>
<body>
    @if(\Session('update_success'))
    <div class="alert">
        <h4>
            {{\Session::get('update_success')}}
        </h4>
    </div>
    @endif

    @if(\Session('delete_success'))
    <div class="alert">
        <h4>
            {{\Session::get('delete_success')}}
        </h4>
    </div>
    @endif

<div class="container">
    <div class="jumbotron">
        <h1>Students data</h1>
        <hr>
        <div class="line" style="text-align: right;">
            <a href="/studentadd" class="btn btn-outline-primary">Add Student</a>
        </div>
    </div>
</div>
<br>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#id</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Mobile number</th>
                <th scope="col">Course</th>
                <th scope="col">Address</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->stud_fname}}</td>
                    <td>{{$item->stud_lname}}</td>
                    <td>{{$item->stud_mobile}}</td>
                    <td>{{$item->stud_course}}</td>
                    <td>{{$item->stud_address}}</td>
                    <td>
                        <a href="student_edit/{{$item->id}}" class="btn btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <a href="student_delete/{{$item->id}}" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
