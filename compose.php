<?php

    $host="localhost";
    $dbname="cheapo";
    $db_uname=getenv("C9_USER");
    
    $uid=$_GET['uid'];
    
    $con=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,"");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    try
    {
       
    
    }
    catch(PDOException $pe)
    {
        
    }
?>

<!DOCTYPE html>
<html>
    
    <body>
        
        <form>
            <input type="text" name="" placeholder="Subject"/>
            <br>
            <input type="textarea" rows="10" cols="70" name=""/>
            <br><br>
            <input type="submit" value="Submit"/>
        </form>
        
    </body>
    
</html>