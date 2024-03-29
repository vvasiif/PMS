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

<body class="">
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
            <a class="add-btn" href="/addform">Add new product</a>
        </div>
        <div class="mt-3 mb-3">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="/api/products/{{ $product->id }}" class="product-link">
                        <div class="product-card mt-3">
                            <h4>Product Id: {{ $product->id }}</h4>
                            <h2 class="mt-2">{{ $product->name }}</h2>
                            <p class="product-description">{{ substr($product->description, 0, 50) }}...</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <h5>Rs. {{ $product->price }}</h5>
                                <div>
                                    <h5><strong>Quantity: </strong> {{ $product->stock_quantity }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>



    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
