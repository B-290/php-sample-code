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

2. Select from specific rows with WHERE

    ```sql
    SELECT 
      column1, column2, ...
    FROM 
      table_name 
    WHERE
      condition;
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

### Update: `UPDATE`

```sql
UPDATE 
  table_name
SET 
  column1 = value1, column2 = value2, ...
WHERE 
  condition; 
```

### Delete: `DELETE`

```sql
DELETE FROM 
  table_name 
WHERE 
  condition; 
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

Example:

```sql
SELECT 
  c.id, first_name, last_name 
FROM 
  customer as c 
INNER JOIN 
  rental as r 
ON 
  c.id = r.customer_id 
```

- The `WHERE` condition is optional.
- The `AS` keyword is optional and is used to abbreviate long table names.
- `t1.field` is only needed if the field name exists in both tables. Otherwise, `t1.` can be ommitted.
- There are other types of joins but `INNER JOIN` is most common.