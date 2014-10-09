
# WP-Mustache

  **Integrate logic-less templating into your Wordpress themes.**

  > Mustache can be used for HTML, config files, source code - anything. It
  > works by expanding tags in a template using values provided in a hash or
  > object. We call it 'logic-less' because there are no if statements, else
  > clauses, or for loops. Instead there are only tags. Some tags are replaced
  > with a value, some nothing, and others a series of values. This document
  > explains the different types of Mustache tags. – http://mustache.github.io/

## Installation

  Run the following commands in your ```wp-content/plugins``` directory:

```bash
$ git clone https://github.com/marcusandre/wp-mustache.git .
$ git submodule init && git submodule update
```

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
