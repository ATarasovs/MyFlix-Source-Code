<?php
    /**
     * Created by PhpStorm.
     * User: atara
     * Date: 2/7/2019
     * Time: 22:27
     */

    include '../include/header.php';

    $videoId = $_GET['id'];
    $video = $videosCollection->findOne(array("_id" => new MongoId($videoId)));
?>
<div class="container">
    <div class="jumbotron videojumbotron">
        <h3><?php echo $video['name']; ?></h3>
        <div align="center" class="embed-responsive embed-responsive-16by9">
            <video id='my-video' class='video-js embed-responsive-item' controls preload='auto'
                   poster="<?php echo $video['ip']?>/images/<?php echo $video['image']; ?>"  data-setup='{}'>
                <source src="<?php echo $video['ip']?>/videos/<?php echo $video['file']; ?>" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<?php include '../include/footer.php'; ?>


