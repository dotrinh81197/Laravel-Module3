<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
</head>
<body>
<div class="container">
     <div class="row">
      <div class="col-6">
            <div class="col-12"><h1>Danh Sách Khách Hàng</h1></div>
                  <form class="navbar-form navbar-left" action="{{route('customer.search')}}" method="post">        
                  @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                    <input name="key_word" type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </div>
              
                </form>
                <div class="col-12">
                    @if (Session::has('success'))
                       <p class="text-success">
                          <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                       </p>
                    @endif
                </div>
               
            </div>
            <div class="row">
                  <table class="table table-striped">
                        <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Tên khách hàng</th>
                              <th scope="col">Ngày Sinh</th>
                              <th scope="col">Email</th>
                              <th scope="col">City_id</th>
                              <th></th>
                              <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($customers) == 0)
                        <tr><td colspan="4">Không có dữ liệu</td></tr>
                        @else
                              @foreach($customers as $key => $customer)
                              <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->dob }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->city->name }}</td>

                                    <td><a class="btn btn-warning" href="{{ route('customer.edit', $customer->id) }}">sửa</a></td>
                                    <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <td>
                                                <button class="btn btn-danger" type="submit" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" > Xóa

                                          </td>
                                    </form>
                              </tr>
                              @endforeach
                              
                        @endif
                        </tbody>
                  </table>
            </div>   
            <div class="container">
                   <a class="btn btn-primary" href="{{ route('customer.create') }}">Thêm mới</a>
            </div>    
          
</div>
{{ $customers->links() }}


</body>
</html>