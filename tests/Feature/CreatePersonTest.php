<?php

namespace Tests\Feature;

use App\Person;
use App\Contact;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;

class CreatePersonTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        NoCaptcha::shouldReceive('verifyResponse')
            ->once()
            ->andReturn(true);

        $response = $this->post('/person', $data = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'title' => $this->faker->title,
            'age' => $this->faker->numberBetween(0, 99),
            'street' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'zip' => $this->faker->postcode,
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'g-recaptcha-response' => '1',
        ]);

        $this->assertCount(1, Person::all());
        $this->assertDatabaseHas('people', [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'title' => $data['title'],
            'age' => $data['age'],
        ]);
        $person = Person::first();

        $this->assertCount(1, Contact::all());
        $this->assertDatabaseHas('contacts', [
            'person_id' => $person->getKey(),
            'street' => $data['street'],
            'city' => $data['city'],
            'zip' => $data['zip'],
            'email' => $data['email'],
            'phone' => $data['phone'],
        ]);

        $response->assertRedirect("/person/{$person->getKey()}");
        $response->assertSessionHas('success');
    }
}
