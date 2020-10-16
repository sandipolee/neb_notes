<?php
 require "header.php";
 $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 $url_component = parse_url($url );
parse_str($url_component["query"],$params);

 $bookIndex=  (int)$params['i'];
 

 

    $json = file_get_contents('./assets/notes.json');
    $data = json_decode($json, true);

     $book = $data[$bookIndex];
     $bookname =$book['name'];

     function chapterList($book,$bookIndex){
      
         $chapters = $book['chapters'];
         $index = count($chapters);
         for( $i=0 ; $i < $index ; $i++){
             $chapterName = $chapters[$i]['name'];
             $author = $chapters[$i]['author'];
             $coverImg = "./".$chapters[$i]['coverImage'];

            ?>

            <li>
            <div class="chapter-item" >
                <img class="img-400"  src="<?php echo($coverImg) ?>" alt="">
                <div class="column p-l pt-3">
                <h4><?php echo($chapterName) ?></h4>
                <p><?php echo($author) ?></p>
                <a href="chapterBlog.php?bookIndex=<?php echo($bookIndex) ?>  &chapterIndex= <?php echo($i) ?> "><button class="see-more">Read</button></a>
                </div>
               
            </div>
        </li>
        <?php 
         }
     }
 

?>
    <div class="container">
    <div class="tag">
        <div class="list-header">
            <div class="g-block"></div>
                <span class="header-title"><?php echo($bookname) ?></span>
        </div>
    </div>
    <div class="chapter-list">
        <ul class="chapterList">
            <?php chapterList($book, $bookIndex); ?>
        </ul>
    </div>
    </div>

    <?php
        require "footer.php";
        ?>