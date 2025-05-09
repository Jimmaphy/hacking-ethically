# Brute Force Attack

Just like during the second exercize for SQL Injection,
you are going to try and get access to an account.
This time, you are going to perform a **brute force attack**.
Unlike the previous exercizes, you will actually write code here.
So open the `project` folder in your favorite editor.
You can open `index.html` without the need of a local server.
If everything is setup correctly, a message "Good morning" should be displayed.

### Exercize

Show off your JavaScript skills by performing the tasks listed below.
You may use the JavaScript file included in `XSS2/web' as an example. Now get to work.

1. Use `fetch()` to connect to `http://localhost/portal.php`. Print the resulting HTML in the `output`.
2. Now do the same, but add the retrieved HTML structure to the DOM by adding it to `website`. Confirm this through the developer tools.
3. Confirm that login failed by retrieving the right information from the DOM, print a message to `output`.
4. Read the contents of the `passwords.txt` file into JavaScript and display a random one in output.
5. Loop through every single password in the provided file, and try to login to Jimmaphy. Display which password results in entry.
