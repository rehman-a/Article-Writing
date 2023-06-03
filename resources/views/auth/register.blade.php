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
    <title>Signup Page</title>
</head>

<body>
     @include('user.nav')
    <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('images/my-logo.png') }}" alt="My Logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row placeOrder pt-3 pb-3 mt-2 mb-2 text-center">
                            <h2 class="pt-5 pb-2">Signup</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <x-label for="name" value="{{ __('First Name') }}" />
                                <x-input id="name" class="input-field-order" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter First Name" />
                            </div>
                            <div class="col-md-6">
                                <x-label for="last_name" value="{{ __('Last Name (Optional)') }}" />
                                <x-input id="last_name" class="input-field-order" type="text" name="last_name" :value="old('last_name')" placeholder="Enter Last Name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3 mt-3">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="input-field-order" type="email" name="email" :value="old('email')" required placeholder="abc123@gmail.com" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3 mt-3">
                                <x-label for="phone" value="{{ __('Phone Number') }}" />
                                <x-input id="phone" class="input-field-order" type="phone" name="phone" :value="old('phone')" required placeholder="+123456789" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3 mt-3">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="input-field-order" type="password" name="password" required autocomplete="new-password" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pt-3 mt-3 mb-5">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-input id="password_confirmation" class="input-field-order" type="password" name="password_confirmation" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <x-button class="navbtn p-2 pl-3 pr-3 bl-3 br-3 text-end">
                                    <span class="pr-1">{{ __('Register') }}</span>
                                    <img src="/images/arrow_right_alt.png" width="10" height="10">
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </x-authentication-card>
</x-guest-layout>

</body>
 @include('user.footer')
</html>