php-base64-encode
=================

PHP command line script to encode an image to a base64 script suitable for JavaScript
HTML, or CSS to use.

## Usage 

Encoding an image on the command line

php encoder.php image.png > image.txt

## HTML usage example
```
<img src="contents of the image.txt" alt="example image" />
```

## JavaScript usage example
```
var imagestring = "contents of the image.txt";
var image = new Image();
image.src = imagestring;
image.onload = function() {
  document.body.appendChild(image);  
}
```

## CSS usage example
```
li { 
  background: url(contents of the image.txt) no-repeat left center;
}
```

## License

Copyright (c) 2013 Robert Price

[MIT License](ttp://zenorocha.mit-license.org/)

## Author

* [Robert Price](http://github.com/robertprice)