<div class="wrapper">
    <i id="left" class="arrow fas fa-angle-left"></i>
    <div class="carrousel">
        <?php foreach ($carouselData as $data): ?>
        <div class="card__teacher item_carousel">
                <div class="teacher__contect">
                    <span></span>
                    <div class="img">
                        <img src="<?php echo $data['teacherImg']; ?>" alt="">
                    </div>
                    <h4><?php echo $data['teacherName']; ?></h4>
                    <h6><?php echo $data['teacherTitle']; ?></h6>
                    <p><?php echo $data['teacherInfo']; ?></p>
                </div>
        </div>
        <?php endforeach; ?>
    </div>
    <i id="right" class="arrow fas fa-angle-right"></i>
</div>

