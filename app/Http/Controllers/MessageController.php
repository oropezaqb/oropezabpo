<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMessage;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(StoreMessage $request)
    {
        try {
            \DB::transaction(function () use ($request) {
                $message = new Message([
                    'name' => request('name'),
                    'email' => request('email'),
                    'subject' => request('subject'),
                    'message' => request('message'),
                ]);
                $message->save();
            });
            return view('thank-you');
        } catch (\Exception $e) {
            return back()->with('status', $this->translateError($e))->withInput();
        }
    }
    public function translateError($e)
    {
        switch ($e->getCode()) {
            //case '23000':
                //return "Bill number for this supplier is already recorded.";
        }
        return $e->getMessage();
    }
}
