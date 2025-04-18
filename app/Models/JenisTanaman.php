<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class JenisTanaman
 * @package App\Models
 * @version April 18, 2025, 10:27 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $lahans
 * @property string $nama
 */
class JenisTanaman extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'jenis_tanaman';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lahans()
    {
        return $this->hasMany(\App\Models\Lahan::class, 'jenis_tanaman_id');
    }
}
