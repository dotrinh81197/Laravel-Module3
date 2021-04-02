<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 >
            Laravel Cusstom Validation
        </h1>
        <div class="col-sm-6">
            <div class="error-message">
                @if ($errors->any())
                    @foreach($errors->all() as $nameError)
                        <p style="color:red">{{ $nameError }}</p>
                    @endforeach
                @endif
            </div>
            <div class="success-message">
                <p style='color:green'>{{ (isset($success)) ? $success : '' }}</p>
            </div>
            <form action="{{route('form.checkValidation')}}" method="post">
                @csrf
                <label for="name">Name: </label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Enter the full name">
                <br>
                <label for="age">Age: </label>
                <input class="form-control" id="age" name="age" type="text" placeholder="Enter the age">
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>