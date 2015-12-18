<?php

    $host="localhost";
    $dbname="cheapo";
    $db_uname=getenv("C9_USER");
    
    $uid=$_GET['uid'];
    
    $con=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,"");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $subject=array();
    $body=array();
    
    try
    {
        $res=$con->query("select * from Message where recipient_ids like '%$uid%'");
        
        foreach($res as $msg)
        {
            $subject[]=$msg['subject'];
            $body[]=$msg['body'];
        }
    
    }
    catch(PDOException $pe)
    {
        
    }
?>

<!DOCTYPE html>
<html>
    <body style="background-color=white">
        
        <p>
            <?php
            {
                for($i=0;$i<10;$i++)
                {
                    $sub=$subject[$i];
                    $bod=$body[$i];
                    
                    echo "Subject:$sub
                          <br>
                          $bod
                          <br><br>";
                }
            }?>
        </p>
    
    </body>

</html>