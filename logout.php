<?php
session_start();
$_SESSION['login']=="";
$_SESSION['fname']=="";
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="home.php";
</script>
