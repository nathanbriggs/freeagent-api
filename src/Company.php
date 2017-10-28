<?php

namespace CloudManaged\FreeAgent;

use CloudManaged\FreeAgent\Api\ApiResource;
use CloudManaged\FreeAgent\Errors\ApiError;
use CloudManaged\FreeAgent\Errors\CompanyError;
use CloudManaged\FreeAgent\Entities\Company\CompanyEntity;

class Company extends ApiResource
{
    public function getCompanyUrl()
    {
        return $this->getUrlBase() . 'company';
    }

    /**
     * General company information
     * The list of basic information about a company held by FreeAgent.
     *
     * @see https://dev.freeagent.com/docs/company#general-company-information
     * @return CompanyEntity
     */
    public function getGeneralCompanyInformation()
    {
        $response = $this->fetchCompanyDetails();
        return $this->companyDetails($response);
    }

    protected function fetchCompanyDetails()
    {
        try {
            $url = $this->getCompanyUrl();
            return $this->retrieve($url, []);
        } catch (ApiError $e) {
            throw new CompanyError($e);
        }
    }

    protected function companyDetails($response)
    {
        $response = $response['company'];
        $company = new CompanyEntity($response);
        return $company;
    }
}
