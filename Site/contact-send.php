<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


$url = 'http://localhost:8080/src/blog/store/contact';

$ch = curl_init($url);

$data = array(
    'nome' => $nome,
    'email' => $email,
    'telefone' => $telefone,
    'mensagem' => $mensagem
);

$payload = json_encode($data);


curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

$resultado = json_decode($result, true);


if($resultado['retorno'] == 'Contato salvo com Sucesso!'){

    echo "<script>alert('Contato Registrado com Sucesso!') </script>";

    header('Refresh: 0.1; URL=http://localhost/Site');

}else{

    echo "<script>alert('Houve uma Falha! Verifique todos os campos e tente novamente!') </script>";

    header('Refresh: 0.1; URL=http://localhost/Site');
}




?>