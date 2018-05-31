<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interviewer
 * 
 * @property int $interviewer_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $designation
 * 
 * @property \Illuminate\Database\Eloquent\Collection $interviews
 * @property \Illuminate\Database\Eloquent\Collection $marks
 *
 * @package App\Models
 */
class Interviewer extends Eloquent
{
	protected $table = 'interviewer';
	protected $primaryKey = 'interviewer_id';
	public $timestamps = false;

	protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'email',
		'designation'
	];

	public function interviews()
	{
		return $this->belongsToMany(\App\Models\Interview::class, 'interviewer_has_interview')
					->withPivot('evaluation_id');
	}

	public function marks()
	{
		return $this->hasMany(\App\Models\Mark::class);
	}
}
