@extends('layouts.appp')
@section('content')

<section class="bg-home bg-circle-gradiant d-flex align-items-center">
    <div class="bg-overlay bg-overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @error('email')
                {{ $message }}
                @enderror
                @error('password')
                {{ $message }}
                @enderror
            </div>
            <div class="col-12">
                <div class="card form-signin p-4 rounded shadow">
                    <form action="{{ route('login') }}" method="post">
                        <a href="/"><img src="assets/images/logo-icon.png" class="avatar avatar-small mb-4 d-block mx-auto" alt=""></a>
                        <h5 class="mb-3 text-center">Please sign in</h5>
@csrf
                        <div class="form-floating mb-2">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div> <!--end container-->
</section>

@endsection
