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
                background-color: #009688;
                padding: 10%;
            }
        </style>
    </head>

    <header class="mdc-toolbar mdc-toolbar--fixed mdc-toolbar--waterfall">
        <div class="mdc-toolbar__row">
            <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                <?php
                    if (isset($canBack) && $canBack) {
                        echo("
                            <span class='catalog-back'>
                                <a onclick='goBack()'><i class='material-icons'>arrow_back</i></a>
                            </span>
                        ");
                    }

                    if (isset($title)) {
                        echo("
                            <span class='mdc-toolbar__title'>$title</span>
                        ");
                    }
                ?>
            </section>
        </div>
    </header>

    <script src="node_modules/@material/toolbar/dist/mdc.toolbar.js">
        var toolbar = mdc.toolbar.MDCToolbar.attachTo(document.querySelector('.mdc-toolbar'));
        toolbar.fixedAdjustElement = document.querySelector('.mdc-toolbar-fixed-adjust');
    </script>

    <script>
        function goBack() {
            window.history.back()
        }
    </script>
</html>