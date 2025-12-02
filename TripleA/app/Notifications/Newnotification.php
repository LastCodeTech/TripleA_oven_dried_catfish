<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Newnotification extends Notification
{
    use Queueable;
    public $code;

    /**
     * Create a new notification instance.
     */
    // public function __construct($codeValue)
    // {
    //     $this->code=$codeValue;
    // }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
           ->subject(' Welcome to Triple A Oven-Dried Catfish! 🐟🔥')
           ->greeting("Hello {$notifiable->name},")
           ->line('Your account is now active. Start enjoying our fresh, hygienic, and highly nutritious oven-dried catfish — rich in protein, Omega-3, and perfect for healthy meals.')
           ->line('Shop now, track your orders easily, and enjoy a smooth shopping experience.')
           ->line('Triple A — Healthy • Tasty • Premium.')
           ->line('Start Shopping Today!')
           ->action('Check our new features', 'https:://google.com');

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
