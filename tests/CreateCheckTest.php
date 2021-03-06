<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class CreateCheck extends TestCase
{
    public function testCreateCheck0()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 8303
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
    public function testCreateCheck1()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 693,
                'description' => "y9zD8cfycxdjXF6cmwiKvevzAx7rHin0MHYFpvhqZUg2yG4Wo0L4evFZLjpsodOQD43fZ5T5bk20dIuBp2e25agSXyEGickpeze5Yn7vyzhltNB5edjt157B8n6abEccTMUOFUG9Fme9wlEEj2gZC8ckmFOzWRdKb11QTIHM0x5oJQ4"
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
    public function testCreateCheck2()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 3581,
                'is_onetime' => TRUE,
                'description' => "O2Nwel4rHJTDGFvqXggC9Tcy7ogKmUw0VnsFy"
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
    public function testCreateCheck3()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 8593,
                'usage_limit' => 2918,
                'is_onetime' => FALSE,
                'description' => "t6Bg95FB1a7IFTBkW9tPubyeqITUoc"
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
    public function testCreateCheck4()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 6325,
                'expires_at' => "2023-07-02T11:25:11.000000+09:00",
                'usage_limit' => 1992,
                'is_onetime' => FALSE,
                'description' => "WI6lY3NxA2Qq6LVyn2dOGJj5BoyL1MgjctfisLuYo4aorOwFrhmbs26EDkzDLnAr7NHvMDZLOk3Kn6N9IKA2DQ0UDl0RkGXq"
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
    public function testCreateCheck5()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 3665,
                'point_expires_at' => "2023-10-26T04:08:58.000000+09:00",
                'expires_at' => "2020-08-29T15:11:20.000000+09:00",
                'usage_limit' => 4039,
                'is_onetime' => TRUE,
                'description' => "rTGUPugetKJLdESdgB4DMlPhuAgx6J23S5a4KJH2dJnXOeAy8xYgmSSWd6nFdHza9f"
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
    public function testCreateCheck6()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 656,
                'point_expires_in_days' => 8328,
                'point_expires_at' => "2020-06-09T03:04:20.000000+09:00",
                'expires_at' => "2022-08-11T04:31:51.000000+09:00",
                'usage_limit' => 1715,
                'is_onetime' => TRUE,
                'description' => "iljDxgSpyfoekUtYXnQ6dyRqDXbojqilSXXfgL13rI1kMYSkzLYWcqyBEPqq6jXoMPoI5dYhtAEAC8MN1MIRbysguh0xXqdkQK8VGfHRzulBqoPAVuBC2EUluqb81O3ZagKE8LcC"
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
    public function testCreateCheck7()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 2658,
                'bear_point_account' => "6fcef97d-387f-4960-badd-ef32d2e5a46e",
                'point_expires_in_days' => 7957,
                'point_expires_at' => "2020-07-18T03:45:04.000000+09:00",
                'expires_at' => "2022-10-09T11:46:36.000000+09:00",
                'usage_limit' => 6913,
                'is_onetime' => FALSE,
                'description' => "he5EoHVudmx1iMacSt3whWHQ5cbR62EyfrAyRxoXmZ8au8D4esSHy55WYfHfvN0QEBe9OUmuQoNyAxdhT65Y"
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
    public function testCreateCheck8()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 3686,
                'point_amount' => 5345
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
    public function testCreateCheck9()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 1452,
                'point_amount' => 78,
                'description' => "M2xjqlPxxy8RqwFWTQ1hvVt9bN2zIxNZx4eE9mHPjq6XCvYjxbcuNA5AOQHru6gAXocPu4UpOUbFxl1xg8SX1voG8Gydqo4"
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
    public function testCreateCheck10()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 2015,
                'point_amount' => 4689,
                'is_onetime' => FALSE,
                'description' => "47J36mgyKf2pLnur36TYPgxIzfeirgwWnuJKugM3OQh2JHBnxbiEM0oFGnnvKX9mW4mLe"
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
    public function testCreateCheck11()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 8205,
                'point_amount' => 1266,
                'usage_limit' => 4630,
                'is_onetime' => TRUE,
                'description' => "6yDqMFurm2HyY5rxBRsFTyEvnewbYd4rNZJsCq7m7arw2NKYH12xHXaAOFqIwxrvxkxwVYBDQiRCyVTR3czNdwQ"
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
    public function testCreateCheck12()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 3962,
                'point_amount' => 4389,
                'expires_at' => "2019-05-26T09:35:58.000000+09:00",
                'usage_limit' => 3945,
                'is_onetime' => FALSE,
                'description' => "jK5MdQ1lZMyARXVB9A32ESqVUKE1GN9JqLEvyRdA5j20ws4Z1pnjZ8xWKeN3WKGyHXCKDfS0S9olxtCG8sS34enFyHhIbteE1tQOMttUhD0OiwEvovxL7L6kZ3KaNub1zwaCdHgj8i"
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
    public function testCreateCheck13()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 6635,
                'point_amount' => 779,
                'point_expires_at' => "2023-04-06T22:27:07.000000+09:00",
                'expires_at' => "2016-11-12T02:31:55.000000+09:00",
                'usage_limit' => 1162,
                'is_onetime' => FALSE,
                'description' => "RUNaSg6OcHEmOeQFO3Ox8qDzSQ0YVNC6SfrLsEgbwDrafzykU4qQWwEl9RBh7JkqQ2DDr8e6Qf8fK7SBxethCuCr4dBSWzD3agMTAvZtCmtviHLHOBHoLHZ5Hyso5u9Osjia9h3ovwp1QqOY"
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
    public function testCreateCheck14()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 3558,
                'point_amount' => 7124,
                'point_expires_in_days' => 5451,
                'point_expires_at' => "2016-12-05T14:20:29.000000+09:00",
                'expires_at' => "2019-07-28T09:48:40.000000+09:00",
                'usage_limit' => 1142,
                'is_onetime' => FALSE,
                'description' => "4bnDyHKg7jf7TRBDusrb62imeaN035TYhQYVT6897JBIT98Ea3vOiHnJbC3RzxMsGYTRQVbbDGQ3KFvfr7wcTIqfZGa8VmM7LxaafZsEiZ4h1kUtLESZUqCMHUv6WI9WlLqAjFFVtovIA"
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
    public function testCreateCheck15()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'money_amount' => 1527,
                'point_amount' => 6967,
                'bear_point_account' => "1b9610e9-ba8a-4ee6-b407-45d96d673f6f",
                'point_expires_in_days' => 761,
                'point_expires_at' => "2021-07-31T01:18:45.000000+09:00",
                'expires_at' => "2023-12-03T14:37:28.000000+09:00",
                'usage_limit' => 5070,
                'is_onetime' => FALSE,
                'description' => "p4uCNZaugRp11iMcrfILoN8ZP7287JaoYb8spv1FcaYx8c7c37K2BoQEomxqdvzxKVxdoit0nsRdkY0a6T9IRy95uKnYj6aDVb3qDkr4zFWttvA7t4NS9wkdOXwioDpfXuzoNbRpuKefj9znX2XonFzQcO5QEOmdgUm73I2kFchNQksZB6ByT"
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
    public function testCreateCheck16()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 1587
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
    public function testCreateCheck17()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 136,
                'description' => "VRQ7O823WFeXCsADfveWv5SetJLuZcB6tdcwibyPvTHbjOWbqqVGNOP2f7Fmc6XSXXM3Y5XPxnjFhfkfYgvABxRhjV7rXm6F6onhtgkbe1I3f"
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
    public function testCreateCheck18()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 4462,
                'is_onetime' => FALSE,
                'description' => "AjiMpnuQgQNZWqLAFAWqZBqyjs43AAjNChMERBnJER6lOBQBwAgsTow2Z3Uka1wds9TY9Bp5VDJiBPB1XeTNJcIKtWyeNc1zzlxW2hgOK8NI225RAsUHuuLFS4058hKDGnyjbxr"
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
    public function testCreateCheck19()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 7110,
                'usage_limit' => 2702,
                'is_onetime' => TRUE,
                'description' => "zxkmTZedVWeLbSdWlORFkWxf1fgII7vrhxHZrOEIH6HNdDlfIrfFFwUdXhpSi4j72IcAxs47XeIzYlwiQaQGyn4Age91Y1cWNDBnv9RrzZK5kL8kuH9QZjAoA9Wjz3xWF4fJVtnG3Avmta20vIgud6F1UgGMHbk2IRflsvwuZxk0nQmXMvg0FcW"
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
    public function testCreateCheck20()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 5589,
                'expires_at' => "2022-05-26T06:48:02.000000+09:00",
                'usage_limit' => 9997,
                'is_onetime' => TRUE,
                'description' => "OSV7LC2s46hfsRF0YKxTClCMK7WZ9OzNLNkjfoAuPSksHUuefNAm0yTlB8Y7jnhE6v0ICVfZpB32LWZFMYYNQ77hNnDgeQkP6BrHNLW2TjgwJkClYsxYjLV6mNckmXWb6cDTOBEvT1fZYoc"
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
    public function testCreateCheck21()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 1602,
                'point_expires_at' => "2021-01-07T10:44:10.000000+09:00",
                'expires_at' => "2019-07-04T12:37:30.000000+09:00",
                'usage_limit' => 8679,
                'is_onetime' => FALSE,
                'description' => "wRLixenA1GWqf2JPqamqpbbu"
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
    public function testCreateCheck22()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 3946,
                'point_expires_in_days' => 6993,
                'point_expires_at' => "2025-02-18T06:57:33.000000+09:00",
                'expires_at' => "2015-10-15T02:08:54.000000+09:00",
                'usage_limit' => 1440,
                'is_onetime' => FALSE,
                'description' => "ARntTDK9f1O2csoG3F55uy56fVMl4ovKtbbNMLWzz4xf72tklHyikvXSu1xVqKMzKtPMLBX6YLvmDqPAbWtHJHRtQBqCHsxk71kIOiSHcZ37iojnk7j2j33qMA4N2evwLBNS7QyCEhtgNDuAnxydB9u3o7ZMeTosoRh4S0mExQI1uCwHXvSS9xqXNJ"
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
    public function testCreateCheck23()
    {
        $client = $this->newClient();
        $request = new Request\CreateCheck(
            "cc86706b-785c-4493-a66a-c9e69de19016",
            [
                'point_amount' => 6236,
                'bear_point_account' => "959483fc-0fe5-4494-b176-6f1a690d12dc",
                'point_expires_in_days' => 7987,
                'point_expires_at' => "2020-10-10T17:23:43.000000+09:00",
                'expires_at' => "2018-03-13T00:17:00.000000+09:00",
                'usage_limit' => 594,
                'is_onetime' => TRUE,
                'description' => "8SeYgA5RTAZIE0d3whSKLF4xWXCgQOdSsQVPrApoltrzZbMjGbqCaDUv1CsWTy6z2FdXbfXavW2HwaVVWGcOvRgfjTir1eeHpnGAvFN5uVHKI7mM3plgJR5fw"
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
