<?php
if ($this->input->get('error') == 1) {
    ?>
    <script type="text/javascript">
        alert('Password salah !!!');
    </script>
    <?php
}
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>Mobilku!</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="<?php echo base_url('assets_login/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets_login/'); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets_login/'); ?>css/font-awesome.css" rel="stylesheet" type="text/css" />
</head>