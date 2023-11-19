@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

>>>>>>> eb68209 (Video 15 : User Registration)
>>>>>>> ee80837 (Video 15 : User Registration)
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
<<<<<<< HEAD
               </form>
               <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
=======
<<<<<<< HEAD
               </form>
               <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
=======
                </form>
                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
>>>>>>> eb68209 (Video 15 : User Registration)
>>>>>>> ee80837 (Video 15 : User Registration)
            </main>
        </div>
    </div>
@endsection
