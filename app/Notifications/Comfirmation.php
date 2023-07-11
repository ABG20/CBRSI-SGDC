<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class Comfirmation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

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
        $nom=Auth::user()->nom;
        return (new MailMessage)
                     ->subject(' Finalisation de votre dossier CBRSI')
                    ->line('Cher(e) ' . $nom)
                   ->line('Nous espérons que vous allez bien. Nous tenons à vous rappeler que votre dossier est en cours de traitement et nécessite votre attention finale.')
                    ->line('Nous vous remercions de votre coopération et de l\'intérêt que vous portez à notre service. Si vous avez déjà finalisé votre dossier, veuillez ignorer cette notification.');
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
