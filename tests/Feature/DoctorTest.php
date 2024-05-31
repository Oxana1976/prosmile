<?php

namespace Tests\Feature;

use App\Models\Availability;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\Specialty;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class DoctorTest extends TestCase
{
    use RefreshDatabase;
    protected bool $seed = true;

    public function test_index_displays_doctors()
    {
        $user = User::factory()->create(['email' => 'medic1@mail.com', 'role_id' => Role::where('role', Role::MEDIC)->first()->id]);
        $this->actingAs($user);

        Doctor::factory()->count(3)->create(['user_id' => $user->id]);

        $response = $this->get(route('doctor.index'));

        $response->assertStatus(200);
        $response->assertViewHas('doctors');
    }

    public function test_create_displays_form()
    {
        $user = User::factory()->create(['email' => 'chief_test@mail.com', 'role_id' => Role::where('role', Role::CHIEF)->first()->id]);
        $this->actingAs($user);

        $response = $this->get(route('doctor.create'));

        $response->assertStatus(200);
        $response->assertViewHas('specialties');
    }

    public function test_store_creates_doctor()
    {
        $user = User::factory()->create(['email' => 'chief_test@mail.com', 'role_id' => Role::where('role', Role::CHIEF)->first()->id]);
        $this->actingAs($user);

        Storage::fake('public');
        $file = UploadedFile::fake()->image('photo.jpg');

        $specialties = Specialty::all()->pluck('id')->toArray();

        $data = [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password',
            'language' => 'en',
            'phone_number' => '1234567890',
            'gender' => 'M',
            'inami' => '123456',
            'description' => 'A good doctor',
            'photo' => $file,
            'specialties' => array_slice($specialties, 0, 2) // Prendre les deux premières specialties
        ];

        $response = $this->post(route('doctor.store'), $data);

        $response->assertRedirect(route('doctor.index'));
        $this->assertDatabaseHas('users', ['email' => 'john.doe@example.com']);
        $this->assertDatabaseHas('doctors', ['inami' => '123456']);
    }


    public function test_show_displays_doctor()
    {
        $user = User::factory()->create(['email' => 'medic1@mail.com', 'role_id' => Role::where('role', Role::MEDIC)->first()->id]);
        $this->actingAs($user);

        $doctor = Doctor::factory()->create(['user_id' => $user->id]);
        Availability::factory()->create(['doctor_id' => $doctor->id]);

        $response = $this->get(route('doctor.show', $doctor->id));

        $response->assertStatus(200);
        $response->assertViewHas('doctor', $doctor);
    }

    public function test_edit_displays_form()
    {
        $user = User::factory()->create(['email' => 'chief_test@mail.com', 'role_id' => Role::where('role', Role::CHIEF)->first()->id]);
        $this->actingAs($user);

        $doctor = Doctor::factory()->create(['user_id' => $user->id]);

        $response = $this->get(route('doctor.edit', $doctor->id));

        $response->assertStatus(200);
        $response->assertViewHas('doctor', $doctor);
        $response->assertViewHas('specialties');
    }

    public function test_update_modifies_doctor()
    {
        $user = User::factory()->create(['email' => 'chief_test@mail.com', 'role_id' => Role::where('role', Role::CHIEF)->first()->id]);
        $this->actingAs($user);

        $doctor = Doctor::factory()->create(['user_id' => $user->id]);
        $data = [
            'email' => 'new.email@example.com',
            'phone_number' => '9876543210',
            'description' => 'Updated description',
        ];

        $response = $this->put(route('doctor.update', $doctor->id), $data);

        $response->assertStatus(200);
        $doctor->refresh();
        $this->assertEquals('new.email@example.com', $doctor->user->email);
        $this->assertEquals('9876543210', $doctor->user->phone_number);
        $this->assertEquals('Updated description', $doctor->description);
    }

    public function test_filter_displays_filtered_doctors()
    {
        $user = User::factory()->create(['email' => 'medic1@mail.com', 'role_id' => Role::where('role', Role::MEDIC)->first()->id]);
        $this->actingAs($user);

        // Utiliser une specialty existante
        $specialty = Specialty::first();
        $doctor = Doctor::factory()->create(['user_id' => $user->id]);
        $doctor->specialties()->attach($specialty->id);

        $response = $this->get(route('doctors.filter', ['specialty' => $specialty->id]));

        $response->assertStatus(200);
        $response->assertViewHas('doctors', function ($viewDoctors) use ($doctor) {
            return $viewDoctors->contains($doctor);
        });
    }
}

