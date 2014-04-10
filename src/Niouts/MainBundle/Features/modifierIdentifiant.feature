Feature: modifierIdentifiant
  Création, modification d'un identifiant.  
 
Scenario: Création d'un identifiant sans erreur puis modification sans erreur
  Given Je suis connecté entant que "ndewez"
  And La base de données est propre
  When Je me rends à l'adresse "/identifiant"
  Then Le formulaire de saisie d'un identifiant s'affiche
  When Je remplis le champ "identifiant_libelle" avec la valeur "Test ndewez 1"
  And Je remplis le champ "identifiant_contenu" avec la valeur "contenu ndewez 1"
  And Je valide le formulaire
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez 1" est affiché dans le tableau
  And Un lien "Modifier" est présent devant chaque identifiant
  When Je clique sur le lien "Modifier cet identifiant" en face de l'identifiant "Test ndewez 1"
  Then Le formulaire de saisie d'un identifiant s'affiche
  When Je remplis le champ "identifiant_libelle" avec la valeur "Test ndewez ! ----- 2"
  And Je remplis le champ "identifiant_contenu" avec la valeur "contenu ndewez ! ----- 2"
  And Je valide le formulaire
  Then Le message "L'identifiant a été modifié" s'affiche
  When Je me rends à l'adresse "/identifiants"
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez ! ----- 2" est affiché dans le tableau
  And L'identifiant "Test ndewez 1" n'est pas affiché dans le tableau
  
Scenario: Création d'un identifiant avec erreur puis modification avec erreur
  Given Je suis connecté entant que "ndewez"
  When Je me rends à l'adresse "/identifiant"
  Then Le formulaire de saisie d'un identifiant s'affiche
  When Je valide le formulaire
  Then Un message d'erreur relatif au formulaire s'affiche   
  When Je remplis le champ "identifiant_libelle" avec la valeur "Test ndewez 2"
  And Je valide le formulaire
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez 2" est affiché dans le tableau
  And Un lien "Modifier" est présent devant chaque identifiant
  When Je clique sur le lien "Modifier cet identifiant" en face de l'identifiant "Test ndewez 2"
  Then Le formulaire de saisie d'un identifiant s'affiche
  When Je remplis le champ "identifiant_libelle" avec la valeur ""
  And Je remplis le champ "identifiant_contenu" avec la valeur ""
  And Je valide le formulaire
  Then Un message d'erreur relatif au formulaire s'affiche   
  When Je remplis le champ "identifiant_libelle" avec la valeur "Test ndewez 2 ----- 2"
  And Je valide le formulaire
  Then Le message "L'identifiant a été modifié" s'affiche
  When Je me rends à l'adresse "/identifiants"  
  Then La liste des identifiants s'affiche sous forme de tableau
  And L'identifiant "Test ndewez 2 ----- 2" est affiché dans le tableau 
  