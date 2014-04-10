
<?php
    # --- CHRIFFREMENT ---

    # la clé devrait être un binaire aléatoire, utilisez la fonction scrypt, bcrypt
    # ou PBKDF2 pour convertir une chaîne de caractères en une clé.
    # La clé est spécifiée en utilisant une notation héxadécimale.
    $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
    
    # Montre la taille de la clé utilisée ; soit des clés sur 16, 24 ou 32 octets pour
    # AES-128, 192 et 256 respectivement.
    $key_size =  strlen($key);
    echo "Talle de la clé : " . $key_size . "\n";
    
    $plaintext = "Cette chaîne de caractère a été chiffrée en AES-256 / CBC / ZeroBytePadding.";

    # Crée un IV aléatoire à utiliser avec l'encodage CBC
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    
    # Crée un encodage explicite pour le texte plein
    $plaintext_utf8 = utf8_encode($plaintext);
    
    # Crée un texte cipher compatible avec AES (Rijndael block size = 128)
    # pour conserver le texte confidentiel.
    # Uniquement applicable pour les entrées encodées qui ne se terminent jamais
    # pas la valeur 00h (en raison de la suppression par défaut des zéros finaux)
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key,
                                 $plaintext_utf8, MCRYPT_MODE_CBC, $iv);

    # On ajoute à la fin le IV pour le rendre disponible pour le chiffrement
    $ciphertext = $iv . $ciphertext;
    
    # Encode le texte du cipher résultant pouvant être représenté ainsi sous forme de chaîne de caractères
    $ciphertext_base64 = base64_encode($ciphertext);

    echo  $ciphertext_base64 . "\n";

    # === ATTENTION ===

    # Le texte du cipher résultant ne contient aucune intégrité ni d'authentification
    # et il n'est pas protégé par des attaques de type "oracle padding".
    
    # --- DECHIFFREMENT ---
    
    $ciphertext_dec = base64_decode($ciphertext_base64);
    
    # Récupère le IV, iv_size doit avoir été créé en utilisant la fonction
    # mcrypt_get_iv_size()
    $iv_dec = substr($ciphertext_dec, 0, $iv_size);
    
    # Récupère le texte du cipher (tout, sauf $iv_size du début)
    $ciphertext_dec = substr($ciphertext_dec, $iv_size);

    # On doit supprimer les caractères de valeur 00h de la fin du texte plein
    $plaintext_utf8_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key,
                                         $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
    
    echo  $plaintext_utf8_dec . "\n";
?>
