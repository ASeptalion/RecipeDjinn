<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Recipe Website</title>
</head>
<body>
    <header>
        <h1>My Recipe Website</h1>
    </header>

    <main>
        <section id="recipes">
            <!-- Recipe cards will go here -->
        </section>

        <section id="add-recipe">
            <h2>Add a Recipe</h2>
            <form id="recipe-form">
                <label for="recipe-name">Recipe Name:</label>
                <input type="text" id="recipe-name" required>

                <label for="ingredients">Ingredients:</label>
                <textarea id="ingredients" rows="4" required></textarea>

                <label for="instructions">Instructions:</label>
                <textarea id="instructions" rows="8" required></textarea>

                <button type="submit">Add Recipe</button>
            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
