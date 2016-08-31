<?php

namespace App\Http\Controllers;


use App\Models\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
	{
		$groups = Group::all();

        return view('List.index', ['groups' => $groups]);
	}

	public function read($id)
    {
        $group = Group::findOrFail($id);
        return view('List.edit', ['group' => $group]);

    }

    public function create(Request $request)
    {
        $contact = Group::create($request->all());
        $request->session()->flash('success', 'New Contact List added!');
        return view('List.index', $contact);
    }

    public function update(Request $request, $id)
    {
        $group = Group::find($id);

        $updated = $group->update($request->all());

        if($updated)
            $request->session()->flash('success', 'Contact list updated!');

        return redirect('lists');
    }

    public function addToList(Request $request, $id)
    {

    }
    public function list()
    {
        $groups = Group::all();
        return response()->json($groups);
    }

    public function delete(Request $request, $id)
    {
        $deletedRows = Group::destroy($id);

        $deleted = $deletedRows == 1;

        if($deleted)
            $request->session()->flash('success', 'Contact list deleted!');

        return redirect('lists');
    }
}