<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo e(asset('images/link.png')); ?>" type="image/x-icon " >
    <title>Cuisénio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        @page {
            size: A4 portrait; 
            margin: 2cm; 
        }
        .recipe-container img {
  width: 100%;
  margin-bottom: 10px;
}
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7; 
            color: #333;
        }

        .cover {
            background: linear-gradient(135deg, #fdeeee 0%, #e0c3fc 100%); background */
            color: #333333;
            text-align: center;
            padding: 20px 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 80vh; 
        }

        .logo {
            width: 180px; 
            margin: 0 auto 30px; 
        }

        h1 {
            font-size: 48px;
            font-weight: 700;
            color: #b71c1c; 
            margin-bottom: 10px;
        }
        p {
            font-size: 20px;
            font-weight: 300;
            color: #666;
            max-width: 600px;
            margin: 20px auto;
        }

        .recipes {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 40px 20px;
            gap: 20px;
        }

        .recipe-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            width: calc(50% - 20px);
        }

        .recipe-container h1, .recipe-container h2 {
            color: #e85a4f; 
        }

        .ingredients ul, .steps ol {
            list-style: none;
            padding-left: 20px;
        }

        li {
            padding: 8px 0;
        }

        .remove-button, .print-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 16px;
            text-align: center;
            background-color: #4CAF50;
            margin-top: 20px;
        }

        .remove-button {
            background-color: #f44336;
        }

        .print-button {
            margin-top: 40px;
            margin-bottom: 20px;
            align-self: center; 
        }

        @media print {
            .remove-button, .print-button, .cover {
                display: none; 
            }

            body, html {
                background: #fff;
                color: #000;
            }

            .recipes {
                page-break-after: always;
            }
        }
    </style>


<script>
document.addEventListener('DOMContentLoaded', function() {
    window.printPage = function(event) {
        event.preventDefault();  
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        if (booklist.length > 0) {
            let url = `/download-booklist?ids=${encodeURIComponent(JSON.stringify(booklist))}`;
            window.open(url, '_blank'); 
        } else {
            alert('Your booklist is empty.');
        }
    };})
</script>
</head>

<body>
    <body>
        <div class="cover">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Cuisenio Logo" class="logo">
            <h1>Welcome to Cuisenio</h1>
            <p>Explore a world of delicious delights. Each page of this book is filled with inspiration to elevate your culinary skills and tantalize your taste buds. Enjoy the journey through flavors!</p>
        </div>
        <div id="recipesList" class="recipes">
            <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="recipe-container" id="recipe-<?php echo e($recipe->id); ?>">
                <h1><?php echo e($recipe->title); ?></h1>
                <?php if($recipe->image && Storage::disk('public')->exists($recipe->image->url)): ?>
                <img src="<?php echo e(Storage::url($recipe->image->url)); ?>" alt="Recipe Image" class="w-52 overflow-hidden rounded-lg shadow-md">
            <?php else: ?>
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Default Image" class="w-52 overflow-hidden rounded-lg shadow-md">
            <?php endif; ?>
                <p><?php echo e($recipe->description); ?></p>
                <div class="ingredients">
                    <h2>Ingredients</h2>
                    <ul>
                        <?php $__currentLoopData = explode(',', $recipe->list_ingredients); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($ingredient); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="steps">
                    <h2>Steps</h2>
                    <ol>
                        <?php $__currentLoopData = explode('.', $recipe->steps); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($step); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </div>
                <button class="remove-button" onclick="removeRecipe(<?php echo e($recipe->id); ?>)">
                    <i class="fas fa-trash"></i> Remove
                </button>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button class="print-button" onclick="printPage(event)">
            <i class="fas fa-download"></i> Download PDF
        </button>
    </body>
    </html>

<script>



   document.addEventListener('DOMContentLoaded', function() {
            displayBooklist();

            function displayBooklist() {
                const recipesList = document.getElementById('recipesList');
                const booklist = JSON.parse(localStorage.getItem('booklist')) || [];
            }
            window.removeRecipe = function(recipeId) {
        const recipeElement = document.getElementById('recipe-' + recipeId);
        if (recipeElement) {
            recipeElement.parentNode.removeChild(recipeElement);
            recipeElement.remove();
        }
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        booklist = booklist.filter(id => id !== recipeId);
        localStorage.setItem('booklist', JSON.stringify(booklist));
    };
          
        });
    </script>

<?php /**PATH C:\laragon\www\Cuisenio\resources\views\print_recipes.blade.php ENDPATH**/ ?>