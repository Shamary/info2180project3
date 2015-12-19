<?php
    
    $uid=$_REQUEST['uid'];
    
    if(isset($_REQUEST['recipients']))
    {
        echo "entered logic";
        
        $host="localhost";
        $dbname="cheapo";
        $db_uname=getenv("C9_USER");
        
        $con=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,"");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        try
        {
            
           $mid=$uid. strval(mt_rand());//.random_int(0,300);
           $uid=$con->quote($uid);
        
           $subject=$con->quote($_REQUEST['subject']);
           $recip=$con->quote($_REQUEST['recipients']);
           $body=$con->quote($_REQUEST['msg']);
           
           $con->query("INSERT INTO Message values('$mid',$body,$subject,$uid,$recip)");
        }
        catch(PDOException $pe)
        {
            
        }
        
        /*
        function found_recips($rip)
        {
            $res=$con->query("select * from Message where recipient_ids like '%$rip%'");
        
            foreach($res as $msg)
            {
               return true;
            }
            
            return false;
        }*/
    }
?>

<!DOCTYPE html>
<html id="html">
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        
        <title>Compose</title>
    </head>
    
    <body>
        
        <form id="cform">
                <input type="text" name="subject" placeholder="Subject"/>
                <br><br>
                <input type="text" name="recipients" placeholder="Recipients IDs..."/>
                <br>
                
                <br><br>
                <textarea form="cform" rows="10" cols="35" name="msg" placeholder="Message here..."></textarea>
               
                <input type="hidden" name="uid" value="<?php echo $_REQUEST['uid'];?>"/>
        </form>
    
        
        <br><br>
        <form>
            <input id="send_b" type="button" value="Send" onclick="send()"/>
            <br><br>
            <input id="cancel_b" type="button" value="Cancel" onclick="goto_home()"/>
        </form>
        
    </body>
    
</html>