<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
	use SoftDeletes;

    protected $guarded = ['id'];

    public $timestamps = true;
	protected $dates = ['deleted_at'];


	public function contactgroup()
	{
		return $this->hasMany('App\Models\ContactGroup');
	}

}