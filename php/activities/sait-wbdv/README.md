# Template partials
## Activity
In this activity you will separate out the repeating page elements of the [starter](starter) website into template partials like we did with EJS.
1. Copy the starter files into a new project directory.
2. Rename the HTML files so they have a file extension of `.php`.
3. Create an `_includes` folder (`inc` is also often used).
4. Create the following template partials and copy the relevant code into the files:
    - `head.php` for the meta contained in the `head` elements of each page.
    - `nav.php` for the navigation elements.
    - `footer.php` for the footer. Thanks to Dan for the code!
5. Include the partials in each web page using the [`include()`](https://www.php.net/manual/en/function.include.php) function.