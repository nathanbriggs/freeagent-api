<?php

namespace CloudManaged\FreeAgent;

use CloudManaged\FreeAgent\Api\ApiResource;
use CloudManaged\FreeAgent\Errors\ApiError;
use CloudManaged\FreeAgent\Errors\BankAccountError;

class BankAccount extends ApiResource
{
    public function getBankAccountsUrl()
    {
        return $this->getUrlBase() . 'bank_accounts';
    }
}
