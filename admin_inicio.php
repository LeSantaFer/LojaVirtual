<!--
  ~ Created by IntelliJ IDEA.
  ~ User: Hugo
  ~ Date: 13/06/17
  ~ Time: 15:15
  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Início</title>

        <link href="node_modules/@material/card/dist/mdc.card.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>
        <link href="css/main.css" type="text/css" rel="stylesheet" media="screen, projection"/>
    </head>

    <body>
        <?php
            $canBack = false;
            $title = "Início";
            include("toolbar.php")
        ?>

        <div class="mdc-card">
            <section class="mdc-card__supporting-text">
                <div class="pagina">
                    <?php include("admin_menu.php") ?>
                </div>

                <div class="subpagina">
                    <?php
                        if (!isset($_REQUEST["sp"]))
                            include("admin_main.php");
                        else
                            include("admin_" . $_REQUEST["sp"] . ".php");
                    ?>
                </div>

                <div class="limpar"></div>
            </section>
        </div>
    </body>
</html>