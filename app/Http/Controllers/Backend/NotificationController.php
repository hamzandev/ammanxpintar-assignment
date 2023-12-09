<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function index() {
        return view('backend.notification.index');
    }

    function show($id) {
        return view('backend.notification.show', compact('id'));
    }
}
