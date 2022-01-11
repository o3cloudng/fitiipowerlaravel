<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:15 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Login - FitiiPower</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: 0.75rem;
          }
          .bg-gradient {
            background-color: #FE9A2E !important;
            background-image: linear-gradient(135deg, #df7a0e 0%, rgba(105, 0, 199, 0.8) 100%) !important;
        }
          
          .login,
          .image {
            min-height: 100vh;
          }
          
          .bg-image {
            background-image: url('/img/fitiiPower-black.jpeg');
            background-size: cover;
            background-position: center;
          }
          
          .login-heading {
            font-weight: 300;
          }
          
          .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 2rem;
          }
          
          .form-label-group {
            position: relative;
            margin-bottom: 1rem;
          }
          
          .form-label-group>input,
          .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
            height: auto;
            border-radius: 2rem;
          }
          
          .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            cursor: text;
            /* Match the input under the label */
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
          }
          
          .form-label-group input::-webkit-input-placeholder {
            color: transparent;
          }
          
          .form-label-group input:-ms-input-placeholder {
            color: transparent;
          }
          
          .form-label-group input::-ms-input-placeholder {
            color: transparent;
          }
          
          .form-label-group input::-moz-placeholder {
            color: transparent;
          }
          
          .form-label-group input::placeholder {
            color: transparent;
          }
          
          .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
          }
          
          .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
          }
          
          /* Fallback for Edge
          -------------------------------------------------- */
          
          @supports (-ms-ime-align: auto) {
            .form-label-group>label {
              display: none;
            }
            .form-label-group input::-ms-input-placeholder {
              color: #777;
            }
          }
          
          /* Fallback for IE
          -------------------------------------------------- */
          
          @media all and (-ms-high-contrast: none),
          (-ms-high-contrast: active) {
            .form-label-group>label {
              display: none;
            }
            .form-label-group input:-ms-input-placeholder {
              color: #777;
            }
          }
    </style>
</head>

<body class="nav-fixed">
    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image">
            <!-- <img src="/static/fitiiPower-white.jpeg" alt="FitiiPower"> -->
          </div>
          <div class="col-md-8 col-lg-6 bg-gradient">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                   

<div class="card">
    <div class="card-body">
        <center><img src="/static/logo_black.jpg" class="mx-auto my-3" alt=""></center>
        <center><h3 class="login-heading mb-4">Login</h3></center>
        
        {{-- <form method="post" novalidate>
            <input type="hidden" name="csrfmiddlewaretoken" value="7GdoXpUdFS07T6eP0QmDlCN6a1byJjWuNQFXpdF3PAWwQvwTW1m9hnOiZin3S9I1">
            
            <div class="form-group col-md-12">
                <label for="id_username">Email</label>
                <input type="text" name="username" autofocus autocapitalize="none" autocomplete="username" maxlength="60" class="form-control" required id="id_username">
                
            </div>
            
            <div class="form-group col-md-12">
                <label for="id_password">Password</label>
                <input type="password" name="password" autocomplete="current-password" class="form-control" required id="id_password">
                
            </div>
            
            <div class="form-group col-md-12">
                <button type="submit" class="btn-sm btn-warning btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i>
                     Sign in</button>
            </div>
        </form> --}}
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <!-- Email Address -->
          <div>
              <x-label for="email" :value="__('Email')" />

              <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
          </div>

          <!-- Password -->
          <div class="mt-4">
              <x-label for="password" :value="__('Password')" />

              <x-input id="password" class="form-control"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
          </div>

          <!-- Remember Me -->
          <div class="block mt-4">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                  <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
              </label>
          </div>

          <div class="flex items-center justify-end mt-4">
              @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif

              <x-button class="ml-3 btn-sm btn-warning btn-block">
                  {{ __('Log in') }}
              </x-button>
          </div>
      </form>
        
    </div>
</div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:58 GMT -->

</html>

