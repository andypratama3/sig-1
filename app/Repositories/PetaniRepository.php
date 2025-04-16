<?php

namespace App\Repositories;

use App\Models\Petani;
use App\Repositories\BaseRepository;

/**
 * Class PetaniRepository
 * @package App\Repositories
 * @version April 13, 2025, 9:34 pm UTC
*/

class PetaniRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'alamat',
        'kontak'
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
        return Petani::class;
    }
}
