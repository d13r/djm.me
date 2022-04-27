<?php
http_response_code(404);

$filename = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

date_default_timezone_set('Europe/London');
?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>page not found</title>

        <style>
            body {
                background: #000;
                color: #0f0;
                font-size: 16px;
                line-height: 1.7;
                margin: 0;
                padding: 14px 10px;
            }

            pre {
                font-family: Fira Code, SFMono-Regular, Consolas, Liberation Mono, Menlo, monospace;
                margin: 0;
            }
        </style>

    </head>
    <body>

        <pre>$ date
<?= htmlspecialchars(date('D d M Y h:i:s A T')) . "\n" ?>
$ whoami
dave
$ cd /home/www/djm.me/
$ cat <?= htmlspecialchars($filename) . "\n" ?>
cat: <?= htmlspecialchars($filename) ?>: No such file or directory
$ exit</pre>

    </body>
</html>
