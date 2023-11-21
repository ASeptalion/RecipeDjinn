document.addEventListener('DOMContentLoaded', function () {
    const recipeForm = document.getElementById('recipe-form');
    const recipesSection = document.getElementById('recipes');

    recipeForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const recipeName = document.getElementById('recipe-name').value;
        const ingredients = document.getElementById('ingredients').value;
        const instructions = document.getElementById('instructions').value;

        displayRecipe(recipeName, ingredients, instructions);

        // Clear the form fields after submission
        recipeForm.reset();
    });

    function displayRecipe(name, ingredients, instructions) {
        const recipeCard = document.createElement('div');
        recipeCard.classList.add('recipe-card');

        recipeCard.innerHTML = `
            <h3>${name}</h3>
            <p><strong>Ingredients:</strong> ${ingredients}</p>
            <p><strong>Instructions:</strong> ${instructions}</p>
        `;

        recipesSection.appendChild(recipeCard);
    }
});
