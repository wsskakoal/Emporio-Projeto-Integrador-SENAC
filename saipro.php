<?php  
$idproduto = $_POST['idproduto'];
$quantidade = $_POST['quantidade'];
$vunitario = $_POST['vunitario'];
$data = $_POST['data'];
 

$conecta = new mysqli("localhost","kinyxapp_app","12345","kinyxapp_wyllian");
if (!$conecta) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");

$sql = "UPDATE INTO estoque (id_produto, qtde, valor_unitario) VALUES ('$id_produto', '$eminimo', '$emaximo')";
mysqli_query($conecta, $sql);
if ($result = $conecta->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}
//$conecta->select_db("kinyxapp_wyllian");
$sql = "SELECT descricao FROM produto WHERE descricao = '$descricao' ";
// Executa o comando SQL contido na variavel $sql
$query = mysqli_query ($conecta, $sql);
// Armazena na variavel $qtde a quantidade de registros encontrados no comando SQL executado e armazenado na variavel $query
$qtde = mysqli_num_rows ($query);
// Carrega os dados do registro encontrado (armazenado na variável $query) em forma de array
$dadoscastro = mysqli_fetch_array($query);
// Condição para verificar se a variável $dadosLogin está nulo
    if($dadoscastro == NULL)
        echo 'Não existe';
    else
        echo 'Existe!';
    // Irá percorrer as linhas encontradas (armazenado na variável $query) do banco de dados
    while($linha = mysqli_fetch_array($query))
      echo $linha['descricao'] . '<br>'; 
        




mysqli_close($conecta);

?>