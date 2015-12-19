function exit()
{
    //window.history.back();
    var php_path="home.php";
     
    new Ajax.Updater("html",php_path,{
       method:"post",
       parameters:{uid:$("uid").value}
    });
};