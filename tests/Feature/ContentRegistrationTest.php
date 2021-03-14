<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContentRegistrationTest extends TestCase
{

    use RefreshDatabase;
   /** @test */
   public function an_email_can_be_entered_into_the_contest()
   {


       $this->post('/contest', [
           'email' => 'abc@abc.com',
       ]);

       $this->assertDatabaseCount('contest_entries',1);
   }

   /** @test */
   public function email_is_required()
   {


    $this->post('/contest', [
        'email' => '',
    ]);

    $this->assertDatabaseCount('contest_entries',0);
   }
}
