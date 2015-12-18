<!DOCTYPE html>
<html id="html">
    <head>
        <script type="text/javascript" src="prototype.js"></script>
        <script type="text/javascript" src="login.js"></script>
        <title>Cheapo login</title>
        
    </head>
    
    <body id="body_id">
        
        <form id="form_id">
            <fieldset>
                <input type="text" name="uname" placeholder="Username"/>
                <br>
                <br>
                <input type="text" name="pwd" placeholder="Password"/>
                <br>
                <br>
                <input id="sub" type="button" value="Submit" onclick="loadPage()"/>
            </fieldset>
        </form>
        
    </body>
    
</html>


<?php
    if(isset($_REQUEST["uname"]))
    {
        $data=header("Location:login.php");/////essentially resets the page on fail
        
        $host="localhost";
        $dbname="cheapo";
        $db_uname=getenv("C9_USER");
        
        $con=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,"");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        try
        {
            $uname=$con->quote($_REQUEST["uname"]);
            $pwd=$con->quote($_REQUEST["pwd"]);
            
            $res=$con->query("SELECT * FROM User WHERE username=$uname AND password=$pwd");
            
            foreach($res as $row)
            {
                $uid=$row['id'];
                $data=header("Location:home.php?uid=$uid");
                
                break;
            }
        }
        catch(PDOEXCEPTION $pe)
        {
            
        }
    }
    
    print $data;
    usleep(6000);
?>