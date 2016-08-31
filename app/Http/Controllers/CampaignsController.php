<?php

namespace App\Http\Controllers;


use App\Models\Campaign;
use App\Models\CampaignContactGroup;
use App\Models\Group;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CampaignsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$data['campaigns'] = Campaign::all();
        $data['lists'] = Group::all();

        return view('Campaigns.index', $data);
	}

	public function read($id)
    {

        $data['campaign'] = Campaign::with(['campaigncontactgroup' => function ($q)
        {
            $q->with('group');
        }])->find($id);
        $data['lists'] = Group::all();

        return view('Campaigns.edit', $data);

    }

    public function create(Request $request)
    {

        $data = $request->except('list_id');
        $data['scheduled_date'] =  Carbon::parse($data['scheduled_date'])->format('Y-m-d');;
        $campaign = Campaign::create($data);


        foreach ($request->input('list_id') as $list) {

            $cg[] = new CampaignContactGroup([
                                        'group_id' => $list
                                        ]);
        }

        $campaign->campaigncontactgroup()->saveMany($cg);

        $request->session()->flash('success', 'New Campaign added!');
        return view('Campaigns.index', $campaign);
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::find($id);
        $data = $request->except('list_id');

        $updated = $campaign->update($data);

         foreach ($request->input('list_id') as $list) {

            $cg[] = new CampaignContactGroup([
                                        'group_id' => $list
                                        ]);
        }

        $campaign->campaigncontactgroup()->saveMany($cg);


        if($updated)
            $request->session()->flash('success', 'Campaign updated!');

        return redirect('campaigns');
    }


    public function delete(Request $request, $id)
    {
        $deletedRows = Campaign::destroy($id);

        $deleted = $deletedRows == 1;

        if($deleted)
            $request->session()->flash('success', 'Contact list deleted!');

        return redirect('campaigns');
    }

    public function runCampaign($id)
    {
        # code...
    }
}