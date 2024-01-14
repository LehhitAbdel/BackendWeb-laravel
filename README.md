# Laravel Project
All users profile are publicly available. click on "posted by ..." in newspost to see a profile


### Email Configuration with Mailtrap

For handling emails, use [Mailtrap](https://mailtrap.io/). 

1. **Create a Mailtrap account**:
2. **Find your Mailtrap credentials**: Once logged in, go to your inbox to find your unique credentials.

### Environment Variables

set up the following environment variables in your `.env` file:

```plaintext
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
```
