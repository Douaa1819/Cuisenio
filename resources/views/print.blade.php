<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/link.png')}}" type="image/x-icon " >
    <title>Cuisénio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff4f0;
            color: #333333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .header {
            margin-bottom: 30px;
            text-align: center;
            border-bottom: 2px solid #f2c9c6;
            padding-bottom: 20px;
        }
        .header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #e85a4f;
        }
        .header p {
            font-size: 18px;
            color: #666;
        }
        .content, .steps {
            margin-bottom: 20px;
        }
        .content h2, .steps h2 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        ul, ol {
            padding-left: 40px;
        }
        li {
            font-size: 16px;
            line-height: 1.6;
        }
        i.fa-pepper-hot {
            color: #e85a4f;
            margin-right: 5px;
        }
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
</body>
</html>
