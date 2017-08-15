MailChimp
=========

### Installation
```bash
$ composer require mkucera/mailchimp
```

### Usage
```php
<?php

$guzzle = new GuzzleHttp\Client();
$mailChimp = new Mkucera\MailChimp('https://us14.api.mailchimp.com/3.0/', 'my-api-key', $guzzle);
$mailChimp->subscribe('john.doe@gmail.com', 'my-list-id');
```
