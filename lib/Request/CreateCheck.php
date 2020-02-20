<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


use DateTime;
class CreateCheck extends Base
{
    protected $method = 'POST';
    protected $path = '/checks';
    public $responseClass = \Pokepay\Response\Check::class;
    private $accountId;
    public function __construct($accountId, $optionalParams = array())
    {
        parent::__construct();
        $this->accountId = $accountId;
        $this->optionalParams = $optionalParams;
    }

    
    public function getParams()
    {
        $params = array(
            'account_id' => $this->accountId,
        );

        $params += $this->optionalParams;

        if (isset($params['expiresAt']) && $params['expiresAt'] instanceof DateTime) {
            $params['expiresAt'] = $params['expiresAt']->format(DateTime::ATOM);
        }

        return $params;
    }
}
