<?php require "header.php";
?>
        <div class="container ">
            <div class="list-view">
                <?php
                if(isset($_SESSION['names'])){
                    $name = $_SESSION['names'];
                    echo "<h4 class='header-title'>Welcome $name </h4>"; 
                }
               
                ?>
           
                <div class="tag">
                    <div class="list-header">
                        <div class="g-block"></div>
                        <span class="header-title">MANAGEMENT</span>
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