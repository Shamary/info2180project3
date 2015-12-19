<!DOCTYPE html>
<html id="html">
    <head>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        <title>Home</title>
    </head>
    
    <body>
        <form>
            <input type="button" name="" value="Inbox" onclick="inbox()">
            <br>
            <br>
            <input type="button" name="" value="Compose" onclick="compose()">
            <br><br>
            <input id="lgt" type="button" value="logout" name="" onclick="logout()"/>
            
            <input id=uid type="hidden" name="uid" value="<?php echo $_REQUEST['uid'];?>"/>
        </form>
    </body>
</html>
