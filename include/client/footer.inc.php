        </div>
    </div>
    <footer class="footer ">
        <div class="container">
            <div class="copyright pull-left">
               MaterialOs Theme for Osticket Based in <a href="https://www.creative-tim.com/product/material-kit" target="_blank">MaterialKit</a>
            </div>
            <div class="copyright pull-right">
                &copy;
                <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'osTicket.com'; ?> - All rights reserved.
                <a id="poweredBy" href="http://osticket.com" target="_blank"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>
            </div>
        </div>
    </footer>
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
 <!--   Core JS Files   -->
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/core/jquery.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/core/popper.min.js"></script>
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="<?php echo ROOT_PATH; ?>assets/MaterialOs/js/material-kit.js?v=2.0.2"></script>
</body>
</html>
