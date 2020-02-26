<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class GetAccount extends Base
{
    protected $method = 'GET';
    
    public $responseClass = \Pokepay\Response\AccountDetail::class;
    private $accountId;
    public function __construct($accountId)
    {
        parent::__construct();
        $this->accountId = $accountId;
        $this->optionalParams = array();
    }

    public function getPath()
    {
        return '/accounts' . '/' . $this->accountId;
    }

    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}