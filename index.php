<?php 
$nav = (isset($_GET['nav']) && $_GET['nav'] != '') ? $_GET['nav']: '';
?>
<html>

<head> <title> Rey's Portfolio</title> 
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@900&display=swap" rel="stylesheet">
</head>

    <body> 
  <div class="background"><object type="image/svg+xml" data="UsedSVG/background.svg"></object> </div>
  <div class="wrapper"> 
        <div class="header"> 
            <a class="links" href="index.php?nav=home"> HOME </a>
            <a class="links" href="index.php?nav=about"> ABOUT </a>

            <div class="dropdown">CSS
            <div class="dropdown-content">
            <a href="index.php?nav=Mod2">Module 2</a>
            <a href="CSS\MtOlympus" target="blank"> Mt. Olympus </a> 
            <a href="index.php?nav=Mod3">Module 3</a>
            <a href="index.php?nav=Mod4">Module 4</a>
            <a href="CSS\MtOlympusFinal" target="blank"> Mt. Olympus | LE </a> 
            </div>
            </div>

            <div class="dropdown">SVG<div class="dropdown-content">
            <a href="index.php?nav=LT5.1">Learning Task 5.1</a>
            <a href="index.php?nav=LT6.1">Learning Task 6.1</a>
            <a href="index.php?nav=LT6.2">Learning Task 6.2</a>
            <a href="SVG/FLOOM/index.php" target="blank">Floom | LE</a>
            </div>
            </div>

           
            <a class="links" href="CANVAS/canvas.php" target="blank">CANVAS</a>

            </div>
            </div>
 
  


</div>

        <br>
        <div class="content">


                        <?php 
                        switch($nav){
                          case 'LT6.1':
                            require_once 'SVG/LT6.1.php';
                            break;

                          case 'LT7.1':
                          require_once 'CANVAS/canvas.php';
                          break;

                          case 'LT6.2':
                            require_once 'SVG/LT6.2.php';
                            break;
                          case 'Mod3':
                            require_once 'CSS/Module3.php';
                            break;
                          case 'Mod2':
                            require_once 'CSS/Module2.php';
                            break;
                          case 'Mod4':
                            require_once 'CSS/Module4.php';
                            break;
                          case 'LT5.1':
                            require_once 'SVG/LT5.1.php';
                            break;
                          case 'home':
                              require_once 'home.php';
                              break;
                            case 'about':
                            require_once 'about.php';
                            break;
                         
                        default:
                            require_once 'home.php';
                        }
                        ?>
     </div>

     
    </div>
    <div class="footer"> sannyreyjover@gmail.com | <a class="footerlink" href="https://github.com/reyjover" target="blank"> Github </a> </div>        
    </body>

 </html>