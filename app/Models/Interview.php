<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Interview
 * 
 * @property int $interview_id
 * @property string $title
 * @property \Carbon\Carbon $start_date
 * @property string $location
 * 
 * @property \Illuminate\Database\Eloquent\Collection $evaluation_criteria
 * @property \Illuminate\Database\Eloquent\Collection $interviewees
 * @property \Illuminate\Database\Eloquent\Collection $interviewer_has_interviews
 *
 * @package App\Models
 */
class Interview extends Eloquent
{
	protected $table = 'interview';
	protected $primaryKey = 'interview_id';
	public $timestamps = false;

	protected $dates = [
		'start_date'
	];

	protected $fillable = [
		'title',
		'start_date',
		'location'
	];

	public function evaluation_criteria()
	{
		return $this->hasMany(\App\Models\EvaluationCriterium::class);
	}

	public function interviewees()
	{
		return $this->hasMany(\App\Models\Interviewee::class);
	}

	public function interviewer_has_interviews()
	{
		return $this->hasMany(\App\Models\InterviewerHasInterview::class);
	}
}
