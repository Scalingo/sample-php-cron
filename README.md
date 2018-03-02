# Sample application using PHP and a task scheduler

This application is a simple PHP application using the package `cron/cron` installed from Composer

Application → https://sample-php-cron.scalingo.io/

## Processes

One additional type of process will be created from the `Procfile` which defines how to start
the task scheduler:

```
clock: php cron.php
```

### References

* Composer: http://getcomposer.org/
* Cron package: https://github.com/Cron/Cron/
