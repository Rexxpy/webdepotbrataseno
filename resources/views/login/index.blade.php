@extends('layouts.mainlogin')

@section('container')

    <style>
        .img{
            text-align: center;
        }
        a:link {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
        a:hover {
            color: rgb(66, 66, 66);
            background-color: transparent;
            text-decoration: none;
        }

        a:active {
            color: #fae100;
            background-color: transparent;
            text-decoration: none;
        }
    </style>


    <div class="img mt-5">
        <img class="mb-3" src="../image/Asset 2.png" alt="" width="10%">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center text-light"><strong>Login</strong></h1>
                <form action="/login" method="POST">
                 @csrf
                    <div class="form-floating">
                    <input type="email" class="form-control" name="email" @error('email') is-invalid @enderror id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                    </div>
                    <button class="w-100 btn btn-lg  btn-outline-warning" type="submit">
                        Log in</button>
                </form>
            </main>
        </div>
    </div>
 
@endsection

