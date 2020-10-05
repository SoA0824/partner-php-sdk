<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class CreateTransferTransaction extends Base
{
    protected $method = 'POST';
    public $responseClass = \Pokepay\Response\Transaction::class;
    private $senderId;
    private $receiverId;
    private $privateMoneyId;
    private $amount;
    public function __construct($senderId, $receiverId, $privateMoneyId, $amount, $optionalParams = array())
    {
        parent::__construct();
        $this->senderId = $senderId;
        $this->receiverId = $receiverId;
        $this->privateMoneyId = $privateMoneyId;
        $this->amount = $amount;

        $this->optionalParams = $optionalParams;
    }

    public function getPath()
    {
        return '/transactions/transfer';
    }

    public function getParams()
    {
        $params = array(
            'sender_id' => $this->senderId,
            'receiver_id' => $this->receiverId,
            'private_money_id' => $this->privateMoneyId,
            'amount' => $this->amount,
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}
