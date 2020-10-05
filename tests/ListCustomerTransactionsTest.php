<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListCustomerTransactions extends TestCase
{
    public function testListCustomerTransactions0()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381"
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
    public function testListCustomerTransactions1()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'per_page' => 6758
            ]
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
    public function testListCustomerTransactions2()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'page' => 186,
                'per_page' => 7711
            ]
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
    public function testListCustomerTransactions3()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'to' => "2019-04-27T05:22:58.000000+09:00",
                'page' => 7567,
                'per_page' => 6470
            ]
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
    public function testListCustomerTransactions4()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'from' => "2024-10-26T15:00:37.000000+09:00",
                'to' => "2025-08-08T16:56:36.000000+09:00",
                'page' => 6014,
                'per_page' => 6960
            ]
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
    public function testListCustomerTransactions5()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'is_modified' => FALSE,
                'from' => "2016-03-11T02:40:00.000000+09:00",
                'to' => "2021-12-06T05:21:56.000000+09:00",
                'page' => 3188,
                'per_page' => 2073
            ]
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
    public function testListCustomerTransactions6()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'type' => "b9tQKSZdM",
                'is_modified' => TRUE,
                'from' => "2019-08-02T10:43:19.000000+09:00",
                'to' => "2022-04-11T02:43:00.000000+09:00",
                'page' => 8464,
                'per_page' => 7627
            ]
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
    public function testListCustomerTransactions7()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'receiver_customer_id' => "094d9780-d414-4a48-ac9c-3b91fab91183",
                'type' => "3",
                'is_modified' => FALSE,
                'from' => "2016-06-06T10:50:22.000000+09:00",
                'to' => "2018-08-06T22:33:58.000000+09:00",
                'page' => 7146,
                'per_page' => 3875
            ]
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
    public function testListCustomerTransactions8()
    {
        $client = $this->newClient();
        $request = new Request\ListCustomerTransactions(
            "be8dc5d0-5c11-4cc4-bcc5-41fa6e5b6381",
            [
                'sender_customer_id' => "04286c86-f079-4b76-8f99-e304114a4ee3",
                'receiver_customer_id' => "69ee6e6e-37b7-4715-b310-689e6eb9968e",
                'type' => "2KUYpv",
                'is_modified' => TRUE,
                'from' => "2017-10-16T12:35:20.000000+09:00",
                'to' => "2022-07-14T19:26:23.000000+09:00",
                'page' => 8233,
                'per_page' => 9547
            ]
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