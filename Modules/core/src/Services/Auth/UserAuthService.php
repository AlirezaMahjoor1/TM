<?php

namespace TM\Core\Services\Auth;

use Illuminate\Support\Facades\Cache;
use TM\Core\Models\User;

class UserAuthService
{
    private array $data;
    private const VERIFIED_STATUS_CODE = 1;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    private function checkUserExist()
    {
        return User::query()->where('cell_number', $this->data['cell_number'])
            ->exists();
    }

    private function checkUserVerifyCellNumber(): bool
    {
        return User::query()->where('cell_number', $this->data['cell_number'])
            ->where('verified', self::VERIFIED_STATUS_CODE)
            ->exists();
    }

    /**
     * @throws \Exception
     */
    public function registerUser()
    {
        if ($this->checkUserExist()) {
            if ($this->checkUserVerifyCellNumber()) {
                throw new \Exception(trans('core::message.client_exists'));
            }
        }
    }
}
