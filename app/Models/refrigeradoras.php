<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class refrigeradoras
 * @package App\Models
 * @version October 26, 2021, 5:53 am UTC
 *
 * @property integer $idmarcas
 * @property string $refridesc
 * @property integer $refricantidad
 * @property integer $idubicacion
 */
class refrigeradoras extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbrefrigeradora';
    protected $primaryKey = 'idrefrigeradora';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'idmarcas',
        'refridesc',
        'refricantidad',
        'idubicacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idrefrigeradora' => 'integer',
        'idmarcas' => 'integer',
        'refridesc' => 'string',
        'refricantidad' => 'integer',
        'idubicacion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idmarcas' => 'required',
        'refridesc' => 'required',
        'refricantidad' => 'numeric',
        'idubicacion' => 'required'
    ];

    
}
