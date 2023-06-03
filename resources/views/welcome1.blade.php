<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Document</title>
</head>
<body>
    @include('user.nav')
    
    <div class="container-fluid">

    <div class="container">
    @include('user.section1')
    </div>


    </div>
    
    <div class="container">
    @include('user.section2')

    </div>
    
    
    @include('user.placeOrder')
    
    @include('user.whyUs')
    
    
    @include('user.sub')
    
    @include('user.about')
    
    @include('user.footer')
   
    
</body>
</html>