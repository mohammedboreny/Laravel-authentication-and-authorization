<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Rigister</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="theme-color" content="#7952b3">


    <!-- Custom styles for this template -->
</head>

<body class="text-center" data-new-gr-c-s-check-loaded="14.1084.0" data-gr-ext-installed="">
    <div class="container col-3-9">
        <main class="form-signin">
            <form method="POST" action="/register">
                @csrf
                <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72"
                    height="57">
                <h1 class="h3 mb-3 fw-normal">Please signup in</h1>
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput"
                        placeholder="name@example.com" value="{{ old('name') }}">
                    <label for="floatingInput">username</label>
                </div>
                @error('name')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input type="email" name='email' class="form-control" id="floatingInput"
                        placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="floatingInput">Email address</label>
                </div>
                @error('email')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword"
                        placeholder="Password" value="{{ old('password') }}">
                    <label for="floatingPassword">Password</label>
                </div>
                @error('password')
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
                {{-- <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Re-Password</label>
                </div> --}}
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
    </div>

    </main>





</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>
