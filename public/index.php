<?php

require '../application/config.php';
require APP_DIR . 'functions.php';

if ($_FILES) $result = upload_image($_FILES);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Image Host</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>

<div class="container">

    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <div class="navbar-header">

                <span class="navbar-brand">Image Host <sup>alpha</sup></span>

            </div>

            <button class="btn btn-primary navbar-btn pull-right" data-toggle="modal" data-target="#modal">Upload</button>

        </div>

    </nav>

    <?php

    if (isset($result) && $result === true) { ?>

    <div class="alert alert-success alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" >&times;</button>

        File has been uploaded successfully!

    </div>

    <?php } elseif (isset($result) && $result === false) { ?>

    <div class="alert alert-danger alert-dismissible">

        <button type="button" class="close" data-dismiss="alert" >&times;</button>

        Something went wrong. Please check file extension and it's size then try again.

    </div>

    <?php } ?>

    <div class="content">

        <?php echo list_uploads(); ?>

    </div>

    <div class="modal fade" id="modal">

        <div class="modal-dialog">

            <div class="modal-content">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">

                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                        <strong class="modal-title">Choose an image to upload</strong>

                    </div>

                    <div class="modal-body">

                        <div class="form-group">

                            <input type="file" name="image" id="image" class="hidden" />

                            <div class="input-group">

                                <input type="text" id="filename" class="form-control" />

                                <div class="input-group-btn">

                                    <button type="button" id="select" class="btn btn-default">Select file...</button>

                                </div>

                            </div>

                            <p class="help-block">Allowed file type: jpg, png. Max size: 1mb</p>

                        </div>

                    </div>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                        <button type="submit" class="btn btn-primary">Upload</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>