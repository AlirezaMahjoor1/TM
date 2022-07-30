<?php


namespace TM\Core\Infrastructures\Interfaces;


Interface TechnicianRepositoryInterface
{
    public function index();

    public function store(array $data);

}
