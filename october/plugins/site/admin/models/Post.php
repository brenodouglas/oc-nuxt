<?php namespace Site\Admin\Models;

use Model;
use System\Models\File;

/**
 * About Model
 */
class Post extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'site_admin_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'image' => File::class
    ];
    public $attachMany = [];
}
