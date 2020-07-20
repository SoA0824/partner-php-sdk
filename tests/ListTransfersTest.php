<?php
// DO NOT EDIT: File is generated by code generator.
namespace Pokepay;

class ListTransfers extends TestCase
{
    public function testListTransfers0()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers();
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers1()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['transfer_types' => ["exchange", "topup", "transfer", "payment"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers2()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['transaction_types' => ["exchange"], 'transfer_types' => []]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers3()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['is_modified' => TRUE, 'transaction_types' => ["exchange"], 'transfer_types' => []]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers4()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['private_money_id' => "692946fa-caf8-4659-b5f1-27358817256f", 'is_modified' => TRUE, 'transaction_types' => ["exchange", "topup"], 'transfer_types' => ["topup", "payment", "transfer", "exchange"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers5()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['transaction_id' => "0a9b042d-e059-4262-ad2d-59da10a941ce", 'private_money_id' => "cc13e321-d2d1-4b1e-b521-c4acc633ab0c", 'is_modified' => TRUE, 'transaction_types' => ["exchange", "topup"], 'transfer_types' => ["transfer", "payment", "exchange", "topup"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers6()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['customer_name' => "RjYCd9VgVml7clbEIwdtWIAvJSBmyFBWDHEO7iqBZifi9DDTwfPYErnyC2iNFJCPlicRB7EMXkeNOesn7HEsy35W4cceWyqr41hjhWNwwrEYI1WHrwnJFFH9aLBcsvm5K", 'transaction_id' => "c61d2657-7a94-4dc6-ba72-aba6066bc55b", 'private_money_id' => "c0ea7dc1-0201-4ebb-b548-ab1055114fdf", 'is_modified' => TRUE, 'transaction_types' => ["topup", "transfer"], 'transfer_types' => ["exchange"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers7()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['customer_id' => "6ee0c0ef-9b5a-40d9-a26d-1e8efd78adc7", 'customer_name' => "VP1ivY5cLULd5XT2uGL9KIPvzlCPEgUFtx3YeNT2Z2yT9ZerohaueA7lSQywlEPAC0Bkeu1Nm0FTlccpQT4JkOk5Ii20DgiMdYfvj4Ddrl7Lz5XjFDKLFpdlmkJKRrO8SzYzdfXbe6d3oyh8RbW1lWY61aq", 'transaction_id' => "bebb672d-6e77-4063-8634-6d54640eca18", 'private_money_id' => "d218db9c-3567-4c85-809e-06707be88a50", 'is_modified' => TRUE, 'transaction_types' => ["topup", "exchange"], 'transfer_types' => ["transfer", "exchange", "payment"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers8()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['shop_name' => "H1hgBFIYwnTaFU3rVojEIGGLbgz1PG4AFcFQDNUCPQpKP1JspyrEmQSyvMuDpJBiUydlfQmU4zdesIZrvf8Vf2GRzBV9WvpqIkjBZLyXGpGcb1OZ8uHuN", 'customer_id' => "c41a0d55-f688-4eee-8146-ad043d1f333a", 'customer_name' => "n5DqQ1ZvnvgUHS6CobIaiO4nZkXY3ViQlS2hfkxePn", 'transaction_id' => "cb82d9ff-c457-4fa8-a06f-6cba62868461", 'private_money_id' => "cae31e92-f507-4432-8638-8faa86077aff", 'is_modified' => TRUE, 'transaction_types' => [], 'transfer_types' => ["transfer", "exchange"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers9()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['shop_id' => "fb42da76-d6db-42b2-9127-1f30cc24171c", 'shop_name' => "Y7puoRjbIwfIGbfAlmTG782MtTpVh8avBvH5acnFsEKPJeVdwRQee8sJfMqkSMx2vjZHu41KuJxnPX4F4fsUWvs2dNV2mBHnNtWw0Yfn2oqmAbXUqiPPr8jEcxjh8ZbIPBotfs5Cwdm4UkzwsU7TKS1ClE7z1niMarYc2wzLS5Fm1Vt2bsAYmBNtXRX9g9", 'customer_id' => "84a5da96-f3d7-429e-ae19-175dd69ae29b", 'customer_name' => "4gA04NEZ6fCE68C4gvgJ7YWqnmFl37CxB2INv", 'transaction_id' => "3650aecf-2154-4092-8198-d550ef07955a", 'private_money_id' => "45fb77b0-d45a-4333-bdd9-7e50a1e54ea4", 'is_modified' => FALSE, 'transaction_types' => ["transfer", "payment", "exchange"], 'transfer_types' => []]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers10()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['per_page' => 6013, 'shop_id' => "b8416c9d-457c-4689-b8d3-474fd2f49105", 'shop_name' => "20ftQkFpzIUtuloxb1fjcCgjMTRnObGRjjcm3nimephKaRcUNwazrpftB7txlWFzmLG35DvYh5tv4ustHV6vdhMpH1N6qMeDl5D3hZ35aqt07HHsORRWcMopYASE22B1zZoVqUEonXi89GyjkYUNjvmRZuEEodTdV028D4hRdx3t6HPxHPVcDi9h85UGhbhBgRlUsdZgl6ELdnYQz2TExxtO018lu7DFXAYXYmTGeIe2sX", 'customer_id' => "740fbf73-77fa-4900-884a-f4000e1bc5de", 'customer_name' => "6Qqvd8rHLLa0tCwpjOCpeLYaKfC0A6Xk9dsEDl6v9DeGkEjJ3Yd6yk6h2HJq6nP672zczQRwLadHxMaPCSFUM2BYcJQwjOflsVaxEaBRlcsQTjX6CuyVr9eiMYTH5uheyg6QxylNQhvtCOgd2jUhq1TBjaPIiFcg2rTZpqepkB", 'transaction_id' => "aee2154c-f51b-43cd-a8d8-763a207416dd", 'private_money_id' => "e3c701b6-7127-4a3f-8466-ce6fe34c615d", 'is_modified' => FALSE, 'transaction_types' => [], 'transfer_types' => ["topup", "payment"]]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers11()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['page' => 4236, 'per_page' => 1740, 'shop_id' => "da544d37-b11d-4762-b140-238656fc8c99", 'shop_name' => "Ve9XRGaXSxPlvyF4OMGXog5tR1s0ZuEPItvfOfZ1CqXhiUcU5aJNmjaxVHMP5elLOGEtRV17hUHy6vMdS1K4zE9iBggU0hYy4GJukUL37xWx0Ewi6zaxE778Y41G36ujDF", 'customer_id' => "0a2e418b-8943-4290-ae81-a648f9775cf4", 'customer_name' => "l31niI9qcOMpHGoVssIl7z0v6DgMiQ3yDqZe2FGWczaZ1qxbytYcrrcJLjxGLlnyO009vc3HEdAtc8msmSZOlE4WWy314Tdr2TUfz5N1Of4IWxFKeORxEf3iRb7eC3m", 'transaction_id' => "2fcb98dd-8231-479f-b4cc-fad8411909b9", 'private_money_id' => "08c3bfff-4faf-41b0-bb82-718f80133d01", 'is_modified' => TRUE, 'transaction_types' => ["transfer"], 'transfer_types' => []]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers12()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['to' => "2020-01-31T19:10:08.000000+09:00", 'page' => 4251, 'per_page' => 3476, 'shop_id' => "29900317-0934-4fb7-9626-e75ebd241a44", 'shop_name' => "1yznE4RaRRDJYMRcvD0iymQ44ZfhAbd9FWsPqaNtCkSBwiKwpy", 'customer_id' => "a39b5f98-901f-44fc-a875-6215aacd772b", 'customer_name' => "d4VlNE0IORCEZA7WcsL9c9o6KDwr8dlSfT5wnVEEH5hxdNUw9QoMWuV3TxmkhwZv6SnWdCDrvAiSYZd8t0xgzrQaDwQ8dY4erNpyN5u4dyuXKIyIzTAPZfwLLV", 'transaction_id' => "55f1e4ed-0759-46c8-8203-9e045be9d279", 'private_money_id' => "2e983e91-ce77-4661-923b-3d197abb60b6", 'is_modified' => FALSE, 'transaction_types' => [], 'transfer_types' => []]);
        try {
            $response = $client->send($request);
            $this->assertTrue(true);
        } catch (Error\HttpRequest $e) {
            $this->assertNotSame(400, $e->code);
        } catch (Error\ApiConnection $e) {
            $this->assertTrue(false);
        }
    }
    public function testListTransfers13()
    {
        $client = $this->newClient();
        $request = new Request\ListTransfers(['from' => "2021-05-08T11:52:21.000000+09:00", 'to' => "2017-08-15T13:53:20.000000+09:00", 'page' => 4857, 'per_page' => 2855, 'shop_id' => "6b9d828b-d828-4ba3-94b8-ccbaaedb8a79", 'shop_name' => "QsSKwgwsUCSCvBil5LeIy8", 'customer_id' => "753c1e73-30bc-46b5-8b37-d469974e0b9d", 'customer_name' => "5WYEHieO6IDPpLWx6gZpPQ6oAm7bfDC2pctLAzdTI1nunLebGL0j03Hucpajh14ac5iFBoTO7oq9IVwIEDUZFEwiv4b3CAPr1aK3Q9h6mSvw1XVfwfGcDDSmft55Ltav7yLp5h8gOhrec0P05nEsJywkNeYQ69ZAcDjRLqTse2ioHL0NFam7xc5D52OG1ipb3RJ9TPETnk4j3llQgXfvNJ4ONVEbbXreKhovSB3XRoFJSUxcA7sJzhWXoLVi1m", 'transaction_id' => "a70d4374-316f-48fb-b2b6-5a585704e878", 'private_money_id' => "2c9bbbed-173a-4f7b-b680-63e978d9f539", 'is_modified' => FALSE, 'transaction_types' => ["payment"], 'transfer_types' => ["transfer", "topup", "payment"]]);
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
