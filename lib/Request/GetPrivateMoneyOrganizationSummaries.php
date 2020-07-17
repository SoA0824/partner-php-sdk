<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;

use DateTime;

class GetPrivateMoneyOrganizationSummaries extends PagingBase
{
    protected $method = 'GET';
    public $responseClass = \Pokepay\Response\PaginatedPrivateMoneyOrganizationSummaries::class;
    private $privateMoneyId;
    public function __construct($privateMoneyId, $optionalParams = array())
    {
        parent::__construct();
        $this->privateMoneyId = $privateMoneyId;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/private-moneys' . '/' . $this->privateMoneyId . '/organization-summaries';
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        if (isset($params['from']) && $params['from'] instanceof DateTime) {
            $params['from'] = $params['from']->format(DateTime::ATOM);
        }
        if (isset($params['to']) && $params['to'] instanceof DateTime) {
            $params['to'] = $params['to']->format(DateTime::ATOM);
        }

        return $params;
    }
}
