<?php
$connect=mysqli_connect("localhost","root","", "energyaudit") or die("Connection Failed");

if(!empty($_POST['save']))    
{
$username=$_POST['un'];
$password=$_POST['pw'];

$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($connect, $query); 
$count=mysqli_num_rows($result);

if($count>0)
{
  header("Location:links1.php");
  
}

else

{
  echo '<script>alert("Invalid Credentials")</script>';
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	Login NLBC
</title><link href="Styles/style.css" rel="stylesheet" type="text/css" /><link href="Styles/gvStyle.css" rel="stylesheet" type="text/css" /><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <style type="text/css">
       
/* Starter CSS for Menu */
#cssmenu {
  padding: 0;
  margin: 0;
  border: 0; 
  /*font-size:11px;padding:0px; float:right; position:absolute; top:58PX; left:480px; width:700px; z-index: 999;*/
  font-size:11px;padding:0px; float:right; position:relative; top:11PX; left:0px; width:100%; z-index: 999;  
  
  }

#TextBoxStyle
{
	border: thin hidden #90B3E0;
	font-weight: 400;
	width: 50px;
	height: 24px;
	font-family: Times New Roman CE;
	text-align: center;
	font-size: 15px;
	color: #FFFFFF;
	background-color: #000000;
	background-image: url('../Images/imgTextBox.gif');
	
	cursor:default;
	font-family:Helvetica Neue, Arial; 
	font-size:1.0em; 
	font-weight:bold; 	
	vertical-align: middle;
}

#TextBoxStyle1
{
	border: thin hidden #90B3E0;
	font-weight: 400;
	width: 150px;
	height: 24px;
	font-family: Times New Roman CE;
	text-align: center;
	font-size: 15px;
	color: #FFFFFF;
	background-color: #000000;
	background-image: url('../Images/imgTextBox.gif');
	
	cursor:default;
	font-family:Helvetica Neue, Arial; 
	font-size:1.0em; 
	font-weight:bold; 	
	vertical-align: middle;
}


#cssmenu ul, #cssmenu li {
  list-style: none;
  margin: 0;
  padding: 0;}

#cssmenu ul {
  position: relative;
  z-index: 597; }

#cssmenu ul li {
  float: left;
  min-height: 1px;
  vertical-align: middle;}

#cssmenu ul li.hover,
#cssmenu ul li:hover {
  position: relative;
  z-index: 599;
  cursor: default; }

#cssmenu ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 598;
  width: 100%; }

#cssmenu ul ul li {
  float: none; z-index: 598; }

#cssmenu ul ul ul {
  top: 0;
  left: auto;
  right: -99.5%; }

#cssmenu ul li:hover > ul {
  visibility: visible; }

#cssmenu ul ul {
  bottom: 0;
  left: 0; }

#cssmenu ul ul {
  margin-top: 0; }

#cssmenu ul ul li {
  font-weight: normal; }

#cssmenu a {
  display: block;
  line-height: 1em;
  text-decoration: none; }

/* Custom CSS Styles */
#cssmenu {
  background: #333;
  border-bottom: 4px solid #1b9bff;
  font-family: 'Oxygen Mono', Tahoma, Arial, sans-serif;
  font-size: 12px; }
  #cssmenu > ul {
    *display: inline-block; }
  #cssmenu:after, #cssmenu ul:after {
    content: '';
    display: block;
    clear: both; }
  #cssmenu ul {
    text-transform: uppercase;
            top: 0px;
            left: 0px;
        }
    #cssmenu ul ul {
      border-top: 4px solid #1b9bff;
      text-transform: none;
      min-width: 190px; }
      #cssmenu ul ul a {
        background: #1b9bff;
        color: #FFF;
        border: 1px solid #0082e7;
        border-top: 0 none;
        line-height: 150%;
        padding: 16px 10px; }
      #cssmenu ul ul ul {
        border-top: 0 none; }
      #cssmenu ul ul li {
        position: relative; }
        #cssmenu ul ul li:first-child > a {
          border-top: 1px solid #0082e7; }
        #cssmenu ul ul li:hover > a {
          background: #35a6ff; }
        #cssmenu ul ul li:last-child > a {
          -moz-border-radius: 0 0 3px 3px;
          -webkit-border-radius: 0 0 3px 3px;
          border-radius: 0 0 3px 3px;
          -moz-background-clip: padding;
          -webkit-background-clip: padding-box;
          background-clip: padding-box;
          -moz-box-shadow: 0 1px 0 #1b9bff;
          -webkit-box-shadow: 0 1px 0 #1b9bff;
          box-shadow: 0 1px 0 #1b9bff; }
        #cssmenu ul ul li:last-child:hover > a {
          -moz-border-radius: 0 0 0 3px;
          -webkit-border-radius: 0 0 0 3px;
          border-radius: 0 0 0 3px;
          -moz-background-clip: padding;
          -webkit-background-clip: padding-box;
          background-clip: padding-box; }
        #cssmenu ul ul li.has-sub > a:after {
          content: '+';
          position: absolute;
          top: 50%;
          right: 15px;
          margin-top: -8px; }
    #cssmenu ul li:hover > a, #cssmenu ul li.active > a {
      background: #1b9bff;
      color: #FFF; }
    #cssmenu ul li.has-sub > a:after {
      content: '+';
      margin-left: 5px; }
    #cssmenu ul li.last ul {
      left: auto;
      right: 0; }
      #cssmenu ul li.last ul ul {
        left: auto;
        right: 99.5%; }
  #cssmenu a {
    background: #333;
    color: #CBCBCB;
    padding: 0 20px; }
  #cssmenu > ul > li > a {
    line-height: 38px; }

    </style>
    
   
</head>
<body id="mainbody">
    <form method="post" >
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTIwMzQyNTU2NjgPZBYCZg9kFgICAw9kFgICAQ9kFgICAQ9kFgYCAw8PFgIeBFRleHQFBkxvZyBJbmRkAgUPDxYEHwBlHgdWaXNpYmxlaGRkAgcPZBYKAgMPDxYCHghUYWJJbmRleAEBAGRkAgcPDxYCHwIBAgAWAh4Kb25rZXlwcmVzcwU3c2ttX0NoZWNrQ2Fwc0xvY2soIGV2ZW50LCAnQm9keV9XYXJuT25Zb3VyTmFtZScsIDUwMDApO2QCDQ8WAh8BaGQCDw9kFgJmD2QWAgIBDxAPFgIfAgEDAGRkZGQCEQ8PFgIfAgEEAGRkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxYBBRhjdGwwMCRCb2R5JGNoa1JlbWVtYmVyTWXBqO+2NtsNDjPGGNnMLn7LUkSTDjo+HmILxxF7m1FNtg==" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=Sim4ecHwgheu3ychiiNFRE2ujVxH9HUla6ZnT0PlyrK2Gx3sNzR9f7OL864MUXtxRXf4bOSxh-zb__Av00dD6YNyD13R8FX-HLvClVSY5rI1&amp;t=637454266754849868" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=Jj8J1tdQ7hX0YRTIU8qrkGqIHciSCneaKKKUh59t4RXi6-zBnu1YbuHirjfMqtjs50QJfQLaFsOH76UfMtnSJe9GwFB7vyOWPLeU5XeQ9tam-F_gpQbGf1CmUUP4hoBQwfyqQh78oxRnye4PdE91ETNU6k0r9dsrGLaUSS1W2q01&amp;t=ffffffffe191061b" type="text/javascript"></script>
<script src="/WebResource.axd?d=skjItPgncKDZzMbOPqN2rgaLjywtcxgG3N1NqQl6tL9k4jOqPephBIQWHAggpNnZotflrj57yEvWZNSHxPp1GH1WOBj5LR-ApBoOwwFfr2Q9lCRGzGP7lGwJn1KGjr5Zpl9O_1464vOk9vo7mzZKbg2&amp;t=633693295340000000" type="text/javascript"></script>
<script src="/ScriptResource.axd?d=L5dF7N-rTIBw9eSCtrHlUvlQvUSJfzzApt7Blv4ivQyMxjBkMKIstHZ0_OK_OwCXo8HC4vNEWA-W6jh-eJFWyXUSl0oIECM1jKX6oqeoXAXnvZftCTECrm7SC0fUQ73kx-G39-OKxm6Icte28S6_UA2&amp;t=7c776dc1" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
//]]>
</script>

<script src="/ScriptResource.axd?d=6z7y6IMSSCdsjQF0_WLoOkNHuhE9zD8z-LQYHm7pTML7t02uAdViSrnSgN1keXNSGQw6pw2Ty__XmFLOFfKiQz5SlGpb0Z4oMt3GYp9zvsb_R26TQRlrAbGMPAhGzA9jRI5u5z9BsogRex5UprLCdg2&amp;t=7c776dc1" type="text/javascript"></script>
<script src="/WebResource.axd?d=dszMAQaX4SMhFvH0b5X65KZrUH4ANw3QzuvgWbVz1pyfJW6rfTxdXAk7UEhNCBdYCmcKLiTeakWXNEL-yoPGgOtBB3IYZyT31E4TvSYEHh41&amp;t=637454266754849868" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C2EE9ABB" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAY0S52pQtO0U66Ti6qPjRnd2+esYHSZJSxC1j91ssoX+u8S7NdOKCJkkuknc3AvFwu84bolZSsKoAXh09m447XRKyLz2bdSYd4qFUETuPU4ZNmwcG32Iov4yRB+qQEkXDrs6J+3SvS69tcA2Bz43G01jdzeMSYVwLIz7dtH4LhFiw==" />
</div>
   
