<?php

namespace TM\Core\Repositories;

use Spatie\QueryBuilder\QueryBuilder;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;
use TM\Core\Models\Technician;

class TechnicianRepository implements TechnicianRepositoryInterface
{
    public function index()
    {
        $technician = QueryBuilder::for(Technician::class)
            ->allowedFilters(['district_id','skill_id'])
            ->get();
        return $technician;
    }
}
