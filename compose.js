function send()
{
    var php_path="compose.php";
    
    new Ajax.Request(php_path,{
       method:"post", 
       parameters:$("cform").serialize(true),
       onSuccess:function()
       {
           goto_home("home.php");
       }
    });
}

function goto_home(path)
{
    new Ajax.Updater(path,{
       method:"post", 
       parameters:{uid:$("uid").value}
    });
}