<?php
 require "header.php";
 $url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 $url_component = parse_url($url );
parse_str($url_component["query"],$params);

 $bookIndex=  (int)$params['bookIndex'];
 $chapterIndex=  (int)$params['chapterIndex'];
 

 

    $json = file_get_contents('./assets/notes.json');
    $data = json_decode($json, true);

     $book = $data[$bookIndex];
     $chapters = $book['chapters'];
     $chapter =$book['chapters'][$chapterIndex];
     $chaptername =$chapter['name'];
     $content= $chapter['content'];
     $coverImg =$chapter['coverImage'];
 

?>
    <main class="container-fluid">
   
    <div class="row">
    <div class="col-md-9">
    <div class="tag">
        <div class="list-header">
            <div class="g-block"></div>
                <span class="header-title"><?php echo($chaptername) ?></span>
        </div>
    </div>
    <div class="questionlist">
        <ul >
            <?php 
            $length = count($content);
            for($i=0; $i< $length; $i++){
                $rawquestion = $content[$i]['question'];
                $rawanswer = $content[$i]['answer'];
                $question = str_replace("\n", "<br>" , $rawquestion) ;
                $answer = str_replace("\n", "<br>" , $rawanswer) ;
              
                if($i==0){
                    ?>
                    <li>

                        <img class="img-thumbnail" src="<?php echo("./".$coverImg) ?>" alt="">
                    <h4><?php echo($question) ?></h4>
                    <p><?php echo($answer) ?></p>
                </li>
                    <?php
                }else{
                ?>

                <li>
                    <h4><?php echo($question) ?></h4>
                    <p><?php echo($answer) ?></p>
                </li>
                <?php
                }

            }
            
            
            ?>
        </ul>
    </div>
    </div>
    <div class="col-md-3 ">
        <div class="allchapters">
        <div class="tag p-0 mb-4">
        <div class="list-header  pl-0">
            <div class="g-block"></div>
                <span class="header-title">ALL CHAPTERS</span>
        </div>
    </div>
         <?php 
         $Chapterlenght = count($chapters);
         for($i = 0; $i < $Chapterlenght; $i++){
             $chaptersName = $chapters[$i]['name'];
             ?>
               <a href="chapterBlog.php?bookIndex=<?php echo($bookIndex) ?>  &chapterIndex= <?php echo($i) ?> ">
               <div class="c-card">
               <p> <span><?php echo( $i+1); ?> </span> <?php echo( $chaptersName); ?> </p>
               </div>
               </a>
             <?php 
         }
         ?>
        </div>
    </div>
    </div>
    </main>


    <?php
        require "footer.php";
        ?>