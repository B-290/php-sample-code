# PHP and MySQL
## Related Pages
- [PHP Primer](php)
- [MySQL Primer](mysql)

## XAMPP Start-up
### Prerequisites
1. [XAMPP installed](https://www.apachefriends.org/index.html)

### Start LAMP environment
1. Start XAMPP. The application will boot up and show a different control panel on Mac vs PC.
    - **Mac OS**
        1. Under **General**: Click `Start`, then
        2. Under **Services**: If `ProFTPD`, `Apache` and `MySQL` are not all green, click `Start All`, then
        3. Under **Network**: Click `Enable` (this sets up the ports), then
        4. Under **Volumes**: Click `Mount`.
        5. Under General: Click `Go to Application`. Your browser will then load a web page where you can:
        6. Click `phpMyAdmin` to manage your MySQL database, if needed.
    - **PC** 
        1. Click `Start` for `Apache` and `MySQL`, then
        2. Click `Admin` for `Apache`. Your browser will then load a web page where you can:
        3. Click `phpMyAdmin` to manage your MySQL database, if needed.
            - If you receive a `Access forbidden!` error, try changing the domain to `localhost` or `localhost:8080`, depending on your system setup.
2. In the terminal, navigate to the XAMPP web directory, `htdocs`:
    - PC

        ```
        $ cd /c/xampp/htdocs
        ```

    - Mac OS

        ```
        $ cd ~/.bitnami/stackman/machines/xampp/volumes/root/htdocs
        ```

        If that doesn't work, try this:

        ```shell
        $ cd /opt/lampp/htdocs
        ```

3. Open this directory in VS Code.