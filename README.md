php-base64-encode
=================

PHP command line script to encode an image to a base64 script suitable for JavaScript to use.

## Usage

php encoder.php image.png > image.txt

## JavaScript usage example
```
var imagestring = "contents of the image.txt";
var image = new Image();
image.src = imagestring;
image.onload = function() {
  document.body.appendChild(image);  
}
```

## License

Copyright (c) 2013 Robert Price

[MIT License](ttp://zenorocha.mit-license.org/)

## Author

* [Robert Price](http://github.com/robertprice)