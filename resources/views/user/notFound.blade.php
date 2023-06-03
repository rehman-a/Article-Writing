<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>404 Not Found</title>
</head>

<body>
    @include('user.nav')

    <div class="container">
        <div class="row mt-2 pt-2">
            <div class="col-sm-12 col-md-12 text-center">
                <img src="/images/404 Error-pana 1.png" width="80%" height="auto">

            </div>

        </div>
        <div class="row pt-2">
            <div class="col-sm-12 col-md-12 text-center">
                <h2 class="pt-2 pb-2">Something Went Wrong...!</h2>

            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                <p class="aboutValues">
                    Sorry We couldn't find what you're looking for.
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 text-center">
                <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3 "><span class="pr-1">Go Back</span> </button>
            </div>
        </div>
        
    </div>

    

    @include('user.footer')
</body>



