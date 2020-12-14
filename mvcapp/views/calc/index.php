<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h1>Calculator</h1>
<form action="#" method="post" class="calculate-form">
    <div class="form-group row">
        <div class="col-3">
            <input class="form-control" name="number1" id ="number1" type="number" step="any" placeholder="First number" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-2">
            <select class="form-control" id="oper" name="operation">
                <option value="plus">+ </option>
                <option value="minus">- </option>
                <option value="multiply">* </option>
                <option value="divide">/ </option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-3">
            <input class="form-control" id="number2" type="number" name="number2" class="numbers" step="any" placeholder="Second number">
        </div>
    </div>
    <input  class="submit_form" type="submit" name="submit" value="Result">
    <?php if(isset($result) and !empty($result)) : ?>
    <?php echo " <br><br> The result is ". $result ?>
    <?php endif ?>
