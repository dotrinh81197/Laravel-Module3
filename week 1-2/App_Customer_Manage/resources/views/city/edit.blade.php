<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12">
                    <h1>Sửa tỉnh thành</h1>
                </div>
                <div class="col-12">
                    <form method="post" action="{{route('city.update', $city->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label>Tên tỉnh</label>
                            <input type="text" class="form-control" name="name_city" value="{{ $city->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>