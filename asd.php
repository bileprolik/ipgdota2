<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Makes "field" required and ending with ".xls" or ".csv".</title>
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

</head>
<body>
<form id="myform">
    <label for="field">Required, only .xls and .csv files allowed: </label>
    <input type="file" class="left" id="field" name="field">
    <br/>
    <input type="submit" value="Validate!">
</form>
<script src="jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../validacija/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
<script src="../validacija/jquery-validation-1.17.0/dist/additional-methods.min.js"></script>

<script>
    // just for the demos, avoids form submit

    $( "#myform" ).validate({
        rules: {
            field: {
                required: true,
                extension: "xls|csv"
            }
        }
    });
</script>
</body>
</html>