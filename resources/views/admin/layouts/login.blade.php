<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/app.min.css">
    <link rel="stylesheet" href="{{asset('assets') }}/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{asset('assets') }}/css/components.css">
    <!-- Custom style CSS -->
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets') }}/images/logo.svg">
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-2">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand login-brand-color">
                            <img alt="image" src="{{asset('assets') }}/images/logo.svg"/>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-auth">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="{{ route('password.request') }}" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-block btn-auth-color" tabindex="2">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-0 text-muted text-center">
                            Don't have an account? <a href="admin/register">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{asset('assets') }}/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{asset('assets') }}/js/scripts.js"></script>

</body>

</html>