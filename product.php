<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
    <form action="delete.php" method="POST">
        <div class="header container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <h2>Product List</h2>
                </div>           
                <div class="col-md-2-right">
                    <div class="form-check">                        
                            <input class="form-check-input" id="checkAll" type="checkbox">
                            <label class="form-check-label" for="checkAll">Check all
                            </label>
                    
                            <button class="btn btn-primary" type="submit" name="delete">Delete</button>
                            <a href="add.php" class="btn btn-primary" role="button">Add products</a>               
                    </div>
                </div>            
            </div>
        </div>
    <div class="container">
        <div class="row align-items-stretch">
            
              <div class="col-md-2 form-group" >
                    <input class="form-check-input checkbox" type="checkbox">
                    <h4>JVC200123</h4>
                    <h4>Acme DISC</h4>
                    <h4>1,00$</h4>
                    <h4>Size: 700 MB</h4>                    
              </div>
              <div class="col-md-2 form-group" >
                    <input class="form-check-input checkbox" type="checkbox">
                    <h4>JVC200123</h4>
                    <h4>Acme DISC</h4>
                    <h4>1,00$</h4>
                    <h4>Size: 700 MB</h4>                    
              </div>
              <div class="col-md-2 form-group" >
                    <input class="form-check-input checkbox" type="checkbox">
                    <h4>JVC200123</h4>
                    <h4>Acme DISC</h4>
                    <h4>1,00$</h4>
                    <h4>Size: 700 MB</h4>                    
              </div>
              <div class="col-md-2 form-group" >
                    <input class="form-check-input checkbox" type="checkbox">
                    <h4>JVC200123</h4>
                    <h4>Acme DISC</h4>
                    <h4>1,00$</h4>
                    <h4>Size: 700 MB</h4>                    
              </div>
              <div class="col-md-2 form-group" >
                    <input class="form-check-input checkbox" type="checkbox">
                    <h4>JVC200123</h4>
                    <h4>Acme DISC</h4>
                    <h4>1,00$</h4>
                    <h4>Size: 700 MB</h4>                    
              </div>
              <?php foreach ($lists as $list) : ?>
              <div class="col-md-2 form-group">
                    <input class="form-check-input checkbox" type="checkbox"
                     name="id[]" value="<?=$list->ID; ?>">
                    <h4><?=$list->sku; ?></h4>
                    <h4><?=$list->name; ?></h4>
                    <h4><?=$list->price; ?> $</h4> 
                    <h4><?=$list->type; ?>: 
                    <?php if ($list->type == "Size") :?> <?=$list->size; ?> MB
                    <?php elseif ($list->type == "Dimensions") :?> <?=$list->height; ?>x<?=$list->width; ?>x<?=$list->length; ?> cm
                    <?php else :?> <?=$list->weight; ?> Kg </h4> 
                    <?php endif; ?>
              </div>    
            <?php endforeach; ?> 
            </form>        
        </div>       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="main.js" type="text/javascript"></script> 
    </div>
    </body>
    </html>