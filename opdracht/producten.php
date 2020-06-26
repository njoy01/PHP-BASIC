<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'includes/functions.php';?>
    <title>Producten</title>
  </head>
    <?php include "includes/menu.php"  ?>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
    <table> 
      <tr>
          <th>Product</th>
          <th>Prijzen</th>
      </tr>
      <?php foreach ($product as $row): ?>
      <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
      </tr>
      <?php endforeach; ?>  
    </table>
    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php totaalBedrag()?></p>
    <p>je bent <?php getAge(); ?> je korting is: <?php korting() ?></p>

    </form><!-- dit laten staan! -->
    <?php include "includes/footer.php" ?>
  </body>
</html>