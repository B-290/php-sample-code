# Vehicle Rental Website
1. Import the sample rental database using the included [import file](import-db.sql);
2. Create a new DB user with the following:
    - User name: `rentals`
    - password: Your choice but don't use a pw you use in real life.
    - Add access privileges to database:
        - Privileges:
          - All Data actions;
          - All Structure actions;
          - No Administration actions.
3. In `includes/_config.php`:
    1. Connect to DB

        ```php
        // Database connection
        $conn = mysqli_connect('localhost', 'rentals', 'password1234', 'aviano-db');

        // check connection
        if(!$conn){
          echo 'Connection error: '. mysqli_connect_error();
        }
        ```

4. In whichever page that needs the database info (`rentals.php`):
    1. Create query

        ```php
        // *******************
        // Fetch all
        // GET '/vehicles/'
        //********************

        // write query for all vehicles
        $sql = 'SELECT * FROM vehicle ORDER BY model';

        ```
    2. Fetch result:

        ```php
        // get the result set (set of rows)
        $result = mysqli_query($conn, $sql);

        // fetch the resulting rows as an array
        $vehicles = mysqli_fetch_all($result, MYSQLI_ASSOC);

        var_dump($vehicles);
        ```
    3. Loop through `$vehicles`

## Attributions
[hurshd0/aviano-db](https://github.com/hurshd0/aviano-db)