<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 
if (isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
    
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=gdevice-width, initial-scale=1.0">
    <!-- Font Awesome đây là thư viện biểu tượng -->
    <script src="https://kit.fontawesome.com/790d2dd572.js" crossorigin="anonymous"></script>
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <title><?php echo $post['title']; ?></title>
</head>

<body>
    <!-- Facebook page plugin sdk -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="1VZZkDAP"></script>



    <!-- TODO INCLUDE HEADER HERE-->
    <?php include(ROOT_PATH . "/app/includes/header.php");?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main Content Wrapper-->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>

                    <div class="post-content">
                        <?php echo html_entity_decode($post['body']); ?>

                    </div>
                </div>
            </div>
            <!-- //Main Content -->

            <!-- Sidebar -->
            <div class="sidebar single">

                <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn">KhoaCNTT-TLU</a></blockquote>
                </div>


                <div class="section popular">
                    <h2 class="section-title">Phổ Biến</h2>
                    
                    <?php foreach ($posts as $p):?>
                        <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $p['title'] ?></h4>
                        </a>
                    </div>
                   
                    <?php endforeach;?>
                    


                </div>


                <div class="section topics">
                    <h2 class="section-title">CHỦ ĐỀ</h2>
                    <ul>
                        <?php foreach ($topics as $topic):?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
                        <?php endforeach;?>
                        
                    
                    </ul>
                </div>
            </div>
            <!-- //Sidebar -->
        </div>
        <!-- // Content -->
    </div>

    <!-- // Page Wrapper -->

<!-- TODO Include footer here -->
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>