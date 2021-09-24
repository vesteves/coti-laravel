<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Product;

class ForwardedOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $product;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Product $product)
    {
        $this->user = $user;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('professor@cotiinfomatica.com.br', 'Professor Coti')->view('email.forwarded-order', [
            "product" => $this->product,
            "user" => $this->user
        ]);
    }
}
