<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class GetTransaction extends TestCase
{
    public function testGetTransaction0()
    {
        $client = $this->newClient();
        $request = new Request\GetTransaction("e755f23a-38ce-4b5d-9b29-d8d49b1ae03f");
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
}
