<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactGroup extends Model
{
	use SoftDeletes;

    protected $guarded = ['id'];

    public $timestamps = true;
	protected $dates = ['deleted_at'];

	public function group()
	{
		return $this->belongsTo('App\Models\group');
	}

	public function contact()
	{
		return $this->belongsTo('App\Models\Contact');
	}

	public function campaign()
	{
		return $this->belongsTo('App\Models\Campaign');
	}

}