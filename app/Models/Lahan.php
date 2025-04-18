<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lahan
 * @package App\Models
 * @version April 18, 2025, 10:28 am UTC
 *
 * @property \App\Models\JenisTanaman $jenisTanaman
 * @property \App\Models\Petani $petani
 * @property string $provinsi_id
 * @property string $kabupaten_id
 * @property string $kecamatan_id
 * @property string $desa_id
 * @property string $tanaman
 * @property string $tanggal_penanaman
 * @property string $tanggal_panen
//  * @property number $latitude
//  * @property number $longitude
//  * @property number $luas_lahan
 * @property integer $petani_id
 * @property integer $jenis_tanaman_id
 * @property string $status
 */
class Lahan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'lahan';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'desa_id',
        'tanaman',
        'tanggal_penanaman',
        'tanggal_panen',
        'latitude',
        'longitude',
        'luas_lahan',
        'petani_id',
        'jenis_tanaman_id',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'provinsi_id' => 'string',
        'kabupaten_id' => 'string',
        'kecamatan_id' => 'string',
        'desa_id' => 'string',
        'tanaman' => 'string',
        'tanggal_penanaman' => 'date',
        'tanggal_panen' => 'date',
        // 'latitude' => 'decimal:6',
        // 'longitude' => 'decimal:6',
        'luas_lahan' => 'float',
        'petani_id' => 'integer',
        'jenis_tanaman_id' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'provinsi_id' => 'nullable|string|max:255',
        'kabupaten_id' => 'nullable|string|max:255',
        'kecamatan_id' => 'nullable|string|max:255',
        'desa_id' => 'nullable|string|max:255',
        'tanaman' => 'required|string|max:255',
        'tanggal_penanaman' => 'nullable',
        'tanggal_panen' => 'nullable',
        // 'latitude' => 'required|numeric',
        // 'longitude' => 'required|numeric',
        'luas_lahan' => 'required|numeric',
        'petani_id' => 'required',
        'jenis_tanaman_id' => 'required',
        'status' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jenisTanaman()
    {
        return $this->belongsTo(\App\Models\JenisTanaman::class, 'jenis_tanaman_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function petani()
    {
        return $this->belongsTo(\App\Models\Petani::class, 'petani_id');
    }
}
