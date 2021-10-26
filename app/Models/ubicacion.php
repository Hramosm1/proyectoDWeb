<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ubicacion
 * @package App\Models
 * @version October 26, 2021, 4:06 am UTC
 *
 * @property string $nomubicacion
 * @property integer $idbodega
 */
class ubicacion extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbubicacion';
    protected $primaryKey = 'idubicacion';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomubicacion',
        'idbodega'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idubicacion' => 'integer',
        'nomubicacion' => 'string',
        'idbodega' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomubicacion' => 'required',
        'idbodega' => 'required'
    ];

    
}
