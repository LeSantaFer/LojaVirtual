<!--
  ~ Created by IntelliJ IDEA.
  ~ User: Hugo
  ~ Date: 13/06/17
  ~ Time: 16:26
  -->

<!DOCTYPE html>
<html>
    <head>
        <link href="node_modules/@material/list/dist/mdc.list.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>
        <link href="node_modules/@material/typography/dist/mdc.typography.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>
    </head>

    <div class="mdc-list-group">
        <?php
            $gblI = 0;
            $items = ["Página inicial", "Sair"];
            $paths = ["admin_inicio.php", "admin_inicio.php?sp=sair"];
            include("list.php")
        ?>

        <?php
            $items = ["Pagamentos", "Pedidos", "Clientes"];
            $paths = ["admin_inicio.php?sp=pagamentos", "admin_inicio.php?sp=pedidos", "admin_inicio.php?sp=clientes"];
            include("list.php")
        ?>

        <?php
            $items = ["Produtos", "Fotos de produtos", "Categorias"];
            $paths = ["admin_inicio.php?sp=produtos", "admin_inicio.php?sp=produtos_fotos", "admin_inicio.php?sp=categorias"];
            include("list.php")
        ?>

        <?php
            $items = ["Vendas por período", "Produtos por categoria", "Produtos mais vendidos"];
            $paths = ["admin_inicio.php?sp=vendas_periodo", "admin_inicio.php?sp=produto_categoria", "admin_inicio.php?sp=produtos_mais_vendidos"];
            include("list.php")
        ?>
    </div>
</html>