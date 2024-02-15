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

        <div class="cen-box">
            <div class="box-det">
                <h3>Product details</h3>

                <div class="form-group mt-3">
                    <label for="exampleInputField">Product Name</label> <br>
                    <p>{{ $product->name }}</p>
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputField">Product Description</label> <br>
                    <p>{{ $product->description }}</p>
                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputField">Price</label> <br>
                    <p>Rs. {{ $product->price }}</p>

                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputField">Quantity</label> <br>
                    <p>{{ $product->stock_quantity }}</p>

                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button class="edit-btn" type="submit"><a
                            href="{{ url('/updateform/' . $product->id) }}">Edit</a></button>
                    <form action="{{ url('/api/products/' . $product->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="del-btn">Delete</button>
                    </form>
                </div>

            </div>
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
