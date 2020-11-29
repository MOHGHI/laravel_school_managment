<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $notices = Notice::all();
        return view('notice.index', compact('notices'));
    }


    public function create()
    {
        // return view('notice.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
			'name' => 'required',
			'body' => 'required'
		]);

		$notices = new Notice;
		$notices->name = $request->name;
		$notices->body = $request->body;
		$notices->save();

		Session::flash('success', 'notice created');
		return redirect()->route('notice.index');

    }
}
