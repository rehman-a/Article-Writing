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

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center h-90">
                <div class="col-10 col-md-8 col-lg-6 col-xl-5 card p-5 ">
                    <div class="row p-3">
                        <h1 class= "fundsHeading">Add funds to your account</h1>
                    </div>
                    <div class="row p-3 pb-1">
                        <h1 class= "fundsHeading-input">Name on card</h1>
                    </div>
                    <div class="row p-3">
                        <input class = "input-data-card"type="text" name = "nameOnCard" placeholder = "John Harper">
                    </div>
                    <div class="row p-3 pb-1">
                        <h1 class= "fundsHeading-input">Card Number</h1>
                    </div>
                    <div class="row">
                        
                        <div class="col-12 col-sm-8 col-md-8">
                            <input class = "input-data-card"type="text" name = "nameOnCard" placeholder = "xxxx-xxxx-xxxx-xxxx">

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
                                <h1 class= "fundsHeading-input">CVC</h1>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 pl-0">
                                <input class = "input-data-card"type="text" name = "nameOnCard" placeholder = "xxx">

                            </div>

                        </div>
                        <div class="col-12 col-sm-4 col-md-5">
                            <div class="row p-3 pb-1">
                                <h1 class= "fundsHeading-input">Expiration</h1>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 pl-0">
                                <input class = "input-data-card"type="text" name = "nameOnCard" placeholder = "03-2027">

                            </div>

                        </div>
                        <div class="col-12 col-sm-4 col-md-3">
                            <div class="row p-3 pb-1">
                                <h1 class= "fundsHeading-input">Amount</h1>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 pl-0 pr-0">
                                <input class = "input-data-card"type="text" name = "nameOnCard" placeholder = "$10">

                            </div>

                        </div>

                    </div>
                    <div class="row pt-5" >
                        <div class="col-12 col-md-12 text-right">
                            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3">
                                <a href="{{ route('login') }}">
                                    <span class="pr-1">Proceed</span>
                                </a>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

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