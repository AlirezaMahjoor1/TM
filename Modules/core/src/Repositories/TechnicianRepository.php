<?php

namespace TM\Core\Repositories;

use Spatie\QueryBuilder\QueryBuilder;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;
use TM\Core\Models\Technician;

class TechnicianRepository implements TechnicianRepositoryInterface
{
    public function index()
    {
        $users = QueryBuilder::for(Technician::class)
            ->allowedFilters(['name'])
            ->get();
        return $users;
    }
}
