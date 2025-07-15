<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
</head>
 <body>
    

     <ul>
       <?php foreach($filteredItems as $book) : ?>


          <li>
            <a href= "<?= $book["url"]; ?>">
              <?= $book["title"] ?> (<?= $book["releaseYear"] ?>) -By <?=$book["author"]; ?>
            </a>    
          </li>
        


       <?php endforeach ; ?>
     </ul>
    
    
</body>
</html>