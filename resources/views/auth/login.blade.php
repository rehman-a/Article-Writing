<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">

    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Libre+Baskerville&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&family=Lexend+Deca:wght@100;300&family=Outfit:wght@200;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title>Signin Page</title>
</head>

<body>
    @include('user.nav')


<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('images/LOGO.png') }}" alt="My Logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="container signin-page">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row placeOrder pt-3 pb-3 mt-2 mb-2 text-center">
                                    <h2 class="pt-3 pb-2">Signin</h2>
                                </div>
                                <div class="form-group">
                                    <x-label for="email" value="{{ __('Email') }}" />
                                    <x-input id="email" class="input-field-order" type="email" name="email" :value="old('email')" required autofocus placeholder="abc123@gmail.com" />
                                </div>
                                <div class="form-group">
                                    <x-label for="password" value="{{ __('Password') }}" />
                                    <x-input id="password" class="input-field-order" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                                </div>
                                <x-button class="navbtn p-2 pl-3 pr-3 bl-3 br-3 text-end">
                                    <span class="pr-1">{{ __('Signin') }}</span>
                                    <img src="/images/arrow_right_alt.png" width="10" height="10">
                                </x-button>

                            </div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3" href="{{ route('register') }}">
                                    {{ __('New User? Join Now') }}
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
@include('user.footer')
</body>
</html>