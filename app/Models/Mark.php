<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Mark
 * 
 * @property int $rating_id
 * @property float $score
 * @property string $remarks
 * @property int $interviewee_id
 * @property int $interviewer_id
 * 
 * @property \App\Models\Interviewee $interviewee
 * @property \App\Models\Interviewer $interviewer
 *
 * @package App\Models
 */
class Mark extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'score' => 'float',
		'interviewee_id' => 'int',
		'interviewer_id' => 'int'
	];

	protected $fillable = [
		'score',
		'remarks'
	];

	public function interviewee()
	{
		return $this->belongsTo(\App\Models\Interviewee::class);
	}

	public function interviewer()
	{
		return $this->belongsTo(\App\Models\Interviewer::class);
	}
}
