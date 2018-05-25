<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class EduDegree
 * 
 * @property int $edu_id
 * @property string $degree
 * @property string $institution
 * @property float $marks
 * @property string $remarks
 * @property int $interviewee_id
 * 
 * @property \App\Models\Interviewee $interviewee
 *
 * @package App\Models
 */
class EduDegree extends Eloquent
{
	protected $table = 'edu_degree';
	public $timestamps = false;

	protected $casts = [
		'marks' => 'float',
		'interviewee_id' => 'int'
	];

	protected $fillable = [
		'degree',
		'institution',
		'marks',
		'remarks'
	];

	public function interviewee()
	{
		return $this->belongsTo(\App\Models\Interviewee::class);
	}
}
