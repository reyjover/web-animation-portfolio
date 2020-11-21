<?php 
$nav = (isset($_GET['nav']) && $_GET['nav'] != '') ? $_GET['nav']: '';
?>
<html> 
    <head> 
        <title> JOVER | Portfolio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    </head>
            <body>

                <div class="wrapper">
                    <br/> 
                    <h2> Sanny Rey Jover | BSIT3A </h2>
                    <br/> 
                                <div class="header">

                                    <div class="dropdown"><button class="dropbtn">CSS</button><div class="dropdown-content">
                                        <a href="index.php?nav=Mod2">Module 2</a>
                                        <a href="index.php?nav=Mod3">Module 3</a>
                                        <a href="index.php?nav=Mod4">Module 4</a>
                                    </div>
                                    </div>

                                    <div class="dropdown"><button class="dropbtn">SVG</button><div class="dropdown-content">
                                        <a href="index.php?nav=LT5.1">Learning Task 5.1</a>
                                        <a href="index.php?nav=LT6.1">Learning Task 6.1</a>
                                        <a href="index.php?nav=LT6.2">Learning Task 6.2</a>
                                        <a href="floom/index.php" target="blank">Floom | LE</a>
                                    </div>
                                    </div>

                                    
                                </div>
                    <br/> 
                    <div class="content">
                        <?php 
                        switch($nav){
                          case 'LT6.1':
                            require_once 'SVG/LT6.1.php';
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

                        default:
                            require_once 'index.php';
                        }
                        ?>
                    </div>
                </div>   
                
                
            </body>

</html>
