<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can store a theme and its image', function () {
    Storage::fake('public');  // Simuler le système de fichiers

    $file = UploadedFile::fake()->image('theme.jpg');
    $fileName = $file->hashName(); // Obtenir le nom de fichier généré

    $response = $this->post('/themes', [
        'name' => 'Nature Theme',
        'theme_file' => $file  // Fichier simulé
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success', 'Theme added successfully!');

    $this->assertDatabaseHas('themes', [
        'name' => 'Nature Theme'
    ]);

    // Utiliser exists pour vérifier que le fichier est stocké
    $exists = Storage::disk('public')->exists('themes/' . $fileName);
    expect($exists)->toBeTrue();
});