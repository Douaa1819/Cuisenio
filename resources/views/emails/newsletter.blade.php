<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <title>New Recipe Notification</title>
</head>

<body
    style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; background-color: #f4f4f4; color: #333; padding: 20px;">
    <div
        style="max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <header style="text-align: center; border-bottom: 2px solid #eee; padding-bottom: 20px; margin-bottom: 20px;">
        </header>


        <h1 style="font-size: 16px; color: #666;">A new recipe has been added to our Collection!</h1>

        <h2 style="font-size: 20px; color: #333;">{{ $recipeTitle }}</h2>

        <p style="font-size: 16px; color: #666;">{{ $recipeDescription }}</p>

        <p style="font-size: 16px; margin-top: 20px;">Check out the full details on our website!</p>
    </div>

        <footer style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 2px solid #eee;">
            <p style="font-size: 14px; color: #ffafaf;">© 2024 Cuisenio. All rights reserved.</p>
        </footer>
   
</body>

</html>
