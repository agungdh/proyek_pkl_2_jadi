 <script src="<?php echo base_url('assets_login/'); ?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets_login/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets_login/'); ?>js/jquery.backstretch.js" type="text/javascript"></script>
    <script type="text/javascript">
        'use strict';

        /* ========================== */
        /* ::::::: Backstrech ::::::: */
        /* ========================== */
        // You may also attach Backstretch to a block-level element
        $.backstretch(
        [
            "<?php echo base_url('assets_login/'); ?>img/44.jpg",
            "<?php echo base_url('assets_login/'); ?>img/colorful.jpg",
            "<?php echo base_url('assets_login/'); ?>img/34.jpg",
            "<?php echo base_url('assets_login/'); ?>img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
    </script>
    </form>
</body>
</html>
