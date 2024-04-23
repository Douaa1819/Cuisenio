<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Recipe</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
        }
        .header {
            margin-bottom: 20px;
            text-align: center;
        }
        .content, .steps {
            margin-bottom: 10px;
        }
        ul, ol {
            padding-left: 20px;
        }

        /* .footer {
            text-align: center;
            padding: 20px;
            background-color: #f9d6e4;
            margin-top: 20px;
            border-radius: 8px;
        }
        .footer h3 {
            color: #333;
            margin-bottom: 10px;
        }
        .footer p {
            color: #555;
            margin-bottom: 10px;
        }
        .footer a {
            color: #d6336c;
            text-decoration: none;
            font-weight: bold;
        } */
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $recipe->title }}</h1>
            <p>{{ $recipe->description }}</p>
            
        </div>
        <div class="content">
            <h2><i class="fas fa-pepper-hot"></i> Ingredients</h2>
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
    </div>
    
    {{-- <footer class="footer">
        <h3>Join Cuisenio Today!</h3>
        <p>Explore thousands of recipes and sharpen your cooking skills!</p>
        <a href="#">Learn More</a>
    </footer>
</body> --}}
</html>
