<div id="produkty">
  <?php 
    include('connect.php');

  echo'<table cellpadding=\"2\" border=1>';
  $wynik = $conn->query('SELECT * FROM produkty'); 
  echo "<tr>"; 
    echo "<th>ID</th> <th>Nazwa</th> <th>Typ</th> <th>Rozmiar</th> <th>Cena</th> <th>Kolor</th> <th>Materiał</th>";
  echo "</tr>";
    while($r = $wynik->fetch(PDO::FETCH_ASSOC)) { 
      echo "<tr>";
          echo "<td>".$r['id_produkt']."</td>";
          echo "<td>".$r['nazwa']."</td>"; 
          echo "<td>".$r['typ']."</td>";
          echo "<td>".$r['rozmiar']."</td>";
          echo "<td>".$r['cena']."</td>";
          echo "<td>".$r['kolor']."</td>";
          echo "<td>".$r['materiał']."</td>";
          
      echo "</tr>";
    }
  echo'</table>';?>

</div>

<footer>
  <div id="copyright">
    <p>Copyright © 2016 - Aleksandra Pomarańska</p>
  </div>
</footer>

