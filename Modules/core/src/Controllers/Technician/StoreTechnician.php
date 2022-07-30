<?php


namespace TM\Core\Controllers\Technician;


use App\Http\Controllers\Controller;
use TM\Core\Infrastructures\Interfaces\TechnicianRepositoryInterface;

class StoreTechnician extends Controller
{
    public function __invoke(Request $request)
    {
        app()->make(TechnicianRepositoryInterface::class)->store($request->all());
    }

}