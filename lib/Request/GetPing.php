<?php
// DO NOT EDIT: File is generated by code generator.

namespace Pokepay\Request;


class GetPing extends Base
{
    protected $method = 'GET';
    protected $path = '/ping';
    public $responseClass = \Pokepay\Response\Pong::class;
    
    public function __construct()
    {
        parent::__construct();
                $this->optionalParams = $optionalParams;
    }

    
    public function getParams()
    {
        $params = array(
            
        );

        $params += $this->optionalParams;

        
        return $params;
    }
}
