<?php


if($_POST["contactName"] && $_POST["contactEmail"] && $_POST["contactSubject"] && $_POST["contactMessage"]) {


mail("aziz.belhadjyahia@esprit.tn", $_GET["contactSubject"],$_GET["contactMessage"]);

}


?>