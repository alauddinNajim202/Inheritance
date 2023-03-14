<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
    <body>

        <table>
            <tr>
                <td>Title </td>
                <td>Author </td>
                <td>Descripstion </td>
                <td>Price </td>
            </tr>

            <?php

                echo '<td>';
                echo  '<td><a href="index.php?book =
                      '. $book->gettitle(). '">'
                       .$book->getTitle().  '</a></td>'; 

                echo '<td>'. $book->getAuthor().       '</td>' ;  
                echo '<td>'. $book->getDescription().       '</td>' ;  
                echo '<td>'. $book->getPrice().       '</td>' ;  
                echo '</td>';



            ?>
        </table>
            
    </body>
</html>



