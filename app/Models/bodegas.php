<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class bodegas
 * @package App\Models
 * @version October 26, 2021, 4:00 am UTC
 *
 * @property string $nombodega
 * @property string $direccion
 */
class bodegas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tbbodega';
    protected $primaryKey = 'idbodega';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombodega',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idbodega' => 'integer',
        'nombodega' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombodega' => 'required',
        'direccion' => 'required'
    ];

    
}
