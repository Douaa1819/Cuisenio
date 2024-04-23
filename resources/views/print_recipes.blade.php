<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Recipes</title>
</head>
<body>
    @foreach ($recipes as $recipe)
        <div>
            <h1>{{ $recipe->title }}</h1>
            <p>{{ $recipe->description }}</p>
            <img src="{{ Storage::url($recipe->image) }}" alt="Recipe Image">
        </div>
        <hr>
    @endforeach
</body>
</html>


</div>