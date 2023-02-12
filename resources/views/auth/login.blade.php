<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/Style/login.css">

    <title>Document</title>
</head>

<body>

    @if (session()->has('loginEror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginEror') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


    <div class="container">
        <div class="card">
            <form action="/login" method="POST">
                @csrf
                <h1 class="d-flex justify-content-center">Please Login</h1>
                <!-- password input -->
                <div class="form-outline mb-4 mt-5">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com"
                        class="form-control" value="{{ Session::get('email') }}" />
                    {{-- @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror --}}
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    {{-- <input type="password @error('password') is-invalid @enderror" id="password" class="form-control"
                        name="password" /> --}}
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                checked />
                            <label class="form-check-label" for="form2Example31">Ingat saya </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Lupa password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="d-flex justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4"
                        style="width: 15vw">Sign in</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Belum punya akun? <a href="#!">Register</a></p>

                </div>
            </form>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
