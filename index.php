<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Produtos Disponíveis</h1>

    <?php
 
    $host = 'db'; 
    $port = '3306'; 
    $dbname = 'sistema_tec_sustentaveis';
    $username = 'root'; 
    $password = 'rootpassword';
 

    try {
     
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
        $query = "SELECT nome, valor FROM produto";
        $stmt = $conn->prepare($query);
        $stmt->execute();

   
        if ($stmt->rowCount() > 0) {
            echo "<table>
                    <tr>
                        <th>Nome do Produto</th>
                        <th>Valor (R$)</th>
                    </tr>";

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['nome']) . "</td>
                        <td>" . number_format($row['valor'], 2, ',', '.') . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='text-align:center;'>Nenhum produto encontrado.</p>";
        }
    } catch (PDOException $e) {
        echo "<p style='text-align:center;color:red;'>Erro na conexão: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>
