# php-fhir-generated
Pre-generated classes from dcarbone/php-fhir

# VERSION: STU3

- Homepage: http://hl7.org/fhir/2017Jan/index.html
- Resources: http://hl7.org/fhir/2017Jan/resourcelist.html

## Usage

This lib can either be used with [Composer](https://getcomposer.org) or on it's own.


### Inclusion with Composer

composer.json require entry:

```json
{
   "dcarbone/php-fhir-generated": "dev-STU3"
}
```

If you choose to then use the autoloader files generated by Composer, pass in `false` when creating an instance of
[PHPFHIRResponseParser](./src/PHPFHIRGenerated/PHPFHIRResponseParser.php) so that it does not attempt to register
the included autoloader.

```php
$parser = new PHPFHIRGenerated\PHPFHIRResponseParser(false);
```

### Standalone Usage

Something like this:

```php
require 'src/PHPFHIRGenerated/PHPFHIRResponseParser.php'
$parser = new PHPFHIRGenerated\PHPFHIRResponseParser();
```
