<?php

    $name = $_POST['name'];
    $pagamento = $_POST['pagamento'];


    $comissao = $pagamento * 0.15;
    $newsalario = $pagamento + $comissao;

    
    echo $name . ', você recebeu R$' . number_format($pagamento, 2, ',', '.') . ' esse mês, e teve um adicional de 15% por suas vendas ficando com: R$' . number_format($newsalario, 2, ',', '.');
?>
