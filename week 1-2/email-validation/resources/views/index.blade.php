<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Email Validation</title>
</head>
<body>
    <div class="row container">
        <div class="col-sm-6">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                  <label for="email-input"> Check Email address</label>
                  <input type="text" name="email" class="form-control" id="email-input" aria-describedby="emailHelp" placeholder="Enter email">
                  <input class="btn btn-primary" type="submit" value="Submit">
                </div>
            </form>
        </div>
   </div>
   @if (isset($isemail))
        Kết quả : {{$isemail ? 'Valid Email':'Invalid Email' }}
       
   @endif
        
</body>
</html>