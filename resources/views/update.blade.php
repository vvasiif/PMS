<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PMS</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css"
        integrity="sha512-ZuRTqfQ3jNAKvJskDAU/hxbX1w25g41bANOVd1Co6GahIe2XjM6uVZ9dh0Nt3KFCOA061amfF2VeL60aJXdwwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="antialiased">
    <div class="container">
        <div class="nav-bar">

          
            <div class="">
                <a href="/api/products">
                    <h4>PMS</h4>
                </a>
            </div>

            <div class="d-flex justify-center">
                <h4 class="mx-3">{{ Auth::user()->name }}</h4>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf <!-- CSRF protection for Laravel -->
                    <button class="logout-btn" type="submit">
                        <h4>Log out</h4>
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-5">
            <a class="add-btn" href="/api/products">Products list</a>
        </div>

        <div class="cen-form">
            <form action="{{ url('/') }}/api/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <h3>Edit Product</h3>
        
                <div class="form-group mt-3">
                    <label for="exampleInputField">Product Name</label> <br>
                    <input class="mt-1" name="name" type="text" class="form-control" id="exampleInputField" value="{{ $product->name }}" required>
                </div>
        
                <div class="form-group mt-3">
                    <label for="exampleInputField">Product Description</label> <br>
                    <textarea name="description">{{ $product->description }}</textarea>
                </div>
        
                <div class="form-group mt-3">
                    <label for="exampleInputField">Price</label> <br>
                    <input class="mt-1" name="price" type="number" class="form-control" id="exampleInputField" value="{{ $product->price }}" required>
                </div>
        
                <div class="form-group mt-3">
                    <label for="exampleInputField">Quantity</label> <br>
                    <input class="mt-1" name="quantity" type="number" class="form-control" id="exampleInputField" value="{{ $product->stock_quantity }}" required>
                </div>
        
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit">Save</button>
                 
                </div> 

            </form>
          
        </div>
        
    </div>


    </form>
    </div>
    </div>



    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
