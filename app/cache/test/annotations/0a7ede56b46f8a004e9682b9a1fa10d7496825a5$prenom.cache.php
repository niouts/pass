<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Column":9:{s:4:"name";s:6:"prenom";s:4:"type";s:6:"string";s:6:"length";i:50;s:9:"precision";i:0;s:5:"scale";i:0;s:6:"unique";b:0;s:8:"nullable";b:0;s:7:"options";a:0:{}s:16:"columnDefinition";N;}i:1;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":2:{s:7:"message";s:23:"utilisateur.prenom.vide";s:6:"groups";a:1:{i:0;s:7:"Default";}}i:2;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":7:{s:10:"maxMessage";s:22:"utilisateur.prenom.max";s:10:"minMessage";s:22:"utilisateur.prenom.min";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:3:"max";s:2:"50";s:3:"min";s:1:"2";s:7:"charset";s:5:"UTF-8";s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:45:"Symfony\\Component\\Validator\\Constraints\\Regex":5:{s:7:"message";s:24:"utilisateur.prenom.regex";s:7:"pattern";s:42:"/^[\\w çàâäéèêëîïôöùûü\'-]+$/";s:11:"htmlPattern";N;s:5:"match";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');