<?php

use App\Models\SiteInfo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

test('admin can access site info page and update singleton record', function () {
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@anshivya.com',
        'password' => Hash::make('password'),
    ]);

    $this->actingAs($admin)
        ->get('/admin/site-info')
        ->assertStatus(200)
        ->assertSee('Site Info & Map Settings');

    $this->actingAs($admin)
        ->post('/admin/site-info', [
            'mobile_1' => '+91 99999 88888',
            'mobile_2' => '+91 77777 66666',
            'email_1' => 'contact@anshivya.com',
            'email_2' => 'support@anshivya.com',
            'full_address' => 'New Office Tower, S.G. Highway, Ahmedabad',
            'map_url' => 'https://www.google.com/maps/embed?pb=sampletestmap',
        ])
        ->assertRedirect('/admin/site-info');

    $this->assertDatabaseHas('site_infos', [
        'id' => 1,
        'mobile_1' => '+91 99999 88888',
        'email_1' => 'contact@anshivya.com',
        'full_address' => 'New Office Tower, S.G. Highway, Ahmedabad',
    ]);

    // Updating again must update the existing record (not create a second row)
    $this->actingAs($admin)
        ->post('/admin/site-info', [
            'mobile_1' => '+91 12345 67890',
            'email_1' => 'updated@anshivya.com',
            'full_address' => 'Updated Address, Ahmedabad',
            'map_url' => 'https://www.google.com/maps/embed?pb=updatedmap',
        ])
        ->assertRedirect('/admin/site-info');

    $this->assertEquals(1, SiteInfo::count());
    $this->assertDatabaseHas('site_infos', [
        'id' => 1,
        'mobile_1' => '+91 12345 67890',
        'email_1' => 'updated@anshivya.com',
    ]);
});

test('public contact page displays site info from database', function () {
    SiteInfo::create([
        'mobile_1' => '+91 88888 11111',
        'mobile_2' => '+91 88888 22222',
        'email_1' => 'info@anshivya-group.com',
        'email_2' => 'careers@anshivya-group.com',
        'full_address' => 'Titanium Square, Thaltej, Ahmedabad',
        'map_url' => 'https://www.google.com/maps/embed?pb=contactpagemap',
    ]);

    $this->get('/contact')
        ->assertStatus(200)
        ->assertSee('+91 88888 11111')
        ->assertSee('info@anshivya-group.com')
        ->assertSee('Titanium Square, Thaltej, Ahmedabad')
        ->assertSee('https://www.google.com/maps/embed?pb=contactpagemap');
});
