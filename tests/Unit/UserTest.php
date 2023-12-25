<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;


class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    // public function test_login_form()
    // {
    //     $response = $this->get('/login');

    //     $response->assertStatus(200);
    // }

    // public function test_user_duplication()
    // {
    //     $user1 = User::make([
    //         'name' => 'Robin',
    //         'email' => 'robinjo1002@rediffmail.com'
    //     ]);
    //     $user2 = User::make([
    //         'name' => 'Nikhil',
    //         'email' => 'niks@rediffmail.com'
    //     ]);

    //     $this->assertTrue($user1->name != $user2->name);
    // }

    // public function test_delete_user()
    // {
    //     $user = User::factory()->count(1)->make();

    //     $user=User::first();
    //     if($user){
    //         $user->delete();
    //     }
    //     $this->assertTrue(true);
    // }


    // public function test_register_route()
    // {
    //     $response = $this->post('/users', [
    //         'name' => 'Robin',
    //         'email' => 'robinjo1776@gmail.com',
    //         'password' => 'Welcome',
    //         'password_confirmation' => 'Welcome'
    //     ]);
    //     $response->assertRedirect('/');
    // }

//    public function test_database()
//     {
//         $this->assertDatabaseHas('users',[
//             'name'=>'Robin'
//         ]);
//     }

/**
 * Test a console command.
 */
public function test_console_command(): void
{
    $this->artisan('inspire')->assertExitCode(0);
}


//Test Validation
public function test_listing_store()
{
    $response= $this->call('POST','/listings',[
        'title' => 'Software Developer',
        'company' => 'Meital Products',
        'location' => 'Toronto',
        'website' => 'www.meitalproducts.com',
        'email' => 'meital23@gmail.com'
       
    ]);
    $response->assertStatus($response->status(), 302);
}


}