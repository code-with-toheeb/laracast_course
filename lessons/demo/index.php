<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
</head>
 <body>
    <?php
          
      $N_Books = [

        [
          "author" => "Chimanda Ngozi Adichie",
          "title" => "Purple Hibiscus",
          "url" => "https://en.wikipedia.org/wiki/Purple_Hibiscus",
          "releaseYear" => "2003"
        ],

        [
          "author" => "Femi Osofisan",
          "title" => "Women Of Owu",
          "url" => "https://en.wikipedia.org/wiki/Women_of_Owu",
          "releaseYear" => "2006"
        ],

        [
          "author" => "Buchi Emecheta",
          "title" => "The Joy of Motherhood",
          "url" => "https://en.wikipedia.org/wiki/The_Joys_of_Motherhood",
          "releaseYear" => "1979"
        ],

        [
          "author" => "Chimanda Ngozi Adichie",
          "title" => "Half Of a Yellow Sun",
          "url" => "https://en.wikipedia.org/wiki/Half_of_a_Yellow_Sun",
          "releaseYear" => "2006"
        ],

        [
          "author" => "Buchi Emecheta",
          "title" => "Second Class Citizen",
          "url" => "https://en.wikipedia.org/wiki/Second_Class_Citizen_(novel)",
          "releaseYear" => "1974"
        ]
        ];

      function libraryChecker($items, $fn)
      {

        $filteredBooks = [];
        
        foreach($items as $item)
        {

          if ($fn($item))
          {
            
            $filteredBooks[] = $item;
          }
        }

        return $filteredBooks;
      }

      $filteredItems = libraryChecker($N_Books, function($book){

        return $book["releaseYear"] < 2000 ;
      });
    ?>

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