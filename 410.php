<?php
http_response_code(410);

date_default_timezone_set('Europe/London');
?>
<!DOCTYPE html>
<html lang="en-GB">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>website not found</title>

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
$ sudo rm -rf /*
$ ls -l
bash: ls: command not found
$ exit</pre>

    </body>
</html>
