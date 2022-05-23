<?php  namespace Goosy\Contacus\Http\Controllers;

use Illuminate\Support\Facades\Event;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Goosy\Contacus\Models\Message;

class MessageController extends Controller
{
    public function insert(Request $request)
    {
        $message = new Message;
        $message->email = $request->input('email');
        $message->first_name = $request->input('first_name');
        $message->last_name = $request->input('last_name');
        $message->telephone = $request->input('telephone');
        $message->message = $request->input('message');
        $message->save();

        return  [
            'Error'=>null,
        ];
    }
}
