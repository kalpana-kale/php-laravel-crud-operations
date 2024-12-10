<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>      
        @endif
    </div>

    <form method="post" action="{{route('product.update', ['product' => $product] )}}">
        @csrf
        @method('put')
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label> 
            <div class="col-sm-10">
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/></div>
      </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10"><input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}"/></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10"><input type="text" name="price" placeholder="Price" value="{{$product->price}}"/></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10"><input type="text" name="description" placeholder="Description" value="{{$product->description}}"/></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" value="update" >Update</button>
        </div>
        </div>
    </form>
</body>
</html>