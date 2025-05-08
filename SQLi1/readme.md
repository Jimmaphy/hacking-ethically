# SQL Injection Exercize 1

So, the first hacking skills have been acquired.
You are now capable of using Cross Site Scripting! Congratulations!
The next vulnerability is similar to the previous one and targets SQL code.
SQL, or Sequel if ya fancy like that, is a language used by databases.
Through this languages, data within the database can be manipulated.

### Discovery

The first thing you note when opening the website, is the search box at the top of the page.
This functions allows you to filter the courses by name.
At this point, it should be clear that the information is retrieved through SQL.
Try entering the letter `t` into the search box.
Since both `Math` and `History` are displayed, the conclusion can be made that the query is something like:

```sql
SELECT [columns]
FROM [table_name]
WHERE [name_column] LIKE '%t%';
```

It is impossible at this point to determine the exact statement,
unless you cheated and looked at the SQL-file that constructs the database 👀.
Something we _do_ know is that the string entered in the search box gets inserted in a query somehow.
Lets see if there something we can do with it. Enter the following text into the search box.
**Do note:** there is a space at the end of the line!

```txt
' ORDER BY name -- 
```

The quote ends the string of the LIKE-statement, then we order the list by the `name` column.
How do we know the name all of sudden? We don't, it's a 'guess'. 100%, no coincidence whatsoever, just continue.
The `--` at the means that the rest of the query should be treated as comments, and is thus ignored.
Low and behold, the order of the result changes.
This means that the website is vulnerable.

### How to exploit this

Now that its clear that the website is vulnerable, it is time to exploit it.
So... now what? Let's get some information on the database.
Every MySQL database has something know as an `information_schema`.
This is way to access metadata from the database.
There are a lot of access points that can be used, take a look at [the MySQL documentation](https://dev.mysql.com/doc/refman/8.4/en/information-schema.html).
Let's start simple, the [TABLES](https://dev.mysql.com/doc/refman/8.4/en/information-schema-tables-table.html).

Since we can assume that only the result of the first statement is actually processed by the website,
a `union` needs to be made to append the results of a second query onto those of the first one.
A requirement for this is that the number of columns match. In this case, 3.
The documentation shows the columns of the TABLES `information_schema`.
Interesting one are:

Column          | Description
----------------|-------------------------------------------------------------
TABLE_SCHEMA    | The name of the schema (database) to which the table belongs
TABLE_NAME      | The name of the table
TABLE_ROWS      | The number of rows

By starting with these three columns, we should get an idea of the database structure.
Again, mind the space at the end of the statement below. When you execute this,
the results of the second query are blindly appended the results of the first query.
This works in most cases when a website is vulnerable to SQL Injection.

```txt
' UNION ALL SELECT TABLE_SCHEMA, TABLE_NAME, TABLE_ROWS FROM information_schema.TABLES; -- 
```

A list is displayed with all the tables within the database instance, including the parent database.
This provides information about three interesting tables:

Database    | Table     | Rows
------------|-----------|-----
ehc_sqli    | Grades    | 6
ehc_sqli    | Subjects  | 3
ehc_sqli    | Students  | 3

_**Info:**_ it would have been possible to determine the database first using the first query below.
All the distinct table_schema's are selected, which correspond to the database names.
In order to make the union functional, two empty strings are added.
Now that the query has the same amount of columns as the original query, the result
will be a list of tables. After which, the tables could have been determined using the second query.

```txt
' UNION ALL SELECT DISTINCT TABLE_SCHEMA, '', '' FROM information_schema.TABLES; -- 
' UNION ALL SELECT DISTINCT TABLE_NAME, '', '' FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'ehc_sqli'; -- 
```

### Your turn

Now it is time to show off your SQL and documentation reading skills.
Try and complete the following challenges.
It is important to note that this project is setup for these queries to function.
The update excersize requires `stacked queries` or `batch queries`, multiple queries executed in sequence, seperated by a `;`.
Most programming languages, or the functions they provide, do not support this.
So a website vulnerable to SQL Injection, is not immediately vulnerable to all of it.

1. Determine the amount of columns in each table. You need [information_schema.COLUMNS](https://dev.mysql.com/doc/refman/8.4/en/information-schema-columns-table.html) and a `count`.
2. Get all the students registered at this absolutely monsterous school.
3. Get all the grades of the students.
4. [Hard] Get a list of students and their grades, but instead of numbers, display the names of the students and the subjects.
5. Update all the grades of all students, by incrementing them by 1. 
6. You know absolutely hate school, delete the grades table.
