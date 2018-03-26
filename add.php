<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      
     <form action="adding.php" method="POST" >
        <div class="header container-fluid">
            <div class="row">
            <div class="col-md-9">
                <h2 class="title">Product Add</h2>
            </div>
            <div class="col-md-3">
                <a href="/" class="btn btn-info" role="button">Back</a>
                <button class="btn btn-primary" role="button" type="submit" name="save" > Add </button>
            </div> 
        </div> 
    </div>
        <div class="container">             
            <div class="form-horizontal">
            <div class="form-group row">
                <div class="col-xs-2">
                    <label class="control-label" for="sku">SKU</label>
                    <input class="form-control" id="sku" type="text" name="sku" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" type="text" name="name" required>
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2"> 
                <label for="name">Size</label>
                <input class="form-control" id="sizeFieldInput" type="text" name="size">
                <p>Please provide information about product size in MB.</p>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-2">                        
                    <label for="price">Price</label>
                    <input class="form-control" id="price" type="text" name="price" required>
                    </div>
            </div> 
            <div class="form-group row">
                <div class="col-xs-2">
                    <label for="type">Type Switcher</label>                             
                    <select class="form-control" name="type" id="typeSwitcher" onchange="fieldInput(this);">
                        <option disabled selected value> -- select an option -- </option>
                        <option id="size" value="Size">Size</option>
                        <option id="dimensions" value="Dimensions">Dimensions</option>
                        <option id="weight" value="Weight">Weight</option>                               
                    </select> 
                    </div>
            </div>
            <!-- hidden part -->
            <div class="form-group row" id="sizeField">
                <div class="col-xs-2"> 
                <label for="name">Size</label>
                <input class="form-control" id="sizeFieldInput" type="text" name="size">
                <p>Please provide information about product size in MB.</p>
                </div>
            </div>
            <div class="form-group row" id="dimensionField">
                <div class="col-xs-2"> 
                <label for="name">Height</label>
                <input class="form-control" id="dimensionsHeight" type="text" name="height">
                <label for="name">Width</label>
                <input class="form-control" id="dimensionsWidth" type="text" name="width">
                <label for="name">Length</label>
                <input class="form-control" id="dimensionsLength" type="text" name="length">
                <p>Please provide information about dimensions in cm </p>
                </div>
            </div>
            <div class="form-group row" id="weightField">
                <div class="col-xs-2"> 
                <label for="name">Weight</label>
                <input class="form-control" id="weightFieldInput" type="text" name="weight">
                <p>Please provide information about product weight in Kg.</p>
                </div>
            </div>
                 </div>
                </div>               
            </div>
        </div>
     </div>
    </form>
         
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
    </div></body>
    </html>