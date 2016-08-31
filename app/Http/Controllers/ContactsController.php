<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactGroup;
use App\Models\Group;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function all()
	{
		$data['contacts'] = Contact::all();

        $data['sex'] = ["" => "Select Gender", "Female" => "Female", "Male" => "Male"];

        $data['lists'] = Group::all();

        return view('contacts.index', $data);
	}

	public function read($id)
    {
        $data['contact'] = Contact::with(['contactgroup' => function ($q)
        {
            $q->with('group');
        }])->find($id);
        $data['lists'] = Group::all();

        $data['sex'] = ["" => "Select Gender", "Female" => "Female", "Male" => "Male"];


        return view('contacts.edit', $data);
    }

    public function create(Request $request)
    {
        $data = $request->except('list_id');

        $contact = Contact::create($data);

        foreach ($request->input('list_id') as $list) {

            $cg[] = new ContactGroup([
                                        'group_id' => $list
                                        ]);
        }

        $contact->contactgroup()->saveMany($cg);

        $request->session()->flash('success', 'New contact added!');

        return redirect('/');

    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $data = $request->except('list_id');

        $updated = $contact->update($data);

        foreach ($request->input('list_id') as $list) {
            $oldcg = ContactGroup::find($list);
            if(!isset($oldcg->id)){
                $cg[] = new ContactGroup([
                                        'group_id' => $list
                                        ]);
            }
            else{
                $cg[] = $oldcg;
            }

        }

        $contact->contactgroup()->saveMany($cg);

        if($updated)
            $request->session()->flash('success', 'Contact updated!');

        return redirect('/');

    }

    public function delete($id)
    {
        $deletedRows = Contact::destroy($id);

        $deleted = $deletedRows == 1;

         if($deleted)
            $request->session()->flash('success', 'Contact deleted!');

        return back();
    }
}