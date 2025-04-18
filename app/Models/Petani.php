<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Petani
 * @package App\Models
 * @version April 18, 2025, 10:28 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $lahans
 * @property string $nama
 * @property string $kontak
 * @property string $alamat
 */
class Petani extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'petani';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'kontak',
        'alamat'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'kontak' => 'string',
        'alamat' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required|string|max:255',
        'kontak' => 'required|string|max:255',
        'alamat' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lahans()
    {
        return $this->hasMany(\App\Models\Lahan::class, 'petani_id');
    }
}
