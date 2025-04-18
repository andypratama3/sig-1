<?php

namespace App\Repositories;

use App\Models\Petani;
use App\Repositories\BaseRepository;

/**
 * Class PetaniRepository
 * @package App\Repositories
 * @version April 18, 2025, 10:28 am UTC
*/

class PetaniRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'kontak',
        'alamat'
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
