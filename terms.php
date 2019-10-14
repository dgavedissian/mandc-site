<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Michael &amp; Co</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <img id="logo" class="center-block" src="images/logo-black.png" width="80%" height="80%">
            </div>
            <div class="row padded-top">
                <h1>Terms and Conditions</h1>
                <h4>Last Updated: 1st January 2016</h4>
                <?php
                    $termsfile = fopen("terms.htm", "r");
                    echo fread($termsfile,filesize("terms.htm"));
                    fclose($termsfile);
                ?>
            </div>
            <div class="row padded-top">
                <div class="col-sm-6 col-sm-offset-3">
                    <form class="form-horizontal" action="submit_terms.php" method="post" data-toggle="validator">
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addr1" class="col-sm-4 control-label">Address Line 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="addr1" name="addr1" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addr2" class="col-sm-4 control-label">Address Line 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="addr2" name="addr2" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-sm-4 control-label">Town/City</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="city" name="city" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="county" class="col-sm-4 control-label">County</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="county" name="county" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postcode" class="col-sm-4 control-label">Postcode</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="postcode" name="postcode" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox col-sm-offset-4 col-sm-8">
                                <label>
                                    <input type="checkbox" required> I accept the terms and conditions specified above
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </body>
</html>