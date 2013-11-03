<?php

function insertFirstLevelTransaction($conn,$user_id)
{
  //---------------- GET starting level id and next level id ----------------------------------------------
                $query = "select id from levels order by id LIMIT 2;";

                //get db result
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());
                dbErrorCheck($conn,$result);

                //get numer of rows
                $num = pg_num_rows($result);

		$completed_level_id = 0;

                if ($num > 1)
                {
                        //get the id
                        $completed_level_id = pg_Result($result, 0, 'id');
                }
                else
                {
                }

                //---------------- insert that level as your first level_transaction ----------------------------------------------
                $query = "insert into levels_transactions (advancement_time, level_id,user_id) values (current_timestamp,";
                $query .= $completed_level_id;
                $query .= ",";
                $query .= $user_id;
                $query .= ");";

                //db call to update
                $result = pg_query($conn,$query) or die('Could not connect: ' . pg_last_error());

		return $completed_level_id;

}

?>
