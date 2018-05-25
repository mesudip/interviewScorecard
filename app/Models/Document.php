<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Document
 * 
 * @property int $doc_id
 * @property string $doc_name
 * @property string $doc_location
 * @property int $interviewee_id
 * 
 * @property \App\Models\Interviewee $interviewee
 *
 * @package App\Models
 */
class Document extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'interviewee_id' => 'int'
	];

	protected $fillable = [
		'doc_name',
		'doc_location'
	];

	public function interviewee()
	{
		return $this->belongsTo(\App\Models\Interviewee::class);
	}
}
