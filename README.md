# How To Send Mail From Localhost XAMPP Using PHP

To send mail from localhost using Apachee Server, configure XAMPP after installing it. Follow the following steps for configuration.

## Steps to Send Mail From Localhost XAMPP Using Gmail:

### Open XAMPP Installation Directory.

#### 1. Go to C:\xampp\php\php.ini file and update the following data accordingly. <sub> Also Uncomment all these lines. </sub>	


- > SMTP=smtp.gmail.com
- > smtp_port=587
- > sendmail_from = YourGmailAddress
- > sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


#### 2. Go to C:\xampp\sendmail\sendmail.ini file and update the following data. <sub> Also Uncomment all these lines. </sub>	

- > smtp_server=smtp.gmail.com
- > smtp_port=587
- > error_logfile=error.log
- > debug_logfile=debug.log
- > auth_username=YourGmailAddress
- > auth_password=YourGmailPassword
- > force_sender=YourGmailAddress

## Then Run mail.php file, to send mail.