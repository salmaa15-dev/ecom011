<?php



namespace App\Notifications;



use App\Models\Customer;

use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;



class shopNotification extends Notification

{

    use Queueable;

    private $customer;



    /**

     * Create a new notification instance.

     *

     * @return void

     */

    public function __construct(Customer $customer)

    {

        $this->customer = $customer;

    }



    /**

     * Get the notification's delivery channels.

     *

     * @param  mixed  $notifiable

     * @return array

     */

    public function via()

    {

        return ['database'];

    }



    /**

     * Get the mail representation of the notification.

     *

     * @param  mixed  $notifiable

     * @return \Illuminate\Notifications\Messages\DataBase

     */

    public function toDatabase()

    {

        return [

            'name' => $this->customer->name,

            'email' => $this->customer->email,

            'type_payment' => $this->customer->type_payment,

            'total_orders' => $this->customer->total_order

        ];

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

