# FlaskAndPHP
This is a simple example demonstrating communication between PHP and a Python
backend.  The communication is accomplished by making HTTP requests from PHP to
a Flask server.

## Requirements
  * Python 3 and pip3
  * PHP
  * make

## Setup
  * Install Python dependencies by running `make init` from the root of this
    repository.  These dependencies are located in `requirements.txt` and can be
    installed manually if desired.
  * Open a terminal to the root of this repository.  Run `php -S localhost:XXXX`
    where `XXXX` is an open port.  This will start a PHP server.
  * Open a terminal to `src/python`.  Run `./pythonIntf.py` to start the Flask
    server on `http://localhost:5000`.
  * Go to `http://localhost:XXXX` in a browser to view the output.
