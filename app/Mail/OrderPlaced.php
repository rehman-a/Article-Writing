<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Attachment;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public Order $order;


    /**
     * Create a new message instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }
    public function build()
    {
    return $this->subject('Order Details')->view('emails.order_placed');
    }

    /**
     * Get the message envelope.
     */
    

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [
    //        Attachment::fromPath('https://mailtrap.io/wp-content/uploads/2021/04/mailtrap-new-logo.svg')
    //             ->as('logo.svg')
    //             ->withMime('image/svg+xml'),
    //     ];

    // }
    public function attachments(): array
{
    $fileName = $this->order->file;

    // Get the file path
    $filePath = storage_path('app/uploads/' . $fileName);

    return [
               Attachment::fromPath($filePath)
                    ->as($fileName)
                    ->withMime('application/pdf'),
            ];
    
}
        
}
