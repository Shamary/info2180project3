/*
window.onload=function()
{
    var php_path="https://cheapo-mail-shamary.c9users.io/login.php";
    
    $("sub").onmousedown=function()
    {
        new Ajax.Updater("html",php_path,
        {
            method:"post",
            parameters:$("form_id").serialize(true),
            onFailure: function(){alert("Login failed.");}
        });
    }
}
*/

function loadPage()
{
    //$("form_id").submit();   
    
    var php_path="https://cheapo-mail-shamary.c9users.io/login.php";
    
    new Ajax.Updater("html",php_path,
        {
            method:"post",
            parameters:$("form_id").serialize(true),
            onFailure: function(){alert("Login failed.");}
        });
}