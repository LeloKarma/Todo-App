
# Todo App

A simple Todo app built with Bootstrap and PDO (PHP Data Objects).

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The Todo App is a web application that allows users to manage their tasks efficiently. It provides a user-friendly interface to add, update, and delete tasks. The app is built using Bootstrap for styling and PDO for database access.

## Installation

1. Clone the repository:

   ```shell
   git clone https://github.com/lelokarma/todo-app.git
   ```

2. Import the SQL file:

   - Create a database for the Todo app.
   - Import the `todos.sql` file located in the project's root directory into your database.

3. Configure the database connection:

   - Open the `config.php` file located in the project's root directory.
   - Update the database connection details with your own credentials.

4. Start a local server:

   - If you're using PHP's built-in web server, run the following command from the project's root directory:

     ```shell
     php -S localhost:8000
     ```

   - If you're using XAMPP or WAMP, copy the project files to the appropriate web server directory (`htdocs` for XAMPP or `www` for WAMP).

5. Open your web browser and visit `http://localhost:8000` (or your server's respective URL) to access the Todo app.

## Usage

- Create a new task by entering the task description in the input field and clicking the "Save" button.
- Mark a task as completed by checking the checkbox next to the task.
- Update a task by clicking the "Update" button and modifying the task description.
- Delete a task by clicking the "Delete" button.

## Technologies Used

- HTML
- CSS (Bootstrap)
- JavaScript
- PHP (PDO)
- MySQL 

## Contributing

Contributions are welcome! If you find any bugs or have suggestions for new features, please open an issue or submit a pull request.
Follow these steps to contribute:

1. Fork the repository.
2. Create your branch: `git checkout -b feature/new-feature`.
3. Commit your changes: `git commit -am 'Add a new feature'`.
4. Push to the branch: `git push origin feature/new-feature`.
5. Submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).


