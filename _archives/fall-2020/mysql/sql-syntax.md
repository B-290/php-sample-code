# SQL Syntax
## Create: `INSERT INTO`
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

## Read: `SELECT`
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

## Update: `UPDATE`

```sql
UPDATE 
  table_name
SET 
  column1 = value1, column2 = value2, ...
WHERE 
  condition; 
```

## Delete: `DELETE`

```sql
DELETE FROM 
  table_name 
WHERE 
  condition; 
```