<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Adam SutherLand Personal Training</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
               <?php

                $links = [
                    ['text' => 'HOME', 'url' => 'index.php'],
                    ['text' => 'ABOUT', 'url' => 'about.php'],
                    ['text' => 'SERVICES', 'url' => 'services.php'],
                    ['text' => 'SOCIAL MEDIA', 'url' => 'socialmedia.php'],
                    ['text' => 'CONTACT', 'url' => 'contact.php'],
                ];

               foreach($links as $link){
                   $text = "<li";

                   if($link['text'] === $current){
                       $text .=" class=\"active\"";
                   }

                   $text .= '><a href="'. $link['url'].'">'.$link['text'].'</a></li>';

                   echo $text;
               }

               ?>

<!--                <li class="active"><a href="index.php">HOME</a></li>-->
<!--                <li><a href="about.php">ABOUT</a></li>-->
<!--                <li><a href="contact.php">CONTACT</a></li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES <b class="caret"></b></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="blog.php">SOCIAL MEDIA</a></li>-->
<!--                        <li><a href="single-post.php">SINGLE POST</a></li>-->
<!--                        <li><a href="portfolio.php">PORTFOLIO</a></li>-->
<!--                        <li><a href="single-project.php">SINGLE PROJECT</a></li>-->
<!--                    </ul>-->
<!--                </li>-->


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>