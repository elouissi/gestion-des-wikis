document.addEventListener('DOMContentLoaded', function() {
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop2'));

    // Ajoutez un gestionnaire d'événements pour tous les boutons avec la classe btn-modifier
    document.querySelectorAll('.btn-modifier').forEach(function(button) {
      button.addEventListener('click', function(event) {
        // Récupérez le nom du tag depuis l'attribut data
        var tagName = event.currentTarget.getAttribute('data-tag-name');

        // Mettez à jour la valeur de l'input dans le formulaire modal avec le nom du tag
        var inputNameTag = document.getElementById('exampleInputEmail1');
        inputNameTag.value = tagName;

        // Affichez le modal
        myModal.show();
      });
    });
  });
 
  function modal_edit (){}