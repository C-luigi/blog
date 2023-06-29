<?php
echo 'Bienvenue sur le blog' ;
?>


<?php
$page = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_ENCODED);
if ($page == "") {
    require "action/page.php";
}
else if ($page == "hobby") {
    require "action/page.php";
}
else if ($page == "contact") {
    require "action/page.php";
}
else
    require "action/page.php";

?>