# Helping Hands Health Group - Pure PHP Website

This is a pure PHP version of the uploaded HTML website. The contact form posts to `send-mail.php`.

## Local test without SMTP

By default, `config.php` has:

```php
'mail_test_mode' => true,
```

This means the form works locally without email credentials. Submissions are saved to:

```text
storage/mail-test.log
```

The test receiver is already set to:

```text
asekhamejoel@gmail.com
```

## Run locally

From the project folder, run:

```bash
php -S localhost:8000
```

Then open:

```text
http://localhost:8000
```

Submit the contact form, then check `storage/mail-test.log`.

## Send real email with PHPMailer SMTP

Install PHPMailer:

```bash
composer install
```

Then edit `config.php`:

```php
'mail_test_mode' => false,
'smtp_username' => 'yourgmail@gmail.com',
'smtp_password' => 'your-google-app-password',
```

For Gmail, use an App Password, not your normal Gmail password.

## Live domain email example

When live, change `from_email` to your domain email, for example:

```php
'from_email' => 'enquiries@helpinghandshealthgroup.co.uk',
```

If using Hostinger email, change SMTP settings to the values from Hostinger.
