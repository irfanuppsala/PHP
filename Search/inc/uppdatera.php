<?php 

$servername = "localhost";
$username = "root";
$password = "System21";
$dbname = "mydatabase";


try {
		$dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); //Försöker ansluta
} catch (PDOExeption $exeption) {
		echo "Connection error: " . $exeption->getMessage();
}



if (!empty($_POST['search'])) { //Om sökrutan inte är tom
    $name = $_POST["search"];
    if ($name != '*')
        $sql = "SELECT books.title,books.genre,books.price,books.publishDate,books.description,books.image,authors.author FROM books INNER JOIN authors ON books.authorId = authors.id WHERE books.authorId=authors.id AND (authors.author LIKE '%$name%' OR books.title LIKE '%$name%' OR books.genre LIKE '%$name%')";
    else
        $sql = "SELECT books.title,books.genre,books.price,books.publishDate,books.description,books.image,authors.author FROM books INNER JOIN authors ON books.authorId = authors.id";
}
else{                       //Om sökrutan är tom
    $sql = "";
}


$smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

$smtp -> execute(); //Kör SQL

	  

foreach($smtp as $heroData){
     echo '<tbody>';
     echo '<tr style="border-bottom: 1px solid red;">';
     echo '<th scope="row" class="text-center"><img class="img img-thumbnail text-center" src="img/', $heroData['image'], '" alt="Sports"></th>';         
     echo '<td>',$heroData['author'],'</td>';    
     echo '<td>',$heroData['title'],'</td>';          
     echo '<td>',$heroData['genre'],'</td>';
     echo '<td class="text-right">', $heroData['price'],' kr</td>';
     echo '<td class="text-center">', $heroData['publishDate'],'</td>';                  
     echo '<td>',$heroData['description'],'</td>';
     echo '</tr>';   
     echo '</tbody>';                       
}        