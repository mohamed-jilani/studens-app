<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>studentform</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    @if(\Session('success'))
    <div class="alert">
        <h4>
            {{\Session::get('success')}}
        </h4>
    </div>
    @endif
    <div class="container">
    <div class="jumbotron">
        <h1>Add Student</h1>
        <hr>
        <div class="line" style="text-align: right;">
            <a href="/studentlist" class="btn btn-outline-primary">Students List</a>
        </div>
    </div>

    <form action="/add_data" method="POST">
        {{ csrf_field() }}
        <div class="container">
            <div class="form-group">
                <label >First name</label>
                <input type="text" class="form-control" name="stud_fname" placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label >Last name</label>
                <input type="text" class="form-control" name="stud_lname" placeholder="Enter your Last name">
            </div>
            <div class="form-group">
                <label >Mobile number</label>
                <input type="text" class="form-control" name="stud_mobile" placeholder="Enter your mobile number">
            </div>
            <div class="form-group">
                <label >Course</label>
                <input type="text" class="form-control" name="stud_course" placeholder="Enter your course">
            </div>
            <div class="form-group">
                <label >Address</label>
                <input type="text" class="form-control" name="stud_address" placeholder="Enter your address">
            </div>
            <br>
            <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Save/insert Data</button>
            </div>
        </div>
    </form>
    </div>

</body>
</html>
