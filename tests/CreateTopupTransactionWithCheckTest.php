<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateTopupTransactionWithCheck extends TestCase
{
    public function testCreateTopupTransactionWithCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateTopupTransactionWithCheck("42a159a0-2858-4e97-8cda-75f9ebe43542", "585af929-4746-4668-a6f6-16b72c7744b4");
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
