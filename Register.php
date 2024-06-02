<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Saverstyles</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style5 {font-size: 85%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
    font-size: small;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-size: small}
-->
</style>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style12 {font-size: small; font-weight: bold; }
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: small;
    font-weight: bold;
    color: #000000;
}
.style4 {font-size: small;
    font-weight: bold;
    color: #FFFFFF;
}
.style5 {color: #FFFFFF}
.style6 {color: #000000}
-->
</style>
<style type="text/css">

.ds_box {
    background-color:#336633;
    border: 2px solid #666600;
    position: absolute;
    z-index: 32767;
}

.ds_tbl {
    background-color: #FFF;

}

.ds_head {
    background-color: #85A157;
    color: #FFF;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    text-align: center;
    letter-spacing: 2px;
}

.ds_subhead {
    background-color: #85A157;
    color: #000;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    width: 32px;
}

.ds_cell {
    background-color:#FFFFCC;
    color: #000;
    font-size: 13px;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    padding: 5px;
    cursor: pointer;
    border: 1px solid #666600;
}

.ds_cell:hover {
    background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
                    [//Name
                        ["minlen=1",
        "Please Enter Name"
                          ],
                          ["alpha",
        "Please Enter Valid Name"
                          ]

                     ],
                   [//Address
                          ["minlen=1",
        "Please Enter Address"
                          ]

                   ],
                   [//Email

                        ["minlen=1",
        "Please Enter Email "
                          ],
                          ["email",
        "Please Enter valid email "
                          ]
                   ],
                   [//Mobile
                           ["num",
        "Please Enter valid Mobile "
                          ],
                          ["minlen=10",
        "Please Enter valid Mobile "
                          ],
                          ["maxlen=10",
        "Please Enter valid Mobile "
                          ]
                   ]
                   ,
                   [//Gender

                   ],
                   [//BirthDate


                   ],


                   [//User
                          ["minlen=1",
        "Please Enter UserName "
                          ]


                   ],
                   [//Password
                        ["minlen=1",
        "Please Enter Password "
                          ]


                   ]

            ];
</SCRIPT>
<body>
<div id="wrapper">

  <?php
  include "Header.php";
  ?>

  <div id="content">
    <h2><span style="color:#003300">New User Registration</span></h2>

    <form action="insert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" name="form2" id="form2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="28"><div align="left">Customer Name:</div></td>
          <td><span id="sprytextfield3">
            <label>
            <input type="text" name="txtName" id="txtName" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="69"><div align="left">Address:</div></td>
          <td><span id="sprytextarea1">
            <label>
            <textarea name="txtAddress" id="txtAddress" cols="35" rows="3"></textarea>
            </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="29">Email ID:</td>
          <td><span id="sprytextfield4">
            <label>
            <input type="text" name="txtEmail" id="txtEmail" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="27">Mobile Number:</td>
          <td><span id="sprytextfield5">
            <label>
            <input type="text" name="txtMobile" id="txtMobile" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="29">Gender:</td>
          <td><label>
            <select name="rdGender" id="rdGender">
              <option>Male</option>
              <option>Female</option>
            </select>
          </label></td>
        </tr>
        <tr>
          <td height="29">Birth Date:</td>
          <td><span id="sprytextfield9">
            <label>
            <input type="text" name="txtDate" id="txtDate" onclick="ds_sh(this);" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="29">User Name:</td>
          <td><span id="sprytextfield6">
            <label>
            <input type="text" name="txtUserName" id="txtUserName3" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td height="30">Password:</td>
          <td><span id="sprytextfield7">
            <label>
            <input type="password" name="txtPassword" id="txtPassword" />
            </label>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button2" id="button2" value="Register" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>
    <table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><p><img src="img/Jeans.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/asd.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
        <td><p><img src="img/images.jpg" alt="box" width="100" height="100" hspace="10" align="left" class="imgleft" title="box" /></p></td>
      </tr>
      <tr>
        <td height="26" bgcolor="#BCE0A8"><div align="center" class="style9">Jeans</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">Bleasures</div></td>
        <td bgcolor="#BCE0A8"><div align="center" class="style9">T-Shirts</div></td>
      </tr>
    </table>
  </div>
  <?php
 include "Right.php";
 ?>
  <div style="clear:both;"></div>
   <?php
 include "Footer.php";
 ?>
</div>
<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
//-->
</script>
</body>
</html>
