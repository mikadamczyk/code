<?php

class Gallery extends Eloquent  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'galleries';
	
	public static $rules = array();

	public $timestamps = true;
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

	/**
	 * Fillable fields array
	 *
	 * @var array
	 */
	protected $fillable = array('user_id', 'private');
	
/*     public function user()
    {
        return $this->hasOne('User');
    } */

}