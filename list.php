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

        <style>
            <?php
                if (isset($style))
                    echo ($style)
            ?>
        </style>
    </head>

    <?php
        echo("<nav class='mdc-list'>");

        if (isset($paths)) {
            for ($i = 0; $i < sizeof($items); $i++) {
                echo("
                    <a href='" . $paths[$i] . "' class='mdc-list-item' id='item$gblI' data-mdc-auto-init='MDCRipple'>"
                        . $items[$i] .
                    "</a>
                ");

                $gblI++;
            }

        } else {

            foreach ($items as $i => $item) {
                echo("
                    <a class='mdc-list-item' id='item$gblI' data-mdc-auto-init='MDCRipple'>$item</a>
                ");

                $gblI++;
            }
        }

        echo("</nav>");

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
    ?>
</html>