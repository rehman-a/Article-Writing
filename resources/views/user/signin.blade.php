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

    <div class="container  signin-page mt-5 ">
    <div class="row justify-content-center mt-3">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
                <div class="row placeOrder pt-3 pb-3 mt-2 mb-2 text-center">
                    <h2 class="pt-3 pb-2">Signin</h2>
                </div>
            <form>
              <div class="form-group">
                    <span class="order-form justify-content-left m-3 p-3">Email</span>
                        <div class="pt-2">
                            <input type="email" class="input-field-order" placeholder="abc123@gmail.com">
                        </div>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
              </div>
              <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3 text-end"><span class="pr-1">Signin </span>  <img src="/images/arrow_right_alt.png" width="10" height="10"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    @include('user.footer')
</body>



