<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>student edit</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Update student data</h1>
            <hr>
            <div class="line" style="text-align: right;">
                <a href="/studentlist" class="btn btn-outline-primary">Students List</a>
            </div>

            <form action="/update_data/{{$student[0]->id}}" method="POST">
                {{ csrf_field() }}
                <div class="container">
                    <div class="form-group">
                        <label >First name</label>
                        <input type="text" class="form-control" name="stud_fname" placeholder="Enter your first name" value="{{$student[0]->stud_fname}}">
                    </div>
                    <div class="form-group">
                        <label >Last name</label>
                        <input type="text" class="form-control" name="stud_lname" placeholder="Enter your Last name" value="{{$student[0]->stud_lname}}">
                    </div>
                    <div class="form-group">
                        <label >Mobile number</label>
                        <input type="text" class="form-control" name="stud_mobile" placeholder="Enter your mobile number" value="{{$student[0]->stud_mobile}}">
                    </div>
                    <div class="form-group">
                        <label >Course</label>
                        <input type="text" class="form-control" name="stud_course" placeholder="Enter your course" value="{{$student[0]->stud_course}}">
                    </div>
                    <div class="form-group">
                        <label >Address</label>
                        <input type="text" class="form-control" name="stud_address" placeholder="Enter your address" value="{{$student[0]->stud_address}}">
                    </div>

                    <div class="col-12">
                    <button class="btn btn-outline-primary" name="submit" type="submit">Update Data</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</body>
</html>
