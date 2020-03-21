<?php
echo "<div>";
echo $dari= $_POST['dari'];
echo "</div>";
$ke= $_POST['ke'];
$day_count=0;
while(0==0)
{
    
    $day_count++;
    echo "<div>";
    echo $dari= date('Y-m-d',strtotime($dari . "+1 days"));
    echo "</div>";
    if($dari==$ke)
    {
        break;
    }
    
}
?>