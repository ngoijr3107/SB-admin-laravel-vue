<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::get();
        return $this->sendResponse($subscriptions, 'ALL SUBSCRIPTIONS');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $subscriptions = Subscription::create([
            'client_name' => $request->get('client_name'),
            'client_email' => $request->get('client_email'),
        ]);
        return $this->sendResponse($subscriptions, 'Successfully Subscribed');
    }

    public function list($id)
    {
        $subscriptions = Subscription::get()->latest();

        return $this->sendResponse($subscriptions, 'ALL SUBSCRIPTIONS');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
