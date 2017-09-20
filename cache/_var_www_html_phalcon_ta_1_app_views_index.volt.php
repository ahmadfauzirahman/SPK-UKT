<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sistem Informasi Tugas Akhir</title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <?= $this->tag->stylesheetLink('css/semantic.css') ?>
        <?= $this->tag->stylesheetLink('css/dist/components/icon.css') ?>
        
       
    </head>
    <body>
        <div class="container">
            <?php echo $this->getContent(); ?>
        </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/semantic.min.js') ?>
    </body>
</html>
