<?php

namespace MySqlCrud
{

    require_once("../model/connection.php");
    use MySqlCrud\Database as DB;

    $GLOBALS['connection'] = DB::getInstance()->getConnection();

    class DbController
    {
        public function selectAllCity()
        {
            $query = "SELECT * FROM city";
            $queryResult = $GLOBALS["connection"]->query($query);

            $this->printTable($queryResult);

            return $queryResult;
        }

        public function updateCityNameWhereId($id, $newValue)
        {
            $query = "UPDATE city WHERE id = {$id} SET Name = {$newValue}";

            $this->checkIfQueryisSucessfully($query);
        }

        public function checkIfQueryisSucessfully($query)
        {
            $queryResult = $GLOBALS["connection"]->query($query);

            if ($queryResult) {
                echo "✔️ -> Se ha ejecutado la query correctamente";
            } else {
                echo "❌ -> Ha habido un error al ejecutar la query";
            }
        }

        public function printTable($data)
        {
            $affectedRows = $GLOBALS["connection"]->affected_rows();

            if ($affectedRows > 0) {
                echo "<table>";

                foreach ($data as $row) {
                    echo "<tr>";

                    foreach ($row as $column) {
                        echo "<td> {$column} </td>";
                    }

                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "❌ -> No ha habido ningún resultado al ejecutar la query";
            }
        }
    }
}
