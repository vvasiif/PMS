<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PMS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap-grid.min.css"
        integrity="sha512-ZuRTqfQ3jNAKvJskDAU/hxbX1w25g41bANOVd1Co6GahIe2XjM6uVZ9dh0Nt3KFCOA061amfF2VeL60aJXdwwQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->

</head>

<body class="antialiased">
    <div class="container">
        <div class="nav-bar">


            <div class="">
                <a href="/">
                    <h4>PMS</h4>
                </a>
            </div>
            @if (Route::has('login'))
                <div class="nav-li">

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">
                            <h4>Register</h4>
                        </a>
                    @endif
                </div>
            @endif

        </div>

        <div class="cen-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Log in</h3>

                <div class="form-group mt-3">
                    <label for="exampleInputEmail">E-mail</label><br>
                    <input class="mt-1" autofocus name="email" type="email" class="form-control"
                        id="exampleInputEmail" required>

                </div>

                <div class="form-group mt-3">
                    <label for="exampleInputPassword">Password</label><br>
                    <input class="mt-1" name="password" type="password" class="form-control" id="exampleInputPassword"
                        required>

                </div>

                @error('email')
                    <p class="err-msg">{{ $message }}</p>
                @enderror
                @error('password')
                    <p class="err-msg">{{ $message }}</p>
                @enderror

                <button class="mt-4" type="submit">Log in</button>
            </form>

        </div>


    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"
        integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
