sweetalertlink
============
Before you go to the link you can add a control message



![BackgroundImage](https://e.top4top.net/p_10232pajr1.png)_
![BackgroundImage](https://f.top4top.net/p_1023smjdb2.png) 
![BackgroundImage](https://a.top4top.net/p_1023xtv8e3.png)


### Text one

```javascript

swal("Good job!", "You clicked the button!", "success");

```

#### messages edit
```javascript
    
    
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


```


### Add buttons
```javascript
 buttons: ["Oh noez!", "Aww yiss!"],
```

### Add Press the button
```javascript

Html 


<button class="btn btn-dark downprofile a" onclick="installer()">  
	installer
	</button>
    
   
   javascript
   
   
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
   
   
   
    

```

### Add link 

```javascript

.then((willDelete) => {
  if (willDelete) {
    swal("The application you requested is equipped to install", {
      icon: "success",
       button: "installer",
    }).then(function() {
    window.location = "here link";
});

```


### You can add as many variations as you want through the code site

https://sweetalert.js.org






