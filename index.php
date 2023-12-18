<!DOCTYPE html>

<?php

require_once "BOOKDAO.php";

$bookdao = new BookDao();
$books = $bookdao->getAllBooks();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
      <tr>
        <th>ISBN</th>
        <th>title</th>
        <th>genra</th>
        <th>price</th>
        <th>nbrofpages</th>
        <th>Auhor</th>
      </tr>

      <?php 
        foreach($books as $book)
        {
            echo "<tr> 
            <td>".$book->getISBN()."</td>
            <td>".$book->getTitle()."</td>
            <td>".$book->getGenra()."</td>
            <td>".$book->getPrice()."</td>
            <td>".$book->getNbrofpages()."</td> 
            <td>".$book->getAuhor()."</td> </tr>";
            
        }
      ?>
    </table>
</body>
</html>