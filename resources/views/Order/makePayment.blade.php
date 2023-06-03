<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('head')
    <title>Document</title>
</head>
<body>
    @include('user.nav')


            <div class="container p-5">
            @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
            @endif
                <form id="payment-form" method="POST" action="/orderPayment">
                    @csrf
                    <input type="hidden" name="orderID" value="{{ $orderID }}">

                    <div class="row">
                        <div class="col-md-7">
                            <div class="row p-3 pb-1">
                                <h1 class="fundsHeading-input">Name on card</h1>
                            </div>
                            <div class="row p-3">
                                <input class="input-data-card" type="text" name="nameOnCard" placeholder="John Harper" required>
                            </div>
                            <div class="row p-3 pb-1">
                                <h1 class="fundsHeading-input">Card Number</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-8 col-md-8">
                                    <input class="input-data-card" type="text" pattern="[0-9]{16}" name="cardNumber" placeholder="xxxx-xxxx-xxxx-xxxx" required>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="dropdown input-data-card">
                                        <button class="dropbtn">
                                            <img src="/images/Vector.png" width="50px" height="auto" id="selectedImage">
                                        </button>
                                        <div class="dropdown-content">
                                            <img src="/images/Mastercard.png" width="50px" height="auto" onclick="selectImage('/images/Mastercard.png')">
                                            <img src="/images/Vector.png" width="50px" height="auto" onclick="selectImage('/images/Vector.png')">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="row p-3 pb-1">
                                        <h1 class="fundsHeading-input">CVC</h1>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 pl-0">
                                        <input class="input-data-card" type="text" pattern="[0-9]{3}" name="cvc" placeholder="xxx" required>

                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-5">
                                    <div class="row p-3 pb-1">
                                        <h1 class="fundsHeading-input">Expiration</h1>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 pl-0">
                                        <input class="input-data-card" type="text" name="expiration" placeholder="03-2027" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4 col-md-3">
                                    <div class="row p-3 pb-1">
                                        <h1 class="fundsHeading-input">Amount</h1>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 pl-0 pr-0">
                                        <input class="input-data-card" type="number" name="amount" placeholder="$10" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <img src="/images/Plain credit card-rafiki 1.png">
                        </div>
                    </div>
                    <div class="row p-3 justify-content-center">
                        <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3" type="submit">
                            <span class="pr-1">Finish</span>
                        </button>
                    </div>
                </form>

       
            </div>
        


        <script>
    function selectImage(imageUrl) {
        var selectedImage = document.getElementById('selectedImage');
        var dropdownImages = document.getElementsByClassName('dropdown-content')[0].getElementsByTagName('img');
        
        // Reset all dropdown images to non-selected state
        for (var i = 0; i < dropdownImages.length; i++) {
            dropdownImages[i].classList.remove('selected');
        }
        
        // Set the selected image
        selectedImage.src = imageUrl;
        
        // Add 'selected' class to the clicked image
        var clickedImage = event.target;
        clickedImage.classList.add('selected');
    }
</script>


    @include('user.footer')
    
</body>
</html>