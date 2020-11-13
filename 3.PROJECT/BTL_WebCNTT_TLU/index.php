<?php 
include("path.php"); 
include(ROOT_PATH . "/app/controllers/topics.php");
$posts = array();
$postsTitle = 'Bài Viết Mới';

if (isset($_GET['t_id'])){
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "Các bài viết về chủ đề '" . $_GET['name'] . "'";
} 
else if (isset($_POST['search-term'])){
    $postsTitle = "Bài viết về '" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
} else{
    $posts = getPublishedPosts();
}

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
    <title>Khoa cntt TLU</title>
</head>

<body>

<!-- TODO INCLUDE HEADER HERE-->
    <?php include(ROOT_PATH . "/app/includes/header.php");?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
    
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">
                Top Bài Viết
            </h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">

                <?php foreach($posts as $post): ?>

                <div class="post">
                    <img src='<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>' alt="slider" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                        <i class="far fa-user"><?php echo $post['username']?></i> &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- //Post Slider -->

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
                <?php foreach($posts as $post): ?>
                
                <div class="post clearfix">
                    <img src='<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>' alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'] ?></a></h2>
                        <i class="far fa-user"><?php echo $post['username']?></i> &nbsp;
                        <i class="far calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Đọc bài viết</a>
                    </div>
                </div>
                <?php endforeach; ?>
               
            </div>
            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Tìm Kiếm</h2>
                    <form action="index.php" method="POST">
                        <input type="text" name="search-term" class="text-input" placeholder="Tìm kiếm">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Chủ Đề</h2>
                    <ul>
                    <?php foreach($topics as $key => $topic):?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
                    <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- // Content -->
    </div>

    <!-- // Page Wrapper -->

<!-- TODO INCLUDE FOOTER HERE -->
    <?php include(ROOT_PATH . "/app/includes/footer.php");?>


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>