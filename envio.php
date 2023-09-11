<?php 
    try {
        require_once "config.php";

        $conexao = new conec("localhost","esul","root","");

        $conec = $conexao->conecxa();

        $sql = "INSERT INTO notas (nota) VALUES (:nota)";

        $stmt = $conec->prepare($sql);

        $stmt->bindParam(':nota',$_POST['nota']);

        if(isset($_POST['envia'])){
            $stmt->execute();
        }    
        echo "Valores inseridos com sucesso!";

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
?>