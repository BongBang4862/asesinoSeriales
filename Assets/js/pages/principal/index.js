document.addEventListener('DOMContentLoaded', function() {
   
            const galleryContainer = document.getElementById('gallery-container');
            data.forEach(asesino => {
              
                const asesinoElement = document.createElement('div');
                asesinoElement.classList.add('gallery-item');
                
                const asesinoImage = document.createElement('img');
                asesinoImage.src = asesino.imagen_url; // URL de la imagen del asesino
                asesinoImage.alt = asesino.name;
                
                const asesinoName = document.createElement('h3');
                asesinoName.textContent = asesino.nombre;

                const asesinoLink = document.createElement('a');
                asesinoLink.href = base_url + 'principal/ver/'+ asesino.id; // URL del asesino concatenada con la base URL
                asesinoLink.appendChild(asesinoElement);
                
                asesinoElement.appendChild(asesinoImage);
                asesinoElement.appendChild(asesinoName);
                galleryContainer.appendChild(asesinoLink);
            });
        
        
});