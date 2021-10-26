<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class marcas
 * @package App\Models
 * @version October 26, 2021, 3:16 am UTC
 *
 * @property string $nommarca
 */
class marcas extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = 'tbmarcas';
    protected $primaryKey = 'idmarcas';

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nommarca'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idmarcas' => 'integer',
        'nommarca' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nommarca' => 'required'
    ];

    
}
