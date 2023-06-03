<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Existing methods...

    public function dashboard()
    {
        
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        $amount = Payment::where('user_id', $user->id)->get();
        $activeOrdersCount = Order::where('user_id', $user->id)
        ->where('orderstatus', 'active')
        ->count();
        $pendingOrdersCount = Order::where('user_id', $user->id)
        ->where('orderstatus', 'pending')
        ->count();

        //dd($activeOrdersCount);

        return view('userPanel.sidepanel', compact('user', 'orders', 'activeOrdersCount','pendingOrdersCount', 'amount'));
        //return view('userPanel.sidepanel', compact('user'));
    }

    public function myOrders()
    {
        
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        $activeOrdersCount = Order::where('user_id', $user->id)
        ->where('orderstatus', 'active')
        ->count();
        $pendingOrdersCount = Order::where('user_id', $user->id)
        ->where('orderstatus', 'pending')
        ->count();
        $canceledOrdersCount = Order::where('user_id', $user->id)
        ->where('orderstatus', 'canceled')
        ->count();

        //dd($activeOrdersCount);

        return view('userPanel.sidepanel', compact('user', 'orders', 'activeOrdersCount','pendingOrdersCount','canceledOrdersCount'));
        

        //return view('user.dashboard', compact('user', 'orders'));
        
    }

    public function payments()
{
    
    $user = Auth::user();
    $orders = Payment::where('user_id', $user->id)->get();
    

    return view('userPanel.sidepanel', compact('user', 'orders'));
}


    public function orderInfo(Request $request)
{
    
    $user = auth()->user();

    $uniqueOrderID = Str::uuid()->toString();
    
    // Create a new Order instance
    $order = new Order();
    $order->user_id = $user->id;
    //$order->orderID = $uniqueOrderID; // You can define your own function to generate a unique order ID
    $order->title = $request->input('topic');
    $order->niche = $request->input('subject');
    $order->totalWords = $request->input('pageCount');
    $order->description = $request->input('instructions');

    $order->deadline = $request->input('deadline');
    $order->orderstatus = 'Pending'; // Set the initial order status as needed
    
    // Save the order to the database
    

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $uniqueName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('uploads', $uniqueName);
        
        // Store the unique file name in the order
        $order->file = $uniqueName;
        // $order->save();
    }
    $order->save();

    // dd($subject, $topic, $instructions, $deadline, $pages , $uniqueName);

    //Mail::send(new OrderPlaced($order));
    $orderID = $order->id;
    
    
    //$this->sendOrderConfirmationMail($order);
    

    // Return a response with the data
    return redirect()->back()->with('success', 'Order info received');

}
    public function settings(){
        $user = Auth::user();
        $userData = User::find($user->id);
        $sessions = Session::where('user_id', $user->id)->get();
        

        return view('userpanel.sidepanel',compact('user', 'userData', 'sessions'));
    }

    public function orderPayment(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nameOnCard' => 'required|string',
            'cardNumber' => 'required|string',
            'cvc' => 'required|digits:3',
            'expiration' => 'required|string',
            'amount' => 'required|numeric',
        ]);
    
        // Generate a transaction ID
        $transaction_id = Str::uuid()->toString();
        $orderID = $request->orderID;
        
        //$payment->orderID = $request->orderID;

    
        // Create a new Payment instance and assign values
        $payment = new Payment();
        $payment->user_id = auth()->user()->id; // Assuming you have authentication setup
        $payment->amount = $validatedData['amount'];
        $payment->orderID = $request->orderID;
        
        $payment->account_name = $validatedData['nameOnCard'];
        $payment->card_number = $validatedData['cardNumber'];
        $payment->date = now();
        $payment->status = 'pending';
        $payment->transaction_id = $transaction_id;
        //dd($payment);
        
        $payment->save();
        
    
        // Redirect to a success page or perform any further actions
    
        // Optionally, you can return a response
        return redirect()->route('dashboard')->with('success', 'Payment being processed');
    }


    // Function to send email
    public function sendOrderConfirmationMail($order){
        //dd($order);
        if (!empty($order)) {
            
            Mail::to("admin@gmail.com")->send(new OrderPlaced($order));
        }
        
    }


    public function makePaymentOrder(Request $request, $id)
    {
        $orderID = $id;
        $order = Order::find($orderID);
        // dd($orderID);

        // Rest of your code...

        return view('order.makePayment', ['orderID' => $orderID]);
    }


}
