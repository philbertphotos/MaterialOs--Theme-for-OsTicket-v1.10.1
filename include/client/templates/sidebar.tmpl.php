<?php
$BUTTONS = isset($BUTTONS) ? $BUTTONS : true;
?>
    <div class="row">
        <?php if ($BUTTONS) { ?>
            <?php
            if ($cfg->getClientRegistrationMode() != 'disabled'
                || !$cfg->isClientLoginRequired()) { ?>
                <div class="col">
                    <div class="card card-nav-tabs">
                        <h4 class="card-header card-header-info"><?php echo __('Open a New Ticket');?></h4>
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="open.php" class="btn btn-primary"><?php
                            echo __('Open a New Ticket');?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-warning"><?php echo _('Check Ticket Status');?></h4>
                    <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With custom support text below</p>
                        <a href="view.php" class="btn btn-danger"><?php
                            echo __('Check Ticket Status');?></a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="content"><?php
    $faqs = FAQ::getFeatured()->select_related('category')->limit(5);
    if ($faqs->all()) { ?>
            <section><div class="header"><?php echo __('Featured Questions'); ?></div>
<?php   foreach ($faqs as $F) { ?>
            <div><a href="<?php echo ROOT_PATH; ?>kb/faq.php?id=<?php
                echo urlencode($F->getId());
                ?>"><?php echo $F->getLocalQuestion(); ?></a></div>
<?php   } ?>
            </section>
<?php
    }
    $resources = Page::getActivePages()->filter(array('type'=>'other'));
    if ($resources->all()) { ?>
            <section><div class="header"><?php echo __('Other Resources'); ?></div>
<?php   foreach ($resources as $page) { ?>
            <div><a href="<?php echo ROOT_PATH; ?>pages/<?php echo $page->getNameAsSlug();
            ?>"><?php echo $page->getLocalName(); ?></a></div>
<?php   } ?>
            </section>
<?php
    }
        ?></div>
    </div>

