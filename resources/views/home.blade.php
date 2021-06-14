<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <form action="{{route('student.save')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Student Name</label>
                <input type="text" name="name" id="name">
            </div>
            <button type="submit" class="btn btn-pirmary btn-block">Submit</button>
        </form>
    </div>
</body>
</html>
