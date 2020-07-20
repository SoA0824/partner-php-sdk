<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class UpdateAccount extends TestCase
{
    public function testUpdateAccount0()
    {
        $client = $this->newClient();
        $request = new Request\UpdateAccount("9e7a3d02-bd91-45b7-9ed7-605752339c4f");
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testUpdateAccount1()
    {
        $client = $this->newClient();
        $request = new Request\UpdateAccount("9e7a3d02-bd91-45b7-9ed7-605752339c4f", ['is_suspended' => TRUE]);
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
