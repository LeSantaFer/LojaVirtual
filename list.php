<!--
  ~ Created by IntelliJ IDEA.
  ~ User: Hugo
  ~ Date: 13/06/17
  ~ Time: 16:39
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="node_modules/@material/list/dist/mdc.list.css"
              type="text/css" rel="stylesheet" media="screen, projection"/>
    </head>

    <?php
        if (isset($items)) {
            if (isset($paths)) {
                if (sizeof($items == sizeof($paths))) {
                    for ($i = 0; $i < sizeof($items); $i++) {
                        echo("
                            <a href='" . $paths[$i] . "' class='mdc-list-item' id='item$gblI' data-mdc-auto-init='MDCRipple'>"
                                . $items[$i] .
                            "</a>
                        ");

                        $gblI++;
                    }

                } else {

                    echo("Variables items and paths must have same size.");
                }

            } else {

                foreach ($items as $i => $item) {
                    echo("
                        <a class='mdc-list-item' id='item$gblI' data-mdc-auto-init='MDCRipple'>$item</a>
                    ");

                    $gblI++;
                }
            }

            $gblI -= sizeof($items);

            echo("
                <script src='node_modules/@material/ripple/dist/mdc.ripple.js'></script>
                <script>
            ");

            for ($i = 0; $i < sizeof($items); $i++) {
                echo("mdc.ripple.MDCRipple.attachTo(document.querySelector('#item$gblI'));");
                $gblI++;
            }

            echo("</script>");

        } else {

            echo("Variable items must have been initialized.");
        }
    ?>
</html>