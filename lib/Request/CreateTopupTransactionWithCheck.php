<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class CreateTopupTransactionWithCheck extends Base
{
    protected $method = 'POST';
    protected $path = '/transactions/topup/check';
    public $responseClass = \Pokepay\Response\Transaction::class;
    private $checkId;
    private $customerId;
    public function __construct($checkId, $customerId)
    {
        parent::__construct();
        $this->checkId = $checkId;
        $this->customerId = $customerId;
        $this->optionalParams = array();
    }

    
    public function getParams()
    {
        $params = array(
            'check_id' => $this->checkId,
            'customer_id' => $this->customerId,
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}