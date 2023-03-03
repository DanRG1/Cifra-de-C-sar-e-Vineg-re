<?php
function encryptVigenere($plaintext, $key) {
  // Converter chave e texto em maiúsculas
  $plaintext = strtoupper($plaintext);
  $key = strtoupper($key);
  $len = strlen($plaintext);
  $keylen = strlen($key);
  $ciphertext = "";  
  for ($i = 0; $i < $len; $i++) {
    $char = $plaintext[$i];
    if ($char >= 'A' && $char <= 'Z') {
      // Converter letra para número
      $num = ord($char) - ord('A');
      
      // Usar o caractere da chave correspondente para cifrar a letra
      $keychar = $key[$i % $keylen];
      $keynum = ord($keychar) - ord('A');
      $num = ($num + $keynum) % 26;
      
      // Converter número para letra e adicionar ao texto cifrado
      $ciphertext .= chr($num + ord('A'));
    } else {
      // Adicionar caracteres não alfabéticos diretamente ao texto cifrado
      $ciphertext .= $char;
    }
  }
  return $ciphertext;
}
function decryptVigenere($ciphertext, $key) {
  // Converter chave e texto em maiúsculas
  $ciphertext = strtoupper($ciphertext);
}