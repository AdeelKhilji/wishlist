<?php
    $wishId=$_GET["wishId"];
?>
<form action="process-insert-wish-form.php" method="GET">
    <input type="hidden" name="wishId" value="$wishId">
    <input type="submit" name="Submit">
</form>