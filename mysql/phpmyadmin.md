# phpMyAdmin Demo
## Related Pages
- [Terminology](./)
- [SQL Syntax Cheat Sheet](sql-syntax.md)
- Activity: Build a database in phpMyAdmin
- [Activity: Import `aviano-db`](rentals)

## Sample Data
- [Animals](https://github.com/sait-wbdv/sample-data/blob/main/js/animals.js)

## Instructions
1. Create a database:
    - Name: sait-wbdv (or whatever project name you need);
    - Encoding: `utf8_unicode_ci` or `utf8_general_ci` (both are fine for us)
2. Create table:
    - `Name`: pick a plural noun that describes the data contained in the table. Examples: `users`, `invoices`, `images`, etc.
    - `Number of columns`: Take a best guess, you can add/remove later.
3. Define columns - There are a lot of options that depend on your situation. Some general guidelines:
    - First column:
        - Name: id
        - Index: Primary
        - A_I (Auto-increment): checked
    - Type can be `INT`, `VARCHAR`, `TEXT` or `DATE` in most cases.
    - `VARCHAR` requires a `Length`. `255` is fine in most cases.
    - Default of `CURRENT_TIMESTAMP` often comes in handy for `DATE` types.
    - For real projects, consider adding meta-data columns such as (but not limited to):
        - `active`: with a value of `Y` or `N` as an alternative to deleting rows.
        - `created_date` and `created_by` for inserted rows.
        - `updated_date` and `updated_by` for updated rows.
4. Insert records -> `Insert` on the top bar
    - `id` can be blank if you checked `A_I` for that column.
5. Update records -> `Browse` (if `Browse` isn't available, `Structure` -> select a table)
    - From here you can edit, copy or delete rows.
6. Add/remove columns to/from a table -> `Structure`
    - Note: it's a lot harder to change a table that already has data in it.
7. Query the database with SQL -> `SQL`