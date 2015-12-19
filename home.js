function inbox()////load inbox page
{
    var php_path="inbox.php";
    
    new Ajax.Updater("html",php_path,{
        method:"post",
        parameters:{uid:$("uid").value},
    });
};

function compose()////load mail creation page
{
    var php_path="compose.php";
    
    new Ajax.Updater("html",php_path,{
        method:"post",
        parameters:{uid:$("uid").value},
    });
};

function logout()//logout user
{
    var php_path="login.php";
    
    new Ajax.Updater("html",php_path,{
        method:"post"
    });
}