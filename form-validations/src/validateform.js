function validateHTMlform()
{
  let form = document.StudenSignupForm;
   if( form.FirstName.value == "" )
   {
     alert( "Enter Your First Name!" );
     form.FirstName.focus() ;
     return;
   }
   if( form.LastName.value == "" )
   {
     alert( "Enter Your Last Name!" );
     form.LastName.focus() ;
     return;
   }
  
   if( form.Address.value == "" )
   {
     alert( "Enter Your Personal Address!" );
     form.Address.focus() ;
     return;
   }
   var x = document.form.EmailID.value;

    var atpos = x.indexOf("@");

    var dotpos = x.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) { 
      alert ("Not a valid e-mail address");
      form.EmailID.focus() ;
      return ;
      }
   if( form.City.value == "" )
   {
     alert( "Enter Your City!" );
     form.City.focus() ;
     return;
   }
   if( form.Country.value == "" )
   {
     alert( "Enter Your Country!" );
     form.Country.focus() ;
     return;
   } 
   if( form.State.value == "" )
   {
     alert( "Select Your State!" );
     form.State.focus() ;
     return;
   }
   if( form.PinCode.value == "" )
   {
     alert( "Enter your pincode in format ######." );
     form.PinCode.focus() ;
     return;
   }
  if( form.DOB.value == "" )
   {
     alert( "Enter your DOB!" );
     form.DOB.focus() ;
     return;
   }
}