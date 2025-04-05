<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function new_notifications()
    {
        $data = Auth::user()->notifications;
        Auth::user()->notifications()->delete();
        return view('back-end.notifications.new-notification', ['notifications' => $data]);
    }

    public function show_notification($notification_id = null, $type = null)
    {
        try {
            $notification = auth::user()->notifications()->where(['type' => $type, 'id' => $notification_id])->first();
            $notification->delete();
            return view('back-end.notifications.notification', ['notification' => $notification]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.dashboard')->with('success', 'please take your history for see all notifications');
        }
             
    }
}
