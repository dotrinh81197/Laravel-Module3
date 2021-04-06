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

        <form action="/" method = "POST" >
            @csrf
            <input type="text" placeholder="Description" name="productDescription">
            <input type="number" placeholder="List Price" min="=0" name="price">
            <input type="number" placeholder="Discount Percent" min="0" step="0.1" name="discountPercent">
            <button type="submit" value="">Calculate Discount</button>
        </form>

   
</body>
</html>