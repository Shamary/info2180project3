<?php
    
    $db_uname=getenv("C9_USER");
    $db_pwd="";
    
    $host="localhost";
    $dbname="cheapo";
    
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,$db_pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $id=$conn->quote($_REQUEST["uid"]);    
    $fname=$conn->quote($_REQUEST["fname"]);    
    $lname=$conn->quote($_REQUEST["lname"]);
    $uname=$conn->quote($_REQUEST["uname"]);
    $pwd=$conn->quote($_REQUEST["pwd"]); 
    
    #$conn=mysql_connect(getenv("IP"),getenv("C9_USER"));
    
    #mysql_selectdb("cheapo",$conn);
    
    try
    {
    
        $conn->query("INSERT INTO User values ($id,$fname,$lname,$pwd,$uname)");
    
    }
    catch(PDOException $pe)
    {
        
    }
    
    print "received:$id $fname $lname $uname $pwd";
?>