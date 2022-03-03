<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");
include('sadmin/connection.php');

$categories = array(
    "Pipe & Fittings"=> array("Plumbing", "Agriculture", "Sewerage"),
    "Adhesive"=> array("Adhesive"),
    "Bath Fittings"=> array("Bath Fittings"),
    "Water Storage"=> array("Water Storage"),
    "Home Solutions"=> array("Home Solutions"),
);

$preserved = array_keys($categories);

function get_id($k) {
    global $preserved;
    
    $i = array_search($k, $preserved);
    
    return $i + 1;
}

$cat = 0;

if (isset($_GET["cat"])) {
    $cat = intval($_GET['cat']);
    if ($cat > count($categories) || $cat < 1) {
        $cat = 0;
    } else {
        $cat = $cat - 1;
    }
}

$first = array_splice($categories, $cat, 1);

$arranged = array_merge($first, $categories);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Apollo</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/animate.min.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
    .product-image img{
        border:none !important;
    }
</style>
<body>
    <?php include('header.php'); ?>
    <div id="main-content" style="overflow: hidden;">
        <section class="d-none d-sm-none d-md-block d-lg-block">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/product-banner.jpg" alt="Los Angeles" width="1100" height="500"
                            data-aos="fade-in" />
                        <div class="carousel-caption">
                            <div class="col-md-12 mt-5">
                                <h1 class="text-black" data-aos="fade-up">Our Products</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-block d-sm-block d-md-none d-lg-none">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/product-banner-mobile.jpg" alt="Los Angeles" width="1100" height="500"
                            data-aos="fade-in" />
                        <div class="carousel-caption">
                            <div class="col-md-12 mt-5">
                                <h1 class="text-black" data-aos="fade-up">Our Products</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-5 bg-white">
            <div class="container" id="products_listview">
                <div class="row">
                    <div class="col-md-4 text-center" data-aos="fade-right">
                        <div class="left-menu">
                            <?php 
                                $init = true;
                                foreach ($arranged as $k=>$v):
                            ?>
                                <div class="<?php echo ($init ? '' : 'mt-4'); ?>">
                                    <h4>
                                        <a style="color:#676767;" class="<?php echo ($init ? 'active' : ''); ?>" href="products.php?cat=<?php echo get_id($k); ?>">
                                            <?php echo $k; ?>
                                        </a>
                                    </h4>
                                    <ul class="text-left mb-0">
                                        <?php if(count($v) > 0): ?>
                                            <?php
                                                $query = "SELECT * FROM products WHERE category IN ";
                                                $query .= "(" . join(", ", array_map(function ($el) {
                                                    return '"'.$el.'"';
                                                }, $v)) . ")";
                                                $sql = mysqli_query($conn, $query);
                                            ?>
                                            <?php    
                                                while($result=mysqli_fetch_array($sql)):
                                            ?>
                                                <a href="single-product.php?id=<?php echo $result['id']; ?>">
                                                    <li><?php echo $result['productTitle']; ?></li>
                                                </a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php
                                $init = false;
                                endforeach; 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-8" data-aos="fade-left">
                        <div class="row">
                            <?php
                                $query = "SELECT * FROM products WHERE category IN ";
                                $query .= "(" . join(", ", array_map(function ($el) {
                                    return '"'.$el.'"';
                                }, array_pop($first))) . ")";
                                $sql = mysqli_query($conn, $query);
                                while($result=mysqli_fetch_array($sql)){
                                    echo '<div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                                            <a href="single-product.php?id='.$result['id'].'">
                                                <div class="product-image">
                                                    <img src="sadmin/product-images/'.$result['productMainImg'].'" />
                                                    <p>'.$result['productTitle'].'</p>
                                                </div>
                                            </a>
                                        </div>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('footer.php'); ?>
        
        <script>
            function scrollOnPageLoad() {
                // to top right away
                scroll(0, 0);
                // void some browsers issue
                setTimeout(scroll(0, 0), 1);
                
                var hashLink = "#products_listview";
                
                if ($(hashLink).length) {
                    $(function () {
                        // *only* if we have anchor on the url
                        // smooth scroll to the anchor id
                        $('html, body').animate({
                            scrollTop: $(hashLink).offset().top - 150
                        }, 1000);
                    });
                }
            }
            window.onload = scrollOnPageLoad;
        </script>
</body>

</html>