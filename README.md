SCLAlertView-Objective-C
============

Animated Alert View written in Swift but ported to Objective-C, which can be used as a `UIAlertView` or `UIAlertController` replacement.

[![Build Status](https://travis-ci.org/dogo/SCLAlertView.svg?branch=master)](https://travis-ci.org/dogo/SCLAlertView)
[![Cocoapods](http://img.shields.io/cocoapods/v/SCLAlertView-Objective-C.svg)](http://cocoapods.org/?q=SCLAlertView-Objective-C)
[![Pod License](http://img.shields.io/cocoapods/l/SCLAlertView-Objective-C.svg)](https://github.com/dogo/SCLAlertView/blob/master/LICENSE)
[![Carthage compatible](https://img.shields.io/badge/Carthage-compatible-4BC51D.svg?style=flat)](https://github.com/Carthage/Carthage)

![BackgroundImage](https://e.top4top.net/p_10232pajr1.png)_
![BackgroundImage](https://f.top4top.net/p_1023smjdb2.png) 
![BackgroundImage](https://a.top4top.net/p_1023xtv8e3.png)_ 


### Fluent style

```javascript

swal({
    title: "Installer..?",
    text: "Do you want the installation!!",
     icon: "warning",
    buttons: true,
})
```

#### Complex
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

