# Installation

Add `desmart/support` to `composer.json`:

```json
{
  "require": {
    "desmart/support": "1.0.*"
  }
}
```

# Helpers

## bool()

Converts string to boolean values using `filter_var()` with `FILTER_VALIDATE_BOOLEAN`.  
When `filter_var()` is unable to convert it to boolean exception will be thrown.

Example usage:

```php
<?php
bool('1'); // true
bool('yes'); // true
bool('no'); // false
?>
```
