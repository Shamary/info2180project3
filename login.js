function loadPage()//////Loads the login page
{
    //$("form_id").submit();   
    
    var php_path="https://cheapo-mail-shamary.c9users.io/login.php";///NOTE: change path to match host
    
    new Ajax.Updater("html",php_path,
        {
            method:"post",
            parameters:$("form_id").serialize(true),
            onFailure: function(){alert("Login failed.");}
        });
}