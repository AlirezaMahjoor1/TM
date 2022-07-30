<?php

namespace TM\Core\Repositories;

use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;
use TM\Core\Models\Technician;

class TechnicianRepository implements TechnicianRepositoryInterface
{
    public function index()
    {
        $technician = QueryBuilder::for(Technician::class)
            ->allowedFilters([AllowedFilter::exact('district_id'), AllowedFilter::exact('skill_id')])
            ->get();
        return $technician;
    }

    public function store(array $data)
    {

    }
}
