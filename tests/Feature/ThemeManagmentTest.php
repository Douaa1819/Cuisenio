<?php

use App\Models\Theme;

it('Creat Theme', function () {
    $themeData = Theme::factory()->make()->toArray();

    $response = $this->post('/themes', $themeData);

    $this->assertCount(1, Theme::all());
    $response->assertRedirect('/themes');
});

