<?php $parentTitle = "JASL"; $currentTitle = "Contact"; $separator = " | "; include "inc/top.inc";?>

		<?php include "inc/nav.inc";?>

		<html>
      
      <script type="text/javascript">

        
        
        function validate()
      {
      
         if( document.myForm.Firstname.value == "" )
         {
            alert( "Please provide your first name!" );
            document.myForm.Firstname.focus() ;
            return false;
         }
         if( document.myForm.Lastname.value == "" )
         {
            alert( "Please provide your last name!" );
            document.myForm.Lastname.focus() ;
            return false;
         }
          var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
        

         
         if( document.myForm.Phone.value == "" ||
         isNaN( document.myForm.Phone.value ) ||
         document.myForm.Phone.value.length != 10 )
         {
            alert( "Please provide a phone in the format ##########." );
            document.myForm.Phone.focus() ;
            return false;
         }
         
         
         return( true );
      }

      </script>
      
   </head>
   
   <body>
      <form action="database-write.php" name="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="2" border="1">
            
            <tr>
               <td align="right">First Name</td>
               <td><input type="text" name="Firstname" /></td>
            </tr>
            <tr>
               <td align="right">Last Name</td>
               <td><input type="text" name="Lastname" /></td>
            </tr>
            
            <tr>
               <td align="right">EMail</td>
               <td><input type="text" name="EMail" /></td>
            </tr>
            
            <tr>
               <td align="right">Phone</td>
               <td><input type="text" name="Phone" /></td>
            </tr>
            
            <tr>
               <td align="right">Message</td>
              <td> <textarea name="comment">Enter text here...</textarea></td>
            </tr>
            
           
            
            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit" /></td>
            </tr>
            
         </table>
      </form>
      
   </body>
</html>

		<?php include "inc/footer.inc";?>

	</div><!--.container-->

	<?php include "inc/scripts.inc";?>
	
	</body>

</html>
