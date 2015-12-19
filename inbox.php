<?php

    //echo header("Location:inbox.php");
    
    $host="localhost";
    $dbname="cheapo";
    $db_uname=getenv("C9_USER");
    
    $con=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,"");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $subject=array();
    $body=array();
    
    try
    {
        $uid=$_REQUEST['uid'];
        
        $res=$con->query("select * from Message where recipient_ids like '%$uid%'");
        
        foreach($res as $msg)
        {
            $subject[]=$msg['subject'];
            $body[]=$msg['body'];
            $from[]=getName($con,$msg['user_id']);
        }
    
    }
    catch(PDOException $pe)
    {
        
    }
    
    function getName($conn,$lookup)/////get username that matches id
    {
        $arr=$conn->query("Select * from User where id=$lookup");
        
        foreach($arr as $n)
        {
            return $n['username'];
        }
        
        return "";
    }
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        
        <title>Inbox</title>
    </head>
    
    <body>
        
        <p>
            <?php
                
                //////////Loop constructs the message on the page
                for($i=0;$i<count($from);$i++)
                {
                    $sub=$subject[$i];
                    $bod=$body[$i];
                    $fr=$from[$i];
                    
                    echo "<span style=font-weight:bold;>Subject</span>:$sub
                          <br>
                          <span style=font-weight:bold;>From</span>:$fr
                          <br>
                          $bod
                          <br><br><br><br>";
                }
            ?>
        </p>
             
            <form id="iform">
                <input type="button" value="Exit" onclick="exit()"/>
                <input type="hidden" name="uid" value="<?php echo $uid;?>"/>
            </form>
    
    </body>

</html>