<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>
    </head>

    <body>
        <?php
            require_once('./server.php');
        ?>

        <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                <label for="accion">
                    Accion: 
                </label>
                
                <select name="accion" id="accion">
                    <option value="promedio">
                        Promedio
                    </option>

                    <option value="min">
                        Min
                    </option>
                    
                    <option value="max">
                        Max
                    </option>
                </select>
            </div>

            <div>
                <button type="submit">
                    Enviar
                </button>
            </div>
        </form>

        <?php
            echo $result;
        ?>
    </body>
</html>