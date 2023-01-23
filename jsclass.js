
function loginvalidation()
{
if(document.login.name.value=='')
{
alert("please enter name");
return false;
}
if(document.login.email.value=='')
{
alert("please enter email");
return false;
}
if(document.login.pass.value=='')
{
alert("please enter password");
return false;
}
}
