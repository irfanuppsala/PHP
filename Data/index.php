<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Koppla till databas</title>
      <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link href=" jquery-ui/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>

       <body>  

            <div class="container">
            <table class="table table-hover table-bordered">
              <thead>
                <tr class="info">
                  <th>ID</th>
                  <th>Spel</th>
                  <th>Betyg</th>
                </tr>
              </thead>

    	   <?php 
          date_default_timezone_set("Europe/Stockholm");  //Sätter tidzon till vår tid.
          echo $timme = date("Y-m-d - H:i:s");
          $servername = "localhost";
          $username = "root";
          $password = "System21";
          $dbname = "mydatabase";

          try {
                $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
              } catch (PDOExeption $exeption) {
                    echo "Connection error: " . $exeption->getMessage();
              }

              //$sql = "SELECT player.id, player.namn, player.age, games.spel, games.betyg FROM player INNER JOIN games ON player.id = games.id";
              $sql = "SELECT * FROM games order by id asc";

              $smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

              $smtp -> execute(); //Kör SQL


              foreach($smtp as $heroData){
                      echo '<tbody>';
                      echo '<tr class="active" >';
                      echo '<td>',$heroData['id'],'</td>'; 
                      echo '<td><a href="#" class="title">',$heroData['spel'],'</a></td>';
                      echo '<td>',$heroData['betyg'],'</td>';
                      echo '</tr>';   
                      echo '</tbody>';
              }

      ?>

      </table>


      </div>
      <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="jquery-ui/jquery-ui.js"></script>
    <script src="js/app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
    
</html>
