<?php

namespace App\Listeners;

use App\Events\CardNumUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCardInfo
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CardNumUpdated  $event
     * @return void
     */
    public function handle(CardNumUpdated $event)
    {
        $card = $event->card;
        $customer = $card->customer;
        $customer->cardinfo()->create([
            'num' => abs($card->num - $card->origin_num),
            'sumdata' => $card->num,
            'shopid' => $customer->shopid,
            'flag' => $card->num - $card->origin_num > 0 ? 0 : 1,
        ]);
    }
}
