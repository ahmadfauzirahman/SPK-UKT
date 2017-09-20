<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistem Informasi Tugas Akhir</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        {{stylesheet_link("css/semantic.css") }}
        {{stylesheet_link("css/dist/components/icon.css") }}
        {#<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">#}

    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
    {{javascript_include("js/jquery.min.js")}}
    {{javascript_include("js/semantic.min.js")}}
    </body>
</html>
