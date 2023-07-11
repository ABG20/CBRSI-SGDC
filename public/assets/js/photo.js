  
    // Récupérer les éléments du formulaire
const photoInput = document.getElementById('photoInput');
const photoPreview = document.getElementById('photoPreview');

// Écouter les changements dans le champ de sélection de fichier
photoInput.addEventListener('change', function(event) {
  const file = event.target.files[0];
  
  if (file) {
    // Créer un objet URL pour la photo sélectionnée
    const imageURL = URL.createObjectURL(file);
    
    // Afficher l'aperçu de la photo
    photoPreview.src = imageURL;
  }
});