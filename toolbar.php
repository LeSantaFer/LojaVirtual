<!--
  ~ Created by IntelliJ IDEA.
  ~ User: Hugo
  ~ Date: 13/06/17
  ~ Time: 15:23
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="node_modules/@material/toolbar/dist/mdc.toolbar.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>

        <style>
            .catalog-back {
                padding-right: 24px;
            }

            .mdc-toolbar {
                background-color: #212121;
                color: white;
                padding-left: 20%;
                padding-right: 10%;
            }

            .catalog-back i {
                color: white;
            }

            <?php
                if (isset($style))
                    echo ($style)
            ?>
        </style>
    </head>

    <header class="mdc-toolbar mdc-toolbar--fixed mdc-toolbar--waterfall">
        <div class="mdc-toolbar__row">
            <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                <?php
                    if (isset($canBack)) {
                        if ($canBack) {
                            echo("
                                <span class='catalog-back'>
                                    <a href='' class='mdc-toolbar__icon mdc-toolbar__icon--menu' onclick='goBack()'>
                                        <i class='material-icons'>arrow_back</i>
                                    </a>
                                </span>
                            ");
                        }

                    } else {

                        echo("Variable canBack must have been initialized!");
                    }

                    if (isset($title)) {
                        echo("
                            <span class='mdc-toolbar__title'>$title</span>
                        ");

                    } else {

                        echo("Variable title must have been initialized!");
                    }
                ?>
            </section>
        </div>
    </header>

    <script src="node_modules/@material/toolbar/dist/mdc.toolbar.js"></script>

    <script>
        var toolbar = mdc.toolbar.MDCToolbar.attachTo(document.querySelector('.mdc-toolbar'));
        toolbar.fixedAdjustElement = document.querySelector('.mdc-toolbar-fixed-adjust');
    </script>

    <script>
        function goBack() {
            window.history.back()
        }
    </script>
</html>