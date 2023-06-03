
<div class="col-md-8">
    <div class="row mt-5 pt-5 pl-5">
        <div class="col-md-10">
            
            <h1 class="dashbaord-heading pt-2">Dashboard</h1>

        </div>
        <div class="col-md-2 justify-content-center" style="text-align: center;"><a href="{{ route('newOrder') }}">
            <button class="navbtn p-2 pl-3 pr-3 bl-3 br-3"><img src="/images/add.png" width="10" height="10"><span class="pr-1 pl-2">Place Order</span></a></button>
        </div>
    </div>
    <hr>
    <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <div class="row">
            <div class="col-md-3 card-borders m-2">
                <div class="row p-5">
                    <div class="col-sm-8">
                        <div class="row">
                            <img src="/images/frame45(1).png" alt="logo" width = "auto" height = "auto">
                        </div>
                        <div class="row pt-2 active-orders">
                            <h5>Active Orders</h5>
                        </div>

                    </div>
                    <div class="col-sm-3 pt-3 active-orders-numbers">
                        <h1>{{ str_pad($activeOrdersCount, 2, '0', STR_PAD_LEFT) }}</h1>
                        
                    </div>
                </div>
                

            </div>
            <div class="col-md-3 card-borders m-2">
                <div class="row p-5">
                    <div class="col-sm-8">
                        <div class="row">
                            <img src="/images/Frame 46.png" alt="logo" width = "auto" height = "auto">
                        </div>
                        <div class="row pt-2 active-orders">
                            <h5>Draft Orders</h5>
                        </div>

                    </div>
                    <div class="col-sm-3 pt-3 active-orders-numbers">
                        <h1>{{ str_pad($pendingOrdersCount, 2, '0', STR_PAD_LEFT) }}</h1>
                        
                    </div>
                </div>
                

            </div>
            <div class="col-md-5 card-borders m-2">
                <div class="row p-5">
                    <div class="col-sm-8">
                        <div class="row">
                            <img src="/images/Frame 45.png" alt="logo" width = "auto" height = "auto">
                        </div>
                        <div class="row pt-2 active-orders">
                            <h5>Available Balance</h5>
                        </div>

                    </div>
                    <div class="col-sm-3 pt-3 active-orders-numbers">
                        <h1>$127</h1>
                    </div>
                </div>
                

            </div>
        </div>
        <div class="row pt-3">
            <table class="table table-striped">
                <thead class="table-head">
                    <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">No. of Words</th>
                    <th scope="col">Niche</th>
                    <th scope="col">Title</th>
                    <th scope="col">Deadline</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->id }}</th>
                        <td>{{ $order->totalWords }}</td>
                        <td>{{ $order->niche }}</td>
                        <td>{{ $order->title }}</td>
                        <td>{{ $order->deadline }}</td>
                        <td>
                            @php
                            $status = $order->orderstatus;
                            $dotColor = '';

                            if ($status === 'active' || $status === 'Active' ) {
                                $dotColor = 'green';
                            } elseif ($status === 'complete' || $status === 'Complete') {
                                $dotColor = 'blue';
                            } elseif ($status === 'canceled' || $status === 'Canceled'|| $status === 'cancelled') {
                                $dotColor = 'red';
                            }
                            elseif ($status === 'pending' || $status === 'Pending') {
                                $dotColor = 'yellow';
                            }

                            @endphp
                            <span style="display: inline-block; width: 10px; height: 10px; background-color: {{ $dotColor }}; border-radius: 50%;"></span>
                            {{ $status }}
                        </td>
                        <td>
                        @if ($status !== 'active' && $status !== 'Active')
                        <form action="{{ url('/makePayment/'.$order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary p-1" style="border-radius: 4px;">Pay</button>

                        </form>
                        @endif

                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>