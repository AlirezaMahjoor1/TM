<?php

namespace TM\Core\Controllers\Technician;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;


class IndexTechnician extends Controller
{
    public function __invoke(Request $request)
    {
        return app()->make(TechnicianRepositoryInterface::class)->index($request->all());
    }
}
