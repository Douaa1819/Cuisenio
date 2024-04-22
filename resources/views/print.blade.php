<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Recipe</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { padding: 20px; }
        .header { margin-bottom: 20px; }
        .content, .steps { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $recipe->title }}</h1>
            <img src="{{ asset('storage/'.$recipe->image) }}" alt="Recipe Image" style="width:100%; max-width:600px;">
        </div>
        <div class="content">
            <h2>Ingredients</h2>
            <ul>
                @foreach(explode(',', $recipe->list_ingredients) as $ingredient)
                    <li>{{ $ingredient }}</li>
                @endforeach
            </ul>
        </div>
        <div class="steps">
            <h2>Steps</h2>
            <ol>
                @foreach(explode('.', $recipe->steps) as $step)
                    <li>{{ $step }}</li>
                @endforeach
            </ol>
        </div>
        <button onclick="window.print()">Print this recipe</button>
    </div>
</body>
</html>
