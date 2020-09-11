<?php

namespace Tests\Feature;
use App\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomersFeatureTest extends TestCase
{
    
    use RefreshDatabase;

    /** @test */
    public function a_user_can_see_all_the_customers()
    {

        $customers = factory(Customer::class, 5)->create();

        $response = $this->get('/customers');

        $response->assertStatus(200);   
        $response->assertSee($customers[0]->last_name);
    }

    /** @test */
    public function a_user_can_see_a_single_customers()
    {

        $customer = factory(Customer::class)->create();

        $response = $this->get('/customers/' . $customer->id);
        
        $response->assertSee($customer->first_name);
    }

     /** @test */
    public function a_user_can_create_a_customers()
    {

        $this->withouExceptionHandling();
        
        $response = $this->get('/customers/create');

        $response->assertSee('create customer');
    }

    /** @test */
    public function a_user_can_store_a_new_customers()
    {

        $this->withouExceptionHandling();

        $form_fields = factory(Customer::class)->raw();

        $response = $this->post('/customers/', $form_fields);
        
        $response->assertDatabaseHas('customer', $form_fields);

        $response->assertRedirect('/customer');


    }

}
