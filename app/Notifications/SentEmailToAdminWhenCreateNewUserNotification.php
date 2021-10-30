<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class SentEmailToAdminWhenCreateNewUserNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $_user;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->_user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Hello Admin: ' . $notifiable->email . ' Admin has Id ' . $notifiable->id)
            ->line('User has Email: ' . $this->_user->email . ' User has Id ' . $this->_user->id)
            ->action('Goto-mail', route('c.goto-mail'))
            ->line(env('APP_NAME') . ' cám ơn bạn đã sử dụng dịch vụ');
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
