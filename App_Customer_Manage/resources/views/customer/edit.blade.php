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
  
   <div class="col-12 col-md-12">
      <div class="row">
         <div class="col-12"><h1>Chỉnh sửa khách hàng</h1></div>
         <div class="col-5">
            <form method="post" action="{{ route('customer.update', $customer->id) }}">
               @method('PUT')
            @csrf
            <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
            </div>
            <div class="form-group">
               <label>Email</label>
               <input type="email" class="form-control" name="email" value="{{ $customer->email }}" required></div>
            <div class="form-group">
               <label>Ngày sinh</label>
               <input type="date" class="form-control" name="dob" value="{{ $customer->dob }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
         </form>
         </div>
        </div>
   </div>
</body>
</html>


