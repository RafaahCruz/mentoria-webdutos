<?php
$host = 'db:/firebird/data/agenda.fdb';
$user = 'SYSDBA';
$password = 'masterkey';
echo "<h1>Teste de Conexão - Agenda Telefônica</h1>";
try {
 $pdo = new PDO("firebird:dbname=$host", $user, $password);
 $pdo→setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "<p style='color: green;'>Sucesso! O PHP conseguiu se conectar ao Firebird.</p>";
 $info = $pdo→getAttribute(PDO::ATTR_SERVER_VERSION);
 echo "<p>Versão do Banco: $info</p>";
} catch (PDOException $e) {
 echo "<p style='color: red;'>Erro ao conectar: " . $e→getMessage() . "</p>";
}
/* LINHA NOVA DE TESTE
mais uma */
?>