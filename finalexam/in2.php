<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Select2 -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link href="sbox.css" type="text/css" rel="stylesheet"/>
     <link href="index.css" type="text/css" rel="stylesheet"/>
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="https://simpletutorials.com/uploads/1860/v2/stcombobox.min.js"></script>
      <script type="text/javascript">
        
        $(document).ready(function() {
            var g = require("../inc/global");
            var conn = g.getConnection();

            var combo = new STComboBox();
            combo.Init('sTerm');         
            var data = [];
            
            
            
            // should be replaced with sql statement (SELECT * FROM Meals)
            var foods = [
                "Roast Beef",
                "Frosted Mini Wheats",
                "Greek Yogurt"    
            ];
        
        
            // should add the query into the database before this line, applying only the entries with matches 
            // sql would be something like: "SELECT id, Name FROM Meals WHERE Name Like '%" + searchParam + "%'" where instead of using searchParam, use $('#sTerm-ddi').val();
            for(var i=0; i < foods.length; i++) {
                data.push({id: i, text: foods[i]});
            }
            combo.populateList(data);
            
            
            
        });
          
      </script>
      
  </head>
    
  <body>
      
      
      <label for="sTerm-ddi">Type in a food: </label>
      <span id="sTerm"> <input id="sTerm-ddi"> </span>
      
      
  </body>
  
  
</html>
