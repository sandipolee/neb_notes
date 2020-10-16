
<?php
 include "header.php";

?>
<?php 

 function listviewbuilder(){
    $json = file_get_contents('./assets/notes.json');
    $data = json_decode($json, true);

    $count = count($data);
    for ( $i=0; $i < $count ; $i++ ){


        
        $bookname = $data[$i]['name'];
        $featureImage = "./".$data[$i]['FeatureImage'];
        $grade = $data[$i]['classes'];

        if( $grade == '12'){
        ?>
        
        <li>
        <div class="list-tile">
        <img class="img-fluid" src="<?php echo($featureImage) ?>" alt="" />
        
        <div class="row-between" >
        <div class="detail">
            <p class="grade">XII</p>
            <p class="brk">/</p>
            <p class="sub">REGURAL</p>
            <p class="title"> <?php echo($bookname) ?></p>
        </div>
        <a href="chapters.php?i= <?php echo($i) ?> "><button class="see-more">Read</button></a>
        </div>
    </div>
        </li>

    <?php
        }
    }
}

?>
<div class="layout">
        <div class="container ">
            <div class="list-view">
        
           
                <div class="tag">
                    <div class="list-header">
                        <div class="g-block"></div>
                        <span class="header-title">MANAGEMENT XI</span>
                    </div>

                    <button class="see-more ">SEE MORE</button>
                </div>
                <hr />
                <ul>
                   
                <?php 
                
                listviewbuilder();
                ?>
                    
                </ul>
            </div>

            <div class="list-view">
                <div class="tag">
                    <div class="list-header">
                        <div class="g-block"></div>
                        <span class="header-title">SCIENCE</span>
                    </div>

                    <button class="see-more">SEE MORE</button>
                </div>
                <hr />
                <ul>
                    <li>
                        <div class="list-tile">
                            <img src="./img/h1_hero.jpg" alt="" />
                            <div class="detail">
                                <p class="grade">XII</p>
                                <p class="brk">/</p>
                                <p class="sub">English</p>
                                <p class="title">Heritage Of Word</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-tile">
                            <img src="./img/h1_hero.jpg" alt="" />
                            <div class="detail">
                                <p class="grade">XII</p>
                                <p class="brk">/</p>
                                <p class="sub">English</p>
                                <p class="title">Heritage Of Word</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-tile">
                            <img src="./img/h1_hero.jpg" alt="" />
                            <div class="detail">
                                <p class="grade">XII</p>
                                <p class="brk">/</p>
                                <p class="sub">English</p>
                                <p class="title">Heritage Of Word</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?php
        require "footer.php";
        ?>