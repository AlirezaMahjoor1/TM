<?php

namespace TM\Core\Controllers\Technician;

use App\Http\Controllers\Controller;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;


class IndexTechnician extends Controller
{
    public function __invoke()
    {
        return app()->make(TechnicianRepositoryInterface::class)->index();
    }
}
