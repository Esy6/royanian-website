<?php
session_start();
if (session_is_registered("lang"))
{
session_unregister("lang");
}
$weiter="index.php?lang=$lang_neu";
Header("Location: ".$weiter);
?>