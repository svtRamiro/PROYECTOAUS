<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">   
            <div class="col-xs-12 col-sm-6 hidden-xs">
                <h2 class="page-title">Catálogo de productos</h2>
            </div>
        </div>          
    </div>
</div>
<?php
$img = array(
    'car1.jpg', 'car2.jpg', 'car3.jpg', 'car4.jpg', 'car5.jpg', 'car1.jpg', 'car2.jpg', 'car3.jpg',
    'car1.jpg', 'car2.jpg', 'car3.jpg', 'car4.jpg', 'car5.jpg', 'car4.jpg', 'car5.jpg', 'car4.jpg',
    'car1.jpg', 'car2.jpg', 'car3.jpg', 'car4.jpg', 'car5.jpg', 'car1.jpg', 'car2.jpg', 'car3.jpg',
    'car4.jpg', 'car5.jpg', 'car1.jpg', 'car2.jpg', 'car3.jpg', 'car4.jpg', 'car5.jpg', 'car2.jpg',
)
?>
<?php $this->modsPerPageOptions = array(9, 13, 25) ?>
<?php if ($gettingConfig) return ?>

<div class="container-outer">
    <div class="container"> 
        <div class="row gap-25-sm">                 
                <div class="col-sm-8 col-md-9">
                    <div class="content-wrapper">
                        <div class="result-sorting-wrapper mb-30">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="text-holder">
                                        <?php $this->renderToolbar(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="car-item-wrapper alt-bg-white" id="filterResults">

                            <div class="GridLex-gap-30">
                            
                                <div class="GridLex-grid-noGutter-equalHeight GridLex-grid-center">
                                    <?php $i = 0 ?>
                                    <?php foreach ($modules as $modName => $content): ?>
                                        <div class="GridLex-col-4_sm-6_xs-12">
                                        
                                            <div class="car-item">
                                                <a href="<?php echo Content::getLink($modules[$modName], $this->seccion); ?>">
                                                     <?php
                                                        Content::showImage(array(
                                                        'mod' => $modules[$modName],
                                                        'img' => 0,
                                                        'fallback' => $img[$i],
                                                        'zc' => true,
                                                        'class' => 'image'
                                                    ))
                                                    ?>
                                                    
                                                    <div class="content">
                                                        <h5><?php Content::renderTitle($modules[$modName], 50) ?></h5>
                                                        <h6><?php Content::renderShortText($modules[$modName], 50) ?></h6>
                                                        <?php if (Content::getPrice($modules[$modName], 2)): ?>
                                                                <p class="price">
                                                                    <?php Content::renderPrice($modules[$modName], 2) ?>
                                                                </p> 
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="bottom">
                                                        <a href="<?php echo Content::getLink($modules[$modName], $this->seccion); ?>" class="link btn btn-theme" title=""><?php echo $_SESSION["DEFAULT_WORDS"]["DETAILS"] ?>
                                                        </a>
                                                    </div>
                                                </a>
                                                
                                            </div>

                                        </div>
                                     <?php
                                        if (($i+1)%3 == 0) {
                                            ?>
                                            <div class="clear"></div>
                                            <?php
                                        }
                                    ?>
                                    <?php $i++ ?>
                                    <?php endforeach ?>

                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="paging-wrapper mt-30 clearfix">
                            <?php $this->renderPaginator('pull-right') ?>
                            <p><?php echo $_SESSION['DEFAULT_WORDS']['PRODUCTS_PAGE'] ?></p>
                            <?php $this->renderPaginatorDropdown() ?>
                            
                        </div>
                        
                    </div>
    
                </div>
                <div class="col-sm-4 col-md-3" id="filters">

                    <aside class="sidebar-wrapper">
                    
                        <div class="result-filter-wrapper">
                            <h3>Filtros de búsqueda</h3>
                            <?php $this->renderFilters('boost3'); ?>
                        </div>
                        
                    </aside>
                    
                </div>
        </div>
    </div>
</div>