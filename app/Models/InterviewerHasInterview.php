<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class InterviewerHasInterview
 * 
 * @property int $interviewer_id
 * @property int $interview_id
 * @property int $evaluation_id
 * 
 * @property \App\Models\EvaluationCriterium $evaluation_criterium
 * @property \App\Models\Interview $interview
 * @property \App\Models\Interviewer $interviewer
 *
 * @package App\Models
 */
class InterviewerHasInterview extends Eloquent
{
	protected $table = 'interviewer_has_interview';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'interviewer_id' => 'int',
		'interview_id' => 'int',
		'evaluation_id' => 'int'
	];

	public function evaluation_criterium()
	{
		return $this->belongsTo(\App\Models\EvaluationCriterium::class, 'evaluation_id');
	}

	public function interview()
	{
		return $this->belongsTo(\App\Models\Interview::class);
	}

	public function interviewer()
	{
		return $this->belongsTo(\App\Models\Interviewer::class);
	}
}
