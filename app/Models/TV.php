<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TV
 * @package App\Models
 * @version October 26, 2021, 4:47 am UTC
 *
 * @property integer $idmarcas
 * @property string $tvdescripcion
 * @property integer $tvcantidad
 * @property integer $idubicacion
 */
class TV extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbtv';
    protected $primaryKey = 'idtv';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idmarcas',
        'tvdescripcion',
        'tvcantidad',
        'idubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idtv' => 'integer',
        'idmarcas' => 'integer',
        'tvdescripcion' => 'string',
        'tvcantidad' => 'integer',
        'idubicacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idmarcas' => 'required',
        'tvdescripcion' => 'required',
        'tvcantidad' => 'numeric',
        'idubicacion' => 'required'
    ];

    
}
