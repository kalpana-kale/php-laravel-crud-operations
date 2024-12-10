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
    <h1>Products</h1>
    <div>
        @if(@session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <table class="table table-dark" border="2">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td scope="row">{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('product.edit',['product'=> $product])}}">Edit</a></td>

                <td>
                    <form method="post" action="{{route('product.delete',['product'=> $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value='Delete'/>
                    </form>

                </td>
            </tr>
            @endforeach
        </table>
        <div>
            <a href="{{route('product.create')}}" class="btn btn-success">Create a Product</a>
        </div>
    </div>
</body>
</html>