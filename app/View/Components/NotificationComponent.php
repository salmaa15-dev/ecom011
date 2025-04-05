<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class NotificationComponent extends Component
{
    public function notifications(): Collection
    {
        return Auth::user()->notifications;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.notification-component');
    }
}
