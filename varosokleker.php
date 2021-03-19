<?php

if(isset($_POST['leker'])){

$servername = "tanulo11.szf1a.oktatas.szamalk-szalezi.hu";
$username = "c1_tanulo11szf1a";
$password = "_tanulo11szf1a";
$dbname = "ABtanulo11szf1a";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$keresnev = mysqli_real_escape_string($conn,$_POST['keresnev']);


$sql = "SELECT * FROM varos WHERE nev LIKE '%". $keresnev  ."%'";
$result = $conn->query($sql);

$kiir = "<tr>
              <th>ID</th>
              <th>Név</th>
              <th>Megye</th>
               <th>Járás</th>
                <th>Kistérség</th>
                 <th>Népesség</th>
                  <th>Terület</th>
                   <th>Irányítószám</th>
                    <th>Mióta város</th>
                     <th>Típus</th>
            </tr>";

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    
      $kiir .= "
        
            <tr>
              <td>". $row['ID'] ."</td>
              <td>". $row['nev'] ."</td>
              <td>". $row['megye'] ."</td>
              <td>". $row['jaras'] ."</td>
              <td>". $row['kisterseg'] ."</td>
              <td>". $row['nepesseg'] ."</td>
              <td>". $row['terulet'] ."</td>
              <td>". $row['iranyitoszam'] ."</td>
              <td>". $row['miota_varos'] ."</td>
               <td>". $row['tipus'] ."</td>
            </tr>
        ";
  }
} else {
  $kiir = "Nincs találat!";
}
$conn->close();



echo $kiir;





}





?>