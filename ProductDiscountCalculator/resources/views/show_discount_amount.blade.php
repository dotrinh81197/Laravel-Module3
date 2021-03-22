<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator Application</title>
</head>
<body>
    <h1>Product Discount Calculator Application</h1>
  
        <form >
            <label for="">Product description :</label>
            <input type="text"  value="{{$description}}" readonly>
            <br>
            <label for="">List price :</label>
            <input type="number" value="{{$price}}" min="=0" readonly>
            <br>
            <label for="">Discount Percent :</label>
            <input type="number" value="{{$discountPercent}}" readonly>
            <br>
            <label for="">Discount Amount :</label>
            <input type="number" value="{{$discountAmount}}" readonly>
            <br>
            <label for="">Discount Price :</label>
             <input type="number" value="{{$discountPrice}}" readonly >
           
        </form>

   
</body>
</html>