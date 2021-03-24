# PHP - Getting Started
## PHP Example Code
- [RPG Website](examples/characters)
- [Syntax and Implementation Examples](examples/phpsandbox)

## Activities
- [Refactor Adding Machine](activities/calculate)
- [Refactor WBDV Sample Site](activities/sait-wbdv)

## Differences between PHP and Javascript
### Key Takeaways
- **XAMPP needs to be running** in order for `php` pages to execute. The web directory will be fixed, as opposed to Node where we can boot up a server where ever we want.
- `php` is a view compiling language very similar to EJS. Imagine a `php` file as an upgraded `html` file. The PHP run-time will ignore HTML and will only execute code between the `<?php` and `?>` tags. By default it will respond with the HTML and whatever the `php` resolved to (usually `html`).
- Although `php` pages will often represent an HTML page (including a `DOCTYPE` and elements such as `head`, `body`, etc), it doesn't have to. Some pages will only hold PHP code (still between `<?php` and `?>` tags) that do not output any HTML.
- Unlike Javascript, PHP files can be easily included in other PHP files using one of the following functions:
    - `include()`
    - `require()`
    - `include_once()`
    - `require_once()`
- There are no asynchronous events in `php`.
- Functions are not first-class, meaning there are no callback functions in `php`.

### Syntax (primary differences)
- Variables: There are no declaration keywords. Instead, variables are created and returned with the `$` symbol:

    ```php
    $day = 'Monday';
    ```
- An `Array` in Javascript is an "indexed array" in `php`.

    ```php
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';
    ```

- An `Object` in Javascript is an "associative array" in `php`. `php`'s version of Objects are called Classes, which we won't cover in this course.

    ```php
    $people = [
      22 => 'Brad',
      44 => 'Jose', 
      63 => 'William'
    ];
    $people[42] = 'Jill';
    ```
- Outputting content: instead of `console.log()`, `php` uses the `echo()` function (parentheses are optional) to output strings and numbers.

    ```php
    echo $people['Brad'];
    echo $ids[22];
    echo $people['Jill'];
    ```
- To log a complex data type such as an array, use the `var_dump()` function:

    ```php
    var_dump($people);
    ```

## Example PHP Directory Structure

```
project-root
  ├─ assets
      ├─ css
      ├─ js
      └─ images
  ├─ includes
      ├─ _config.php
      ├─ _functions.php
      ├─ head.php
      ├─ header.php
      ├─ nav.php
      └─ footer.php
  ├─ index.php
  ├─ about.php
  ├─ products.php
  └─ contact.php
```