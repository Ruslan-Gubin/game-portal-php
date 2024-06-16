<div class="container trending">
        <?php 
        $url = $_SERVER['REQUEST_URI'];
        if ($url !== '/trending.php') {
            echo '<a href="/trending.php" class="see-all">SEE ALL</a>';
        }
        ?>
            <h3>Currently Trending Games</h3>
            

            <div class="games">
                <?php 
                require_once "lib/get-home-games-list.php";
                
                foreach($games as $el)
                    echo '
                <div class="block">
                    <img src="/img/'.$el->image.'" alt="">
                    <span><img src="/img/fire.svg" alt=""> '.$el->followers.' Followers</span>
                </div>';
                ?>
               
            </div>


</div>