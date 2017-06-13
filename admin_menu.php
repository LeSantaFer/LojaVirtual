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

        <style>
            .mdc-list {
                padding: 0;
            }
        </style>
    </head>

    <nav class="mdc-list">
        <?php
            $items = ["Página inicial", "Sair"];
            $paths = ["admin_inicio.php", "admin_inicio.php?sp=sair"];

            include("list.php")
        ?>
    </nav>
</html>