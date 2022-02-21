# This is the Routing project

This project contains core directory that contains:
- Request.php => has method Request::uri() that return the current uri.
- Router.php => has class Router that has methods load (for loading routes file), define (set routes), direct (that takes uri and load determined controller file).
- render.php => this file was created by my thoughts & it renders specific view file into header and footer templates automatically.
- database => this directory contains files that manage db connection.
- bootstrap.php => the file that loads all important files to initial index.php file in the main directory (Request.php, Router.php, the two db files).
