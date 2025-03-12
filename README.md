# Telegram Login PHP Authentication

This repository provides a simple PHP authentication system using the [Telegram Login Widget](https://core.telegram.org/widgets/login). It enables secure login using a Telegram account without the need to manage users manually.

## Features

- Easy integration of Telegram Login Widget into your website.
- Simple and secure user authentication with Telegram.
- No manual management of users required — all users can access the system.
- Implements hash-based security to verify the login process.

## Requirements

- PHP 7.4 or later
- A web server (e.g., Apache, Nginx)
- A Telegram bot token (you can create a bot via [BotFather](https://core.telegram.org/bots#botfather))

## Installation

1. Clone this repository or download the files to your server.
2. Set up your Telegram bot and get the bot token from [BotFather](https://core.telegram.org/bots#botfather).
3. Modify the `config.php` file to insert your bot token and other required values.
4. Upload the files to your server.

## Files

- `config.php`: Configuration file to set your bot token and other settings.
- `login.php`: Contains the Telegram login verification logic.
- `welcome.php`: Page that users will be redirected to after a successful login.
- `error.php`: Error page for login or authentication failures.

## How to Use

1. Embed the Telegram Login widget in your website using the code provided in `login.php`.
2. When a user clicks the widget and successfully authenticates via Telegram, they will be redirected to the `welcome.php` page.
3. Users who are not authorized will be shown an error page (`error.php`).

## Security

This system verifies the authenticity of the login request by checking the hash provided by Telegram. Only valid users will be authenticated and redirected.

## License

This project is open source and available under the [MIT License](LICENSE).
