<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EvaluationCriterium
 * 
 * @property int $evaluation_id
 * @property string $title
 * @property string $weight
 * @property string $remarks
 * @property int $interview_id
 * 
 * @property \App\Models\Interview $interview
 * @property \Illuminate\Database\Eloquent\Collection $interviewer_has_interviews
 *
 * @package App\Models
 */
class EvaluationCriterium extends Eloquent
{
	protected $primaryKey = 'evaluation_id';
	public $timestamps = false;

	protected $casts = [
		'interview_id' => 'int'
	];

	protected $fillable = [
		'title',
		'weight',
		'remarks',
		'interview_id'
	];

	public function interview()
	{
		return $this->belongsTo(\App\Models\Interview::class);
	}

	public function interviewer_has_interviews()
	{
		return $this->hasMany(\App\Models\InterviewerHasInterview::class, 'evaluation_id');
	}
}
