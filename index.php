<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
      <div class="container">
          <h1>Hello, world!</h1>
          <div class="row">
              <div class="col-sm-8">
                  <a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> New Record</a>
                  <a href="#" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete All</a>
                  
                  
                    <table class="table table-condensed table-striped table-bordered table-hover">
                      <caption>Optional table caption.</caption>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
              <div class="col-sm-4">
                  <span class="label label-success">Success</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-warning">Warning</span>
                    
                    <div class="alert alert-success" role="alert">
                        You did well
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Oh no you messed up!
                    </div>
                    
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuein="0" aria-valuemax="100" style="width: 15%">
                            <span><span id="baramount">45</span>% complete</span>
                        </div>
                    </div>
                </div>
          </div>
          
            
            
  
      </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    
    (function(){
        $(".progress-bar").animate({width: $(".progress").width() * .75});
        //alert($("#baramount").toString().innerHTML);
        
        someName = function() {
          var intendedWith = $(".progress-bar").width() * .75;
          $(".progress-bar").animate({width: myObject.intendedWith}, 2000);
        }
        
        var myObject = {
          hello: "World",
          intendedWith: $(".progress-bar").width() * .75
        };
        
        someName();
        
    })()
        
        //setTimeout(someName, 1000);
    </script>
  </body>
</html>