<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Computadoras
 * @package App\Models
 * @version October 26, 2021, 5:22 am UTC
 *
 * @property integer $idmarca
 * @property string $descripcion
 * @property integer $cantidad
 * @property integer $idubicacion
 */
class Computadoras extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbcomputadoras';
    protected $primaryKey = 'idcomputadoras';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idmarcas',
        'compdescripcion',
        'compcantidad',
        'idubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcomputadoras' => 'integer',
        'idmarcas' => 'integer',
        'compdescripcion' => 'string',
        'compcantidad' => 'integer',
        'idubicacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idmarcas' => 'required',
        'compdescripcion' => 'required',
        'compcantidad' => 'numeric',
        'idubicacion' => 'required'
    ];

    
}
