<!--
  ~ Created by IntelliJ IDEA.
  ~ User: Hugo
  ~ Date: 13/06/17
  ~ Time: 15:15
  -->

<!DOCTYPE html>
<html lang="en">
    <?php include("conexao.php") ?>

    <head>
        <meta charset="UTF-8"/>
        <title>Início</title>

        <link href="node_modules/@material/card/dist/mdc.card.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>

        <link href="node_modules/@material/drawer/dist/mdc.drawer.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>

        <link href="node_modules/@material/typography/dist/mdc.typography.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>

        <link href="css/main.css" type="text/css" rel="stylesheet" media="screen, projection"/>
    </head>

    <body>
        <?php
            $style = "
                .mdc-toolbar {
                    margin-left: 18%;
                    padding-left: 2%;
                    padding-right: 2%;
                }
            ";
            $canBack = false;
            $title = "Início";
            include("toolbar.php")
        ?>

        <div class="menu">
            <section class="mdc-card__supporting-text">
                <?php
                    $style = "
                        .mdc-list-item {
                            font-size: 0.875rem;
                            font-weight: 500;
                            letter-spacing: 0.04em;
                            line-height: 1.5rem;
                        }
                    ";
                    include("admin_menu.php")
                ?>
            </section>
        </div>

        <div class="content">
            <div class="mdc-card">
                <section class="mdc-card__supporting-text">
                    <?php
                        if (!isset($_REQUEST["sp"]))
                            include("admin_paginicial.php");
                        else
                            include("admin_" . $_REQUEST['sp'] . ".php")
                    ?>
                </section>
            </div>
        </div>
    </body>

    <script src="node_modules/@material/drawer/dist/mdc.drawer.js"></script>
</html>