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
    <h1>Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>      
        @endif
    </div>

    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label> 
            <div class="col-sm-10">
            <input type="text" name="name" placeholder="Name"/></div>
      </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10"><input type="text" name="qty" placeholder="Quantity"/></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10"><input type="text" name="price" placeholder="Price"/></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10"><input type="text" name="description" placeholder="Description"/></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
            <button type="submit" class="btn btn-primary" value="Save a New Product" >Save a New Product</button>
        </div>
        </div>
    </form>
</body>
</html>