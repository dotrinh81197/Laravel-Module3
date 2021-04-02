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
    <div>
        @if (count($errors)>0)
            <div class="alert alert-danger col-sm-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
            
        @endif
    </div>
    <div class="main-content">
        <h1>Form điền thông tin</h1>
       
        <form method="post" action="{{ route('store') }}">
            @csrf
            <label for="number">chỉ được nhập số</label>
            <input type="text" name="number">
       
            <button type="submit">Kiểm tra</button>
        </form>
      </div>
</body>
</html>