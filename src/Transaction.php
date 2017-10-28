<?php

namespace CloudManaged\FreeAgent;

use CloudManaged\FreeAgent\Api\ApiResource;
use CloudManaged\FreeAgent\Errors\ApiError;
use CloudManaged\FreeAgent\Errors\TransactionError;

class Transaction extends ApiResource
{
    public function getBankTransactionUrl()
    {
        return $this->getUrlBase() . 'bank_transactions';
    }

    /**
     * List all Bank Transactions by Bank Account
     *
     * @see https://dev.freeagent.com/docs/bank_transactions
     * @param $account Bank Account Id
     * @param array $params will be an array of different params to filter the request as such:
     *                  - Date filters
     *                      - from_date (=)
     *                      - to_date (=)
     *                  - View filters (view=)
     *                      - unexplained
     *                      - manual
     *                      - imported
     *
     * @return mixed
     * @throws TransactionError
     */
    public function listAllBankTransactionsByBankAccount($account, $params = [])
    {
        try {
            $url = $this->getBankTransactionUrl();
            $params['bank_account'] = $account;
            $response = $this->retrieve($url, [], $params);
            return $response['bank_transactions'];
        } catch (ApiError $e) {
            throw new TransactionError($e);
        }
    }

    /**
     * Get a single invoice
     *
     * @see https://dev.freeagent.com/docs/invoices
     * @param $transaction Bank Transaction Id
     *
     * @return mixed
     * @throws TransactionError
     */
    public function getASingleBankTransaction($transaction)
    {
        try {
            $url = $this->getBankTransactionUrl() . '/' . $transaction;
            return $this->retrieve($url, []);
        } catch (ApiError $e) {
            throw new TransactionError($e);
        }
    }
}
