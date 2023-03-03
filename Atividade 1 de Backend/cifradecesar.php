<?php
// Define a mensagem a ser criptografada
$mensagem = "Hello, world!";
// Define o número de deslocamento para a cifra de César
$deslocamento = 3;
// Define a variável para armazenar a mensagem criptografada
$mensagem_criptografada = "";
// Percorre cada caractere da mensagem
for ($i = 0; $i < strlen($mensagem); $i++) {
  // Obtém o código ASCII do caractere atual
  $codigo_ascii = ord($mensagem[$i]);
  // Verifica se o caractere é uma letra maiúscula
  if (65 <= $codigo_ascii && $codigo_ascii <= 90) {
    // Aplica a cifra de César à letra maiúscula
    $novo_codigo_ascii = (($codigo_ascii - 65 + $deslocamento) % 26) + 65;
    // Adiciona a letra criptografada à mensagem criptografada
    $mensagem_criptografada .= chr($novo_codigo_ascii);
  }
  // Verifica se o caractere é uma letra minúscula
  else if (97 <= $codigo_ascii && $codigo_ascii <= 122) {
    // Aplica a cifra de César à letra minúscula
    $novo_codigo_ascii = (($codigo_ascii - 97 + $deslocamento) % 26) + 97;
    // Adiciona a letra criptografada à mensagem criptografada
    $mensagem_criptografada .= chr($novo_codigo_ascii);
  }
  // Caso contrário, adiciona o caractere à mensagem criptografada sem modificação
  else {
    $mensagem_criptografada .= $mensagem[$i];
  }
}
// Imprime a mensagem criptografada
echo $mensagem_criptografada;
?>