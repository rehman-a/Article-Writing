<div class="col-md-8">
    <div class="row mt-5 pt-5 pl-5">
        <div class="col-md-10">
            
            <h1 class="dashbaord-heading pt-2">Payments</h1>

        </div>
        <div class="col-md-2 justify-content-center" style="text-align: center;"><a href="{{ route('addFunds') }}">
            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3"><img src="/images/add.png" width="10" height="10"><span class="pr-1 pl-2">Add Funds</span></a></button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-md-5 card-borders m-1">
                        <div class="row p-4">
                            <div class="col-sm-12">
                                <div class="row pt-2 active-orders">
                                    <h5>Available Balance</h5>
                                </div>
                                <div class="col-sm-3 pt-3 pl-1 active-orders-numbers">
                                <h1>$127</h1>
                                </div>
                                <div class="row pt-2 active-orders">
                                    <div class="col-8">
                                        <h5>**** **** **** 1234</h5>
                                    </div>
                                    <div class="col-4">
                                        <img src="/images/Mastercard.png">
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        

                    </div>


                </div>
                <div class="row pt-3 mt-3">
                    <table class="table table-striped">
                        <thead class="table-head">
                            <tr>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Order ID</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->transaction_id }}</th>
                        <td>{{ $order->orderID }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ $order->account_name }}</td>
                        <td>{{ $order->date }}</td>
                        <td>
                            @php
                            $status = $order->status;
                            $dotColor = '';

                            if ($status === 'active' || $status === 'Active' ) {
                                $dotColor = 'green';
                            } elseif ($status === 'complete' || $status === 'Complete') {
                                $dotColor = 'blue';
                            } elseif ($status === 'declined' || $status === 'Declined'|| $status === 'cancelled') {
                                $dotColor = 'red';
                            }
                            elseif ($status === 'pending' || $status === 'Pending') {
                                $dotColor = 'yellow';
                            }

                            @endphp
                            <span style="display: inline-block; width: 10px; height: 10px; background-color: {{ $dotColor }}; border-radius: 50%;"></span>
                            {{ $status }}
                        </td>
                    </tr>
                    @endforeach
                            
                        </tbody>
                    </table>



                </div>
            </div>
            



        </div>
    </div>
</div>