<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <?= $this->tag->stylesheetLink('css/semantic.css') ?>

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/semantic.min.js') ?>
        <!-- Latest compiled and minified JavaScript -->

    </body>
</html>
