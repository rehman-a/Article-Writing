<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
</head>
<body>
    
    <p>Your order has been successfully placed.</p>
    <p>Following are the order details:<br/></p>
    <h3>Title: {{$order->title}} </h3>
    <h3>Niche: {{$order->niche}} </h3>
    
    <h3>Total Pages: {{$order->totalWords}} </h3>
    <h3>Description:  </h3>
    <p>{{$order->description}}</p>

    <h4>For More details, see the attached File</h4>
    


    <br/>
    
</body>
</html>