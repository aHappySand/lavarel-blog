<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Status;

class StatusesController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:2000'
        ]);

        Auth::user()->statuses()->create([
            'content' => $request->content
        ]);

        return redirect()->back();
    }

    public function destory(Status $status)
    {
        $this->authorize('destory', $status);
        $status->delete();

        session()->flash('success', '微博已被成功删除');
        return redirect()->back();
    }
}
