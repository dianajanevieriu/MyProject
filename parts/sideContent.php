<div class="col-lg-3 text-bg-light p-3" style="height: 960px">
    <div class="widget widget_links clearfix">
        <h4 class="text-success">Noutăți</h4>
        <div class="row col-mb-30">
            <div class="col">
                <ul>
                    <li><a href="./news.php"><strong class="fs-6">Noutăți materiale confecții</strong></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <?php foreach (\Classes\MainCategory::findAll() as $mainCategory): ?>
            <h4 class="text-success mt-4"><?php echo $mainCategory->name; ?></h4>
            <div class="row col-mb-30">
                <div class="col">
                    <ul>
<!--                        --><?php //$subCategories = \Classes\SubCategory::findAll(); ?>
<!--                        --><?php //foreach ($subCategories as $subCategoryObj): ?>
                            <li><a href="subCategoryPage.php?id=<?php echo $mainCategory->getSubCategories()->id; ?>"><strong class="fs-6"><?php echo $mainCategory->getSubCategories(); ?></strong></a></li>
<!--                        --><?php //endforeach; ?>
                    </ul>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>