<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Práctica 2 - Joel Mas, Cristian Sivillá
        </title>
    </head>

    <body>
        <?php
            require_once("../controller/server.php");
        ?>

        <div class="form-box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="content-header">
                    <p>
                        Selecciona una base de datos:
                        
                        <select name="selector" value="dbnames">
                            <option value="0">
                                ---
                            </option>

                            <?php
                                updateSelector();
                            ?>
                        </select>
                    </p>
                </div>

                <br>

                <div class="content-body">
                    <textarea rows=10" cols ="80" class="caja" name="caja">
                        <?php
                            echo $contenidoCaja;
                        ?>
                    </textarea>
                </div>

                <br>

                <div class="submit-button">
                    <input type="submit" name="submit" value="Ejecutar">
                </div>
                
            </form>
        </div>
    </body>
</html>
