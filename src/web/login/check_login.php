<?php

session_start();

// If the user is not logged in send him/her to the login form
if ($_SESSION["Login"] != "YES")
{
        //if ($_SESSION["subject_id"] == 1)
        //{
                header("Location: /web/login/login_form_math.php");
        //}
        //if ($_SESSION["subject_id"] == 2)
        //{
         //       header("Location: /web/login/login_form_ela.php");
        //}
}
else
{
	//do nothing
}

?>
