<!--
  ~ Created by Hugo Castelani
  ~ Date: 21/06/17
  ~ Time: 15:20
  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1 class="mdc-typography--title">Categorias</h1>

        <?php
            $page = "admin_inicio.php?sp=" . $_REQUEST["sp"];
            $btnName = "register";
            $btnValue = "getRegistered";

            // Cadastro
            if (isset($_REQUEST["register"])) {
                $ctgName= $_REQUEST["ctgName"];

                if ($ctgName == "") {
                    echo("<div class='error'>Campo obrigatório em branco</div>");

                } else {

                    $queryRpt = mysqli_query($con, "SELECT * FROM tbCategory WHERE nmCtg = '" . $ctgName . "'");
                    if (mysqli_num_rows($queryRpt) > 0) {
                        echo("<div class='error'>Dado já existe</div>");

                    } else {

                        mysqli_query($con,"INSERT INTO tbCategory (nmCtg) VALUES ('" . $ctgName ."')" );
                        echo("<div class='ok'>Cadastro realizado</div>");
                        $ctgName = "";
                    }
                }
            }

            // Seleção de dados
            if (isset($_REQUEST["action"])) {
                $querySelect = mysqli_query($con, "SELECT * FROM tbCategory WHERE cdCtg = '" . $_REQUEST['id'] . "'");
                $resSelect = mysqli_fetch_array($querySelect);
                $ctgCode = $resSelect["cdCtg"];
                $ctgName = $resSelect["nmCtg"];
                $btnName = $_REQUEST["action"];

                if ($_REQUEST["action"] == "alt") $btnValue = "Salvar alterações";
                else $tbnValue = "Excluir definitivamente";
            }


        ?>
    </body>
</html>