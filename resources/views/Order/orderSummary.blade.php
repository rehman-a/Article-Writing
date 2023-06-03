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
            <div class="row d-flex justify-content-center h-80">
                <div class="col-10 col-md-10 col-lg-8 col-xl-7 card p-4 ">
                    <div class="row p-3">
                        <div class="col-sm-8 col-md-8 text-left">
                            <h1 class= "fundsHeading">Order Summary</h1>
                        </div>
                        <div class="col-sm-4 col-md-4 text-right">
                            <img src="/images/border_color.png" width="auto" height="auto">
                            
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Subject</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>Subject Name</h1>
                            
                        </div>
                    </div>

                    <!-- 2nd row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Topic</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>Topic Name</h1>
                            
                        </div>
                    </div>
                    <!-- 3rd Row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>No.of Words</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>500</h1>
                            
                        </div>
                    </div>
                    <!-- 4th Row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Deadline</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>05-06-2023</h1>
                            
                        </div>
                    </div>

                    <!-- 5th Row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Attached Files</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>File</h1>
                            
                        </div>
                    </div>
                    <!-- 6th Row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Detailed Instructions</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipiscing elit,.</h1>
                            
                        </div>
                    </div>
                    <!-- 7th Row -->
                    <div class="row p-3">
                        <div class="col-4 col-md-4 text-left ">
                            <h1 class='left-summary'>Order Status</h1>

                        </div>
                        <div class="col-8 col-md-8 text-left">
                            <h1 class = 'right-summary'>Completed</h1>
                            
                        </div>
                    </div>

                    <div class="row p-3 justify-content-center">
                        <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3">
                            <a href="{{ route('login') }}" style="color: black;">
                                <span class="pr-1">Download Article</span>
                            </a>
                        </button>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>



    @include('user.footer')
    
</body>
</html>