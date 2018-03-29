<?php
$BUTTONS = isset($BUTTONS) ? $BUTTONS : true;
?>
<div class="features">
    <div class="row">
        <?php if ($BUTTONS) { ?>
            <?php
            if ($cfg->getClientRegistrationMode() != 'disabled'
                || !$cfg->isClientLoginRequired()) { ?>
                <div class="col">
                    <div class="card card-nav-tabs">
                        <h4 class="card-header card-header-info"><?php echo __('Open a New Ticket');?></h4>
                        <div class="card-body text-center">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto text-center">
                                    <a href="open.php" class="btn btn-primary btn-raised"><?php
                                     echo __('Open a New Ticket');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-warning"><?php echo _('Check Ticket Status');?></h4>
                    <div class="card-body text-center">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With custom support text below</p>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <a href="view.php" class="btn btn-primary btn-raised"><?php
                                echo __('Check Ticket Status');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="features">
    <div class="row"><?php
        $faqs = FAQ::getFeatured()->select_related('category')->limit(5);
        if ($faqs->all()) { ?>
            <div class="col">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-info"><?php echo __('Featured Questions'); ?></h4>
                    <div class="card-body text-center">
                        <ul class="list-group list-group-flush">
                            <?php   foreach ($faqs as $F) { ?>
                                <li class="list-group-item"><a href="<?php echo ROOT_PATH; ?>kb/faq.php?id=<?php
                                    echo urlencode($F->getId());
                                    ?>"><?php echo $F->getLocalQuestion(); ?></a></li>
                            <?php   } ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        }
        $resources = Page::getActivePages()->filter(array('type'=>'other'));
            if ($resources->all()) { ?>
            <div class="col">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-info"><?php echo __('Other Resources'); ?></h4>
                    <div class="card-body text-center">
                        <ul class="list-group list-group-flush">
                            <?php   foreach ($resources as $page) { ?>
                                <li class="list-group-item"><a href="<?php echo ROOT_PATH; ?>pages/<?php echo $page->getNameAsSlug();
                                    ?>"><?php echo $page->getLocalName(); ?></a></li>
                            <?php   } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
             }
        ?>
    </div>
</div>