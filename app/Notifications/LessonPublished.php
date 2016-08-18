<?php

namespace App\Notifications;

use App\Lesson;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class LessonPublished extends Notification
{
    use Queueable;
    protected $lesson;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Lesson $lesson)
    {
        //
        $this->lesson= $lesson;
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
            ->subject('New Lesson: ' . $this->lesson->name)
            ->line('A new lesson was published at MuleTrainer. ' . $this->lesson->title)
            ->action('Watch it Now!', url('/lessons/' . $this->lesson->id));
     /*   return (new MailMessage)
                    ->subject('A new lesson was published')
                    ->error()
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');*/
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
