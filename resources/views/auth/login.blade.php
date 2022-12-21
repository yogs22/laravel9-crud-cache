<!doctype html>
<head>
    @extends('layout.header', ['title' => 'Login'])
</head>
<body>
    <section class="sign-in mx-auto">
        <div class="row h-100 d-flex align-items-center justify-content-center">
            <div class="col-md-4">
                <form method="post" action="{{ route('auth.authenticate') }}">
                    @csrf
                    <div class="container mx-auto">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">
                            Let's Get Started
                        </h2>
                        <p class="text-lg color-palette-1 m-0">
                            Please log in to continue accessing app.
                        </p>

                        <div class="pt-50">
                            <label
                                for="email"
                                class="form-label text-lg fw-medium color-palette-1 mb-10"
                            >Email</label>
                            <input
                                id="email"
                                type="text"
                                class="form-control rounded-pill text-lg @error('email') is-invalid @enderror"
                                name="email"
                                aria-describedby="email"
                                placeholder="Enter your email"
                                value="{{ old('email') }}"
                                required
                            >
                        </div>
                        <div class="pt-30">
                            <label
                                for="password"
                                class="form-label text-lg fw-medium color-palette-1 mb-10"
                            >Password</label>
                            <input
                                id="password"
                                type="password"
                                class="form-control rounded-pill text-lg @error('password') is-invalid @enderror"
                                name="password"
                                aria-describedby="password"
                                placeholder="Enter your password"
                                required
                            >
                        </div>
                        <div class="button-group d-flex flex-column mx-auto pt-10 mt-3">
                            <button
                                id="login"
                                type="submit"
                                class="btn btn-primary btn-round btn-sign-in"
                                role="button"
                            >
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')
</body>