</script>

    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;
        }
        h1
        {
            font-size: 56px;
        }
        h2
        {
            font-size: 20px;
            padding: 0px 0px 40px 0px;
            color: #aaa;
        }
        h2 span
        {
            color: #ffa800;
        }
        a
        {
            color: #777;
        }
        a:hover
        {
            color: #222;
        }
        p
        {
            padding: 5px 0px;
        }
        .wrapper
        {
            width: 960px;
            margin: 20px auto;
            min-height: 550px;
        }
        .box
        {
            width: 49%;
        }
        .left
        {
            float: left;
        }
        .right
        {
            float: right;
        }
        .clear
        {
            clear: both;
        }
        a.back
        {
            color: #777;
            position: fixed;
            top: 5px;
            right: 10px;
            text-decoration: none;
        }
        /* Form Style */.form_wrapper
        {
            background: #fff;
            border: 1px solid #ddd;
            margin: 50px auto;
            width: 550px;
            font-size: 16px;
            -moz-box-shadow: 1px 1px 7px #ccc;
            -webkit-box-shadow: 1px 1px 7px #ccc;
            box-shadow: 1px 1px 7px #ccc;
        }
        .form_wrapper h3
        {
            padding: 20px 30px 20px 30px;
            background-color: #0082e7;
            color: #fff;
            font-size: 25px;
            border-bottom: 1px solid #ddd;
        }
        .form_wrapper form
        {
            display: none;
            background: #fff;
        }
        .form_wrapper .column
        {
            width: 47%;
            float: left;
        }
        form.active
        {
            display: block;
        }
        form.login
        {
            width: 350px;
        }
        form.register
        {
            width: 550px;
        }
        form.forgot_password
        {
            width: 300px;
        }
        .form_wrapper a
        {
            text-decoration: none;
            color: #777;
            font-size: 12px;
        }
        .form_wrapper a:hover
        {
            color: #000;
        }
        .form_wrapper label
        {
            display: block;
            padding: 10px 30px 0px 30px; /*margin: 10px 0px 0px 0px;*/
            font-family: "Open Sans" ,Arial,Helvetica,Sans-Serif;
            font-size: 18px;
        }
        .form_wrapper input[type="text"], .form_wrapper input[type="password"]
        {
            border: solid 1px #E5E5E5;
            background: #FFFFFF;
            margin: 5px 30px 0px 30px;
            padding: 9px;
            display: block;
            font-size: 16px;
            width: 76%;
            background: -webkit-gradient(
			linear,
			left top,
			left 25,
			from(#FFFFFF),
			color-stop(4%, #EEEEEE),
			to(#FFFFFF)
		);
            background: -moz-linear-gradient(
			top,
			#FFFFFF,
			#EEEEEE 1px,
			#FFFFFF 25px
			);
            -moz-box-shadow: 0px 0px 8px #f0f0f0;
            -webkit-box-shadow: 0px 0px 8px #f0f0f0;
            box-shadow: 0px 0px 8px #f0f0f0;
        }
        .form_wrapper input[type="text"]:focus, .form_wrapper input[type="password"]:focus
        {
            background: #feffef;
        }
        .form_wrapper .bottom
        {
            background-color: #0082e7;
            border-top: 1px solid #ddd;
            margin-top: 20px;
            clear: both;
            color: #fff;
            text-shadow: 1px 1px 1px #000;
        }
        .form_wrapper .bottom a
        {
            display: block;
            clear: both;
            padding: 10px 30px;
            text-align: right;
            color: #0082e7;
            text-shadow: 1px 1px 1px #000;
        }
        .form_wrapper a.forgot
        {
            float: right;
            font-style: italic;
            line-height: 24px;
            color: #ffa800;
            text-shadow: 1px 1px 1px #fff;
        }
        .form_wrapper a.forgot:hover
        {
            color: #000;
        }
        .form_wrapper div.remember
        {
            float: left;
            width: 140px;
            margin: 20px 0px 20px 30px;
            font-size: 11px;
        }
        .form_wrapper div.remember input
        {
            float: left;
            margin: 2px 5px 0px 0px;
        }
        .form_wrapper span.error
        {
            visibility: hidden;
            color: red;
            font-size: 11px;
            font-style: italic;
            display: block;
            margin: 4px 30px;
        }
        
        [data-icon]:after
        {
            content: attr(data-icon);
            font-family: 'FontomasCustomRegular';
            color: rgb(106, 159, 171);
            position: absolute;
            left: 10px;
            top: 35px;
            width: 30px;
        }
        .form_wrapper input[type="submit"]
        {
            background: #e3e3e3;
            border: 1px solid #ccc;
            color: #333;
            font-family: "Trebuchet MS" , "Myriad Pro" , sans-serif;
            font-size: 14px;
            font-weight: bold;
            padding: 8px 0 9px;
            text-align: center;
            width: 150px;
            cursor: pointer;
            float: right;
            margin: 15px 20px 10px 10px;
            text-shadow: 0px 1px 0px #fff;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -moz-box-shadow: 0px 0px 2px #fff inset;
            -webkit-box-shadow: 0px 0px 2px #fff inset;
            box-shadow: 0px 0px 2px #fff inset;
        }
        .form_wrapper input[type="submit"]:hover
        {
            background: #d9d9d9;
            -moz-box-shadow: 0px 0px 2px #eaeaea inset;
            -webkit-box-shadow: 0px 0px 2px #eaeaea inset;
            box-shadow: 0px 0px 2px #eaeaea inset;
            color: #222;
        }
        
        .CapsLockWarning
        {
            background-color: #2C83EF;
            border: 1px solid brown;
            padding: 6px;
            text-align: center;
            color: #ffffff;
        }
    </style>
    <div id="form_wrapper" class="form_wrapper">
        <!-- We will add our forms here -->
        <h3>
            Login</h3>
        <div style="display: block; float: left; width: 350px; height: 230px;">
            <label>
                Login:</label>
            <input name="ctl00$Body$txtUserName" type="text" name="un" id="Body_txtUserName" tabindex="1" style="width:250px;" />
            <span id="Body_RequiredFieldValidator1" class="error" style="visibility:hidden;">Please Enter Login Name</span>
            <label>
                Password:
            </label>
            <input name="ctl00$Body$txtPassword" type="password" name="pw" id="Body_txtPassword" tabindex="2" oncopy="return false" onpaste="return false" onkeypress="skm_CheckCapsLock( event, &#39;Body_WarnOnYourName&#39;, 5000);" style="width:250px;" />
            <span id="Body_RequiredFieldValidator2" class="error" style="visibility:hidden;">Please Enter Password</span>
            <span id="Body_WarnOnYourName" class="CapsLockWarning" style="visibility:hidden;display:none;"><b>Warning:</b> Caps Lock is on.
            </span>
        </div>
        <div style="display: block; float: left; width: auto; margin-top: 50px;">
            <img alt="" src="images/lock.png" />
        </div>
        
        <div style="display: block; float: left; width: 550px; height: 20px; background-color: #AE4CCD;
            color: WHITE;">
            * Note : Please Login to access the Historical Data.
        </div>
        <div class="bottom">
            <div class="remember">
                <div id="Body_UpdatePanel1">
	
                        <input id="Body_chkRememberMe" type="checkbox" name="ctl00$Body$chkRememberMe" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$Body$chkRememberMe\&#39;,\&#39;\&#39;)&#39;, 0)" tabindex="3" />
                        <span style="display: inline; vertical-align: middle;">Keep me logged in</span>
                    
</div>
            </div>
            <input type="submit" name="ctl00$Body$btnOK" value="Login" onclick="links1.php" id="Body_btnOK" tabindex="4" class="button-link" style="border-style:None;" />
            <div class="clear">
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript">

        function AlertIfCapsLockOn(eventArgs) {

            var keyCode = eventArgs.keyCode ? eventArgs.keyCode : eventArgs.which;
            var shiftKey = eventArgs.shiftKey ? eventArgs.shiftKey : ((keyCode == 16) ? true : false)
            var isEnabled = CapsLockEnabled(keyCode, shiftKey);
            if (isEnabled) {

                toolTip.show();
            }
        }

        function CapsLockEnabled(keyCode, shiftKey) {

            if (((keyCode >= 65 && keyCode <= 90) && !shiftKey) || ((keyCode >= 97 && keyCode <= 122) && shiftKey))
                return true;
            else
                return false;

        }
    </script>

        <!-- end of main_content -->
     
     
     
     
</script>
</form>
</body>
</html>
