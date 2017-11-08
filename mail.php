<div style="padding:20px; margin:10px; background-color:#FFFFFF;">
  <script language="JavaScript" type="text/javascript">
function validateForm()
{
var x=document.forms["contactform"]["name"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
  var x=document.forms["contactform"]["email"].value;
if (x==null || x=="")
  {
  alert("Email must be filled out");
  return false;
  }
  var x=document.forms["contactform"]["phone"].value;
if (x==null || x=="")
  {
  alert("Contact  must be filled out");
  return false;
  }
}
          </script>
  <?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $cname = $_REQUEST['cname'] ;
    $name = $_REQUEST['name'] ;
	  $desi = $_REQUEST['desi'] ;
	   $email = $_REQUEST['email'] ;
	    $phone = $_REQUEST['phone'] ;
		$price = $_REQUEST['price'] ;
		$product = $_REQUEST['product'] ;
		$qty = $_REQUEST['qty'] ;
		$ddate = $_REQUEST['ddate'] ;
  $msg = $_REQUEST['message'] ;
  $message = " Company Name :$cname /n
               Contact Person: $name /n
			   Designation : $desi /n
			   E-mail : $email /n
			   Contact Number : $phone /n
			   Price Range of Gift Required: $price /n
			   Quantity Required : $qty /n
			   Product Required : $product /n
			   Delivery Date :$ddate /n
			   Message/Comments: $msg /n";
   $subject = 'Message form Website' ;
  mail("new.afser@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form. We will get back to you shortly.";
  }
else
//if "email" is not filled out, display the form
  {
  echo "
            <form action=\"mail.php\" method=\"post\" name=\"contactform\" id=\"contactform\" onsubmit=\"return validateForm()\">
              <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                  <td>Company Name <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"cname\" type=\"text\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC; font-size:11px; color:#666666;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"Company Name / City\" /></td>
                </tr>
                <tr>
                  <td>Conact Person <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"name\" type=\"text\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC;font-size:11px; color:#666666;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"Enter the Name here\" /></td>
                </tr>
                <tr>
                  <td>Designation <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input type=\"text\" name=\"desi\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC; color:#666666;font-size:11px;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" /></td>
                </tr>
                <tr>
                  <td>E-mail <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input type=\"text\" name=\"email\" style=\"border:1px solid #CCCCCC;color:#666666; font-size:11px;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" /></td>
                </tr>
                <tr>
                  <td>Contact Number <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input type=\"text\" name=\"phone\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC;color:#666666;font-size:11px;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" /></td>
                </tr>
                <tr>
                  <td>Price Range of Gift Required: <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input type=\"text\" name=\"price\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC;color:#666666; font-size:11px; border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"Rs.20-Rs.10000\" /></td>
                </tr>
                <tr>
                  <td>Quantity Required <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"qty\" type=\"text\" onfocus=\"this.value=''\" style=\"border:1px solid #CCCCCC;color:#666666; font-size:11px; border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"Mention the quanity required\" /></td>
                </tr>
                <tr>
                  <td>Product Required <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"product\" onfocus=\"this.value=''\" type=\"text\" style=\"border:1px solid #CCCCCC;color:#666666;font-size:11px;  border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"Mention codes if any gift selected on this site\" /></td>
                </tr>
                <tr>
                  <td>Delivery Date <br /></td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"ddate\" onfocus=\"this.value=''\"  type=\"text\" style=\"border:1px solid #CCCCCC;color:#666666; font-size:11px; border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\" value=\"No of days within which gifts to be delievered\" /></td>
                </tr>
                <tr>
                  <td>Message/Comment if any </td>
                  <td height=\"35\">&nbsp;</td>
                  <td><textarea name=\"msg\" style=\"border:1px solid #CCCCCC; color:#666666;font-size:11px; border-radius: 5px; box-shadow: 0 0 5px #DDD inset;\"></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td height=\"35\">&nbsp;</td>
                  <td><input name=\"submit\" type=\"submit\" value=\"Submit\" style=\"width:100px; background-color:#993366; color:#FFFFFF;\" /></td>
                </tr>
              </table>
              
              <div align=\"center\"><img src=\"images/line_enq.jpg\" width=\"313\" height=\"11\" />
                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                  <tr>
                    <td>&nbsp;</td>
                    <td><div align=\"center\"><img src=\"images/sharoop_name.jpg\" width=\"287\" height=\"38\" /></div></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height=\"30\" align=\"center\">&quot; House of Corporate Gifts - Pens &amp; Trophies &quot; <br />
                      <br /></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align=\"center\"><p>Pankaj Jain - 9840977008<br />
                      Mohanlal Jain - 9840155553<br /> <a href=\"mailto:giftssrs@yahoo.co.in\" target=\"_blank\"  style=\"color:#999999;\">E-mail: giftssrs@yahoo.co.in</a></p>
                      <p></p>
                      <p>38-b Narayana Mudali Street, Sowcarpet<br />
                        Chennai - 600079</p></td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align=\"center\"><p style=\"color:#0066CC; padding:5px; font-size:10px;\" >
                      <a href=\"https://www.facebook.com/sharoopchand.saremal/photos_albums\" class=\"icon-facebook\" style=\"color:#0066CC; padding:5px;\"> Sha Roopchand Saremal</a></p></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
              </div>
            </form>";
			 }
			?>
</div>
