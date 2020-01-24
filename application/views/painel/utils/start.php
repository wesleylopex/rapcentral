<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Components - Ready PRO Bootstrap 4 Admin Dashboard</title>
<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<link rel="icon" href="<?= base_url("assets/img/favicon.ico") ?>" type="image/x-icon" />

<!-- Fonts and icons -->
<script src="<?= base_url("assets/js/plugin/webfont/webfont.min.js") ?>"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Montserrat:100,200,300,400,500,600,700,800,900"]
        },
        custom: {
            "families": ["Flaticon", "LineAwesome"],
            urls: ['<?= base_url("assets/css/fonts.css") ?>']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!-- CSS Files -->
<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/ready.css") ?>">
<link rel="stylesheet" href="<?= base_url("assets/css/demo.css") ?>">