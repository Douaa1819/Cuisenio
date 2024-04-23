<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklist de Recettes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <ul id="booklistView">
    </ul>
    <button onclick="printBooklist()">Print Booklist</button>

    <script>
        let booklist = [];

        function addToBooklist(recipeId, recipeTitle) {
            booklist.push({ id: recipeId, title: recipeTitle });
            displayBooklist();
        }

        function displayBooklist() {
            let listHtml = booklist.map(recipe => `<li>${recipe.title} - <button onclick="removeFromBooklist(${recipe.id})">Remove</button></li>`).join('');
            document.getElementById('booklistView').innerHTML = listHtml;
        }

        function removeFromBooklist(recipeId) {
            booklist = booklist.filter(recipe => recipe.id !== recipeId);
            displayBooklist();
        }

        function printBooklist() {
            $.ajax({
                url: 'generate_pdf.php',
                type: 'POST',
                data: { booklist: booklist },
                success: function(response) {
                    window.open(response.url);
                }
            });
        }
    </script>
</body>
</html>
