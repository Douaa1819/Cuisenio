<x-head></x-head>

<x-main-layout>
  @section("douaaa")



  @endsection

</x-main-layout>
<x-header page='home' />
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette de Cuisine - Riz Frit Japonais</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">


<main class="container mx-auto px-4 py-8">
    <article class="flex flex-wrap md:flex-nowrap gap-10">
        <div class="md:flex-1">
            <h2 class="text-3xl font-bold mb-4">Riz Frit Japonais Sain</h2>
            <img src="https://via.placeholder.com/600x400" alt="Riz Frit Japonais" class="w-full rounded-lg mb-6">
            <p class="mb-6">Commencez votre journée avec ce bol de petit déjeuner énergisant et sain, plein de saveurs fraîches et de nutriments pour démarrer votre matinée. Cette recette apporte une touche japonaise au riz frit classique, la rendant unique.</p>
            <!--Ingredients, Instructions -->
        </div>
        <aside class="w-full md:w-80 p-6 bg-white rounded-lg shadow">
            <h3 class="text-xl font-semibold mb-4">Informations Nutritionnelles</h3>
            <!-- Nutrition  here -->
            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-4">Autres Recettes</h3>
                <!-- Other recipes l-->
            </div>
        </aside>
    </article>
</main>

<x-footer></x-footer>

</body>
</html>
