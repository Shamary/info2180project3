window.onload=function()
{
    var uid=document.getElementById("uid");
    var fname=document.getElementById("fname");
    var lname=document.getElementById("lname");
    var uname=document.getElementById("uname");
    var pwd=document.getElementById("pwd");
    var sub=document.getElementById("submit_b");
    
    var form=document.getElementById("form_id");
    
    var php_path="https://cheapo-mail-shamary.c9users.io/handle.php";
    
    sub.onmousedown=function()
    {
          if(vpwd(pwd.value)&&pwd.value.length>=8)
          {
              //alert("password is valid"); 
              
              /////Ajax request to send form data to php
              new Ajax.Request(php_path,
              {
                 method:"get",
                 parameters:form.serialize(true),
                 onFailure: function(){alert("request failed")}
              });
          }
          else//invalid password
          {
              pwd.style.backgroundColor="red";
          }
    };
}

function vpwd(pass)////verify password
{
    var regex_cap=/[A-Z]+/;////check for capital
    var regex_low=/[a-z]+/;///check for lowercase
    var regex_dig=/[0-9]+/;///check for digit
    
    return regex_cap.test(pass)&&regex_low.test(pass)&&regex_dig.test(pass);
}