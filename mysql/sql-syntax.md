# SQL Syntax
## Related Pages
- [Terminology](./)
- SQL Syntax Cheat Sheet
- [Activity: Build a database in phpMyAdmin](phpmyadmin.md)
- [Activity: Import `aviano-db`](rentals)

## CRUD Operations
### Create: `INSERT INTO`
1. Insert data into all columns of a table:

    ```sql
    INSERT INTO 
      table_name
    VALUES 
      (value1, value2, value3, ...); 
    ```

2. Insert data into specific columns of a table:

    ```sql
    INSERT INTO 
      table_name (column1, column2, column3, ...)
    VALUES 
      (value1, value2, value3, ...);  
    ```

### Read: `SELECT`
1. Select specific columns from all rows from a table:

    ```sql
    SELECT 
      column1, column2, ...
    FROM 
      table_name; 
    ```

    - Examples: 
        - Find the First Name and Last name for every customer:

            ```sql
            SELECT first_name, last_name FROM customer
            ```
        
2. Select from specific rows with WHERE

    ```sql
    SELECT 
      column1, column2, ...
    FROM 
      table_name 
    WHERE
      condition;
    ```

    - Example: Find all fields for anyone with a last name of 'Packe':

        ```sql
        SELECT * FROM customer WHERE last_name = 'Packe'
        ```

3. Order the rows returned with ORDER BY

    ```sql
    SELECT 
      column1, column2, ...
    FROM 
      table_name 
    WHERE
      condition;
    ORDER BY
      column1, column2 ASC|DESC
    ```

    - Example: Find all customers and order them by last name, starting at Z:

        ```sql
        SELECT id, first_name, last_name FROM customer ORDER BY last_name DESC
        ```

### Update: `UPDATE`

```sql
UPDATE 
  table_name
SET 
  column1 = value1, column2 = value2, ...
WHERE 
  condition; 
```
    - Example: Update the last name of customer `4` to "Marcias":

        ```sql
        UPDATE customer SET last_name = 'Marcias' WHERE id = '4' 
        ```


### Delete: `DELETE`

```sql
DELETE FROM 
  table_name 
WHERE 
  condition; 
```

    - Example: Delete all records that total more than 1000 (then get fired):

        ```sql
        DELETE FROM rental_invoice WHERE total_amount_payable > 1000; 
        ```

## Joins
### `INNER JOIN`: Return records that match between multiple tables

```sql
SELECT 
  t1.field, t2.field
FROM 
  table1 AS t1
INNER JOIN 
  table2 AS t2
ON 
  t1.field = t2.field
WHERE
  condition; 
```

    - The `WHERE` condition is optional.
    - The `AS` keyword is optional and is used to abbreviate long table names.
    - `t1.field` is only needed if the field name exists in both tables. Otherwise, `t1.` can be ommitted.
    - There are other types of joins but `INNER JOIN` is most common.
    - Example: Find the start date, first/last name and customer id of all rentals made after July 1st, 2018.

        ```sql
        SELECT 
          c.id, first_name, last_name, start_date
        FROM 
          customer as c 
        INNER JOIN 
          rental as r 
        ON 
          c.id = customer_id  
        WHERE 
          start_date > 20180701
        ```

