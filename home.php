<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="home.js"></script>
        <title>Home</title>
    </head>
    
    <body>
        <form>
            <input type="button" name="" value="Inbox" onclick="inbox()">
            <br>
            <br>
            <input type="button" name="" value="Compose" onclick="compose()">
            
            <input id=uid type="hidden" name="" value="<?php echo $_GET['uid']?>"/>
        </form>
    </body>
</html>