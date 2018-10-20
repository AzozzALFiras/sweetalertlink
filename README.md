sweetalertlink
============


![BackgroundImage](https://e.top4top.net/p_10232pajr1.png)_
![BackgroundImage](https://f.top4top.net/p_1023smjdb2.png) 
![BackgroundImage](https://a.top4top.net/p_1023xtv8e3.png)_ 


### Text one

```javascript

swal({
    title: "Installer..?",
    text: "Do you want the installation!!",
     icon: "warning",
    buttons: true,
})
```

#### messages edit
```javascript
    title: "title",
   text: "text ",
    icon: "warning",
   
    
   swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
```


### Add buttons
```javascript
 buttons: ["Oh noez!", "Aww yiss!"],
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
