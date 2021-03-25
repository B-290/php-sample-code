# Relational Data Models
- [SQL Syntax Cheat Sheet](sql-syntax.md)
- [Activity: Build a database in phpMyAdmin](phpmyadmin.md)
- [Activity: Import `aviano-db`](rentals)

## Terminology

Relational Database
: Data organized into one or more tables (or "relations") of columns and rows, with a unique key identifying each row.

Entity
: A definable thing—such as a person, object, concept or event—that can have data stored about it. Think of entities as nouns. Examples: a customer, student, car or product. Typically shown as a rectangle.

Record
: A row of related data where every row in the table has the same structure. For example, in a table that represents companies, each row would represent a single company.

Column
: A data type (number, string, date, etc) that represents a single attribute common to all records in a table. Also known as a field.

Data Type
: The data format a column is defined to contain. `mysql` supports numeric types, date and time types, string (character and byte) types, spatial types, and the JSON data type. 

Constraint
: A rule that further restricts a column in some way. The most common constraints are primary keys, foreign keys, unique keys, check constraints and null constraints.

Primary Key
: A column that uniquely identifies each record (row) in a table. In most tables, this is an `id` column that starts at `1` and increments by one everytime a row is added.

Foreign Key
: A column that must have a value that also exists in a column of another table. For example, the `employer` column in a `users` table will often have a foreign key to the `id` column of a `companies` table.

Unique Key
: Like a Primary Key, but the data in the column doesn't inherently identify a record. For example, a column that dictates the sort order of a table could have a Unique Key.

Check Contstraint
: Some condition that data needs to meet before it can be inserted into a column. For example, `age` must be a number that is not negative.

Null Constraint
: A field cannot be `NULL` (which may not be the same as empty).

One-to-many Relationship
: When one record in a table can be associated with one or more records in another table. For example, each customer can have many sales orders.

Many-to-many Relationship
: When multiple records in a table are associated with multiple records in another table. For example, a customer can buy many products and a product can be bought by many customers. Three tables are required to create many-to-many relationships: Table A, Table B and a _join_ table between them.