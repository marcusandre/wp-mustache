
# WP-Mustache

  **Integrate logic-less templating into your Wordpress themes.**

  > Mustache can be used for HTML, config files, source code - anything. It
  > works by expanding tags in a template using values provided in a hash or
  > object. We call it 'logic-less' because there are no if statements, else
  > clauses, or for loops. Instead there are only tags. Some tags are replaced
  > with a value, some nothing, and others a series of values. This document
  > explains the different types of Mustache tags. – http://mustache.github.io/

## Installation

  Just download this repository and unzip it's content right into your 
  ```wp-content/plugins``` directory.

## Usage

```php
// compose
$str = 'Hello {{planet}}';
$arr = array('planet' => 'World!');

// generate
$res = parse($str, $arr); 

// use
echo $res; // "Hello World!"
```

## License

  MIT
