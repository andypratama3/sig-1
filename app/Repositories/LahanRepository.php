<?php

namespace App\Repositories;

use App\Models\Lahan;
use App\Repositories\BaseRepository;

/**
 * Class LahanRepository
 * @package App\Repositories
 * @version April 13, 2025, 9:56 pm UTC
*/

class LahanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'desa',
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lahan::class;
    }
}
