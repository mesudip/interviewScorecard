<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 08:05:10 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Admin
 * 
 * @property int $admin_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $designation
 *
 * @package App\Models
 */
class Admin extends Eloquent
{
	protected $table = 'admin';
	protected $primaryKey = 'admin_id';
	public $timestamps = false;

	protected $fillable = [
		'first_name',
		'middle_name',
		'last_name',
		'email',
		'designation'
	];
}
