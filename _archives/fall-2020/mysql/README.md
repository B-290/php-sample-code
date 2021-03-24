# Relational Data Models
- [phpMyAdmin Activity](phpmyadmin.md)
- [SQL Syntax Cheat Sheet](sql-syntax.md)

## Terminology
<dl>
  <dt>Relational Database</dt>
  <dd>Data organized into one or more tables (or "relations") of columns and rows, with a unique key identifying each row.</dd>
  <dt>Record</dt>
  <dd>A row of related data where every row in the table has the same structure. For example, in a table that represents companies, each row would represent a single company.</dd>
  <dt>Column</dt>
  <dd>A data type (number, string, date, etc) that represents a single attribute common to all records in a table.</dd>
  <dt>Constraint</dt>
  <dd>A rule that further restricts a column in some way. The most common constraints are primary keys, foreign keys, unique keys, check constraints and null constraints.</dd>
  <dt>Primary Key</dt>
  <dd>A column that uniquely identifies each record (row) in a table. In most tables, this is an <code>id</code> column that starts at <code>1</code> and increments by one everytime a row is added.</dd>
  <dt>Foreign Key</dt>
  <dd>A column that must have a value that also exists in a column of another table. For example, the <code>employer</code> column in a <code>users</code> table will often have a foreign key to the <code>id</code> column of a <code>companies</code> table.</dd>
  <dt>Unique Key</dt>
  <dd>Like a Primary Key, but the data in the column doesn't inherently identify a record. For example, a column that dictates the sort order of a table could have a Unique Key.</dd>
  <dt>Check Contstraint</dt>
  <dd>Some condition that data needs to meet before it can be inserted into a column. For example, <code>age</code> must be a number that is not negative.</dd>
  <dt>Null Constraint</dt>
  <dd>A field cannot be <code>NULL</code> (which may not be the same as empty).</dd>
</dl>

