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
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1>Danh Sách Thành phố</h1>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tỉnh thành</th>
                        <th scope="col">Số khách hàng</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($cities) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($cities as $key => $city)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $city->name }}</td>
                                <td>{{ count($city->customer) }}</td>
                                <td><a href="{{route('city.edit', $city->id)}}">sửa</a></td>
                                <td><a href="{{route('city.destroy', $city->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{route('city.create')}}">Thêm mới</a>
            </div>
        </div>
    </div>
  
</body>
</html>