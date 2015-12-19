<?php
    
    $db_uname=getenv("C9_USER");//database username
    $db_pwd="";//database password if any
    
    $host="localhost";
    $dbname="cheapo";////database name
    
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$db_uname,$db_pwd);/////create connection to database
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //////Get requests
    $id=$conn->quote($_REQUEST["uid"]);    
    $fname=$conn->quote($_REQUEST["fname"]);    
    $lname=$conn->quote($_REQUEST["lname"]);
    $uname=$conn->quote($_REQUEST["uname"]);
    $pwd=$conn->quote($_REQUEST["pwd"]); 
    
    try
    {
    
        $conn->query("INSERT INTO User values ($id,$fname,$lname,$pwd,$uname)");//////Insert to database
    
    }
    catch(PDOException $pe)///handle exception
    {
        
    }
    
    print "received:$id $fname $lname $uname $pwd";
?>