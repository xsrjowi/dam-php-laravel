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

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div>
                Num 1: 
                
                <input type="text" name="num1">
                
                <br>
            
                Num 2: <input type="text" name="num2">
            
                <br>
            
                <label for="accio">Acció: </label>
            
                <select name="accio" id="accion">
                    <option value="sum">
                        Sumar
                    </option>
                    
                    <option value="res">
                        Restar
                    </option>
                    
                    <option value="mul">
                        Multiplicar
                    </option>
                    
                    <option value="div">
                        Dividir
                    </option>
                    
                    <option value="pot">
                        Potència
                    </option>
                </select>
            </div>

            <div>
                <button type="submit">
                    Calcular
                </button>
            </div>
        </form>

        <?php
        if (isset($err)) {
            if ($err == '') {
                echo 'Resultat:' . $result;
            } else {
                echo '<span class="error">*Error list: *<br> ' . $err . '</span>';
            }
        }
        ?>
    </body>
</html>