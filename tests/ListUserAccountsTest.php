<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListUserAccounts extends TestCase
{
    public function testListUserAccounts0()
    {
        $client = $this->newClient();
        $request = new Request\ListUserAccounts(
            "d1500cb6-5e22-4247-9e7e-d66360ec8b7d"
        );
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
