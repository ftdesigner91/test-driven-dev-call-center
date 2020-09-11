<?php

namespace Tests\Unit;


use App\Customer;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomersTest extends TestCase
{	
	use RefreshDatabase;
    
    /** @test */
    public function a_customer_return_its_fullname()
    {

    	$customer = factory(Customer::class)->create();
    	$full_name = $customer->first_name .' '. $customer->middle_name .' '. $customer->last_name;
    	$this->asseetTrue($full_name == $customer->full_name());

    }
}
