Feature: listerIdentifiants
  Liste des identifiants. L'utilisateur ne doit voir que ses identifiants.
 
Scenario: Création d'un identifiant avec un utilisateur puis connexion avec un autre utilisateur. Le second ne doit pas voir l'identifiant créé précédemment.
  Given Je suis connecté entant que "ndewez"
  And La base de données est propre
  When Je me rends à l'adresse "/identifiant"
  Then Le formulaire de saisie d'un identifiant s'affiche
  When Je remplis le champ "identifiant_libelle" avec la valeur "Test ndewez"
  And Je remplis le champ "identifiant_contenu" avec la valeur "contenu ndewez"
  And Je valide le formulaire
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez" est affiché dans le tableau
  Given je me déconnecte
  And Je suis connecté entant que "asalome"
  When Je clique sur le lien "Identifiants"
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez" n'est pas affiché dans le tableau
  