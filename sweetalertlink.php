<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
        <title>azozz</title>
        

    </head>
    
    <body>
        
        
      <br ><br><br>
      
      
<center>
	<button class="btn btn-dark downprofile a" onclick="installer()">  
	installer
	</button>
	
	</center>
	
	
        



<script type="text/javascript">
function installer(){
 
swal({
    title: "Installer..?",
    text: "Do you want the installation!!",
     icon: "warning",
    buttons: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("The application you requested is equipped to install", {
      icon: "success",
       button: "installer",
    }).then(function() {
    window.location = "itms-services://?action=download-manifest&url=https://dzmohaipa.com/Jb2017/ElectraiOS113mu.plist";
});
  } else {
   swal({
  title: "Thanks You!",
  text: "For using our store",
  icon: "error",
});
  }
})
 
}
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
</html>