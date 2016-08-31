<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
	use SoftDeletes;

    protected $guarded = ['id'];

    public $timestamps = true;
	protected $dates = ['deleted_at'];


	public function campaigncontactgroup()
	{
		return $this->hasMany('App\Models\CampaignContactGroup');
	}

}