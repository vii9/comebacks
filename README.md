<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Docs Laravel

```
#refresh database
$ >   php artisan migrate:fresh [--seed]

# setup sent gmail
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=yourEmail@gmail.com
MAIL_PASSWORD=yourPasswordEmail
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=yourEmail@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
PHP_FPM_INSTALL_EXIF=true
#End Mail Config

# // Queue
    $   php artisan queue:work --stop-when-empty
# // Task Schedule
    $   php artisan schedule:work
```

