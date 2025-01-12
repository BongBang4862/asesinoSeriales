// /Applications/XAMPP/xamppfiles/htdocs/asesinosseriales/Assets/js/pages/principal/ver.js

// Function to create a character card
function createCharacterCard(character) {
    // Create card container
    const card = document.createElement('div');
    card.className = 'character-card';

    // Create character name element
    const name = document.createElement('h2');
    name.textContent = character.nombre;
    card.appendChild(name);

    // Create character image element
    const image = document.createElement('img');
    image.src = base_url + character.imagen_url;
    image.alt = character.nombre;
    card.appendChild(image);

    // Create character description element
    const description = document.createElement('p');
    description.textContent = character.biografia;
    card.appendChild(description);

    // Append card to the document body or a specific container
    document.body.appendChild(card);
}



createCharacterCard(data);