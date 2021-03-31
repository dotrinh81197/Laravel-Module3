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
      <div class="col-12">
          <h1>Thêm mới khách hàng</h1>
      </div>
      <div class="col-12">
         <form method="post" action="{{ route('customer.store') }}">
         @csrf
         <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="name"  placeholder="Enter name" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input type="email" class="form-control" name="email" placeholder="Enter email" required>
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Ngày sinh</label>
            <input type="date" class="form-control" name="dob" required>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
     </div>
   </div>
</div>
</body>
</html>