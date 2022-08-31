<?php
$dbHost = 'localhost';
$dbUsername ='root';
$dbPassword ='';
$dbName = 'banco1';


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName );

/*if($conexao ->connect_errno){
    echo "erro de conexão com o banco de dados";  // para testar conexão com o banco
}
else{
    echo"conectado ao banco de dados";
}
*/
if(isset($_POST['submit'])){
    /*
    print_r('Nome: '. $_POST['nome']);teste p ver se está recebendo os imputs
}*/

include_once('conect.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao,"INSERT INTO usuario(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco)VALUES
('$nome', '$email' ,'$telefone' ,'$sexo','$data_nascimento' ,'$cidade' ,'$estado','$endereco' )");
}
?>