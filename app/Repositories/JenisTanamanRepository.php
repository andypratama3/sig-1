<?php

namespace App\Repositories;

use App\Models\JenisTanaman;
use App\Repositories\BaseRepository;

/**
 * Class JenisTanamanRepository
 * @package App\Repositories
 * @version April 18, 2025, 10:27 am UTC
*/

class JenisTanamanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return JenisTanaman::class;
    }
}
