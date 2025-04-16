<?php

namespace App\Repositories;

use App\Models\JenisTanaman;
use App\Repositories\BaseRepository;

/**
 * Class JenisTanamanRepository
 * @package App\Repositories
 * @version April 13, 2025, 3:20 pm UTC
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
