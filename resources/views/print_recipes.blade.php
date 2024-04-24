{{-- <x-head></x-head> --}}
    <style>
      .recipe { margin-bottom: 20px; }
        .no-print { display: block; }
        @media print {
            .no-print { display: none; }
        }

        body { font-family: Arial, sans-serif; }
  

        .container {
            padding: 20px;
        }

        .header {
            margin-bottom: 20px;
            text-align: center;
        }

        .content,
        .steps {
            margin-bottom: 10px;
        }

        ul,
        ol {
            padding-left: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
        }

        .button-remove {
            background-color: #f44336;
        }
    </style>

<script>
    function printPage() {
        let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
        if (booklist.length > 0) {
            let url = `/download-booklist?ids=${encodeURIComponent(JSON.stringify(booklist))}`;
            window.location.href = url;
        } else {
            alert('Your booklist is empty.');
        }
    }
</script>
</head>

<body>
    <div id="recipesList">
        @foreach ($recipes as $recipe)
        <div class="recipe-container" id="recipe-{{ $recipe->id }}">
                <h1>{{ $recipe->title }}</h1>
                <p>{{ $recipe->description }}</p>
                @if ($recipe->image)
                <div class="overflow-hidden">
                    <img src="{{ Storage::url($recipe->image->url) }}" alt="Recipe Image" class="w-52 overflow-hidden rounded-lg shadow-md">


                </div>

                @endif
                <div class="content">
                    <h2><i class="fas fa-pepper-hot"></i> Ingredients</h2>
                    <ul>
                        @foreach (explode(',', $recipe->list_ingredients) as $ingredient)
                            <li>{{ $ingredient }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="steps">
                    <h2>Steps</h2>
                    <ol>
                        @foreach (explode('.', $recipe->steps) as $step)
                            <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <button  class="no-print" onclick="removeRecipe({{ $recipe->id }})">Remove</button>

    </div>
    @endforeach
    </div>
    <button class="no-print" onclick="printPage()">Download PDF</button>


    <script>
   

   document.addEventListener('DOMContentLoaded', function() {
            displayBooklist();

            function displayBooklist() {
                const recipesList = document.getElementById('recipesList');
                const booklist = JSON.parse(localStorage.getItem('booklist')) || [];
            }

            window.removeRecipe = function(recipeId) {
                let booklist = JSON.parse(localStorage.getItem('booklist')) || [];
                booklist = booklist.filter(id => id !== recipeId);
                localStorage.setItem('booklist', JSON.stringify(booklist));
                displayBooklist(); 
            };

          
        });
    </script>
</body>

</html>
