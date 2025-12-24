<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\VonageMessage;

class SendOTPNotification extends Notification
{
    use Queueable;

    /**
     * @var string
     */
    protected string $code;

    /**
     * Create a new notification instance.
     *
     * @param string $code
     * @return void
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['vonage'];
    }

    /**
     * Get the sms representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return VonageMessage;
     */
    public function toVonage($notifiable): VonageMessage
    {
        return (new VonageMessage)
                    ->content(__('Your Verification Code is :code', [
                        'code' => $this->code,
                    ]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
