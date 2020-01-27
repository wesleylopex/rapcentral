<script>
  var base_url = "<?= base_url(); ?>"
</script>

<script src="<?= base_url() ?>assets/painel/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/moment/moment.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/select2/select2.full.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/ready.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/setting-demo2.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/mask/jquery.mask.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/dropzone/dropzone.min.js"></script>
<script src="<?= base_url() ?>assets/painel/js/plugin/jquery.validate/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/painel/plugins/summernote/dist/summernote-bs4.js"></script>

<script>

  $(".phone").mask("(00) 0.0000-0000");
  $(".summernote").summernote({
    height: 300,
  });

  // plugin jquery validation
  jQuery.extend(jQuery.validator.messages, {
    required: "Obrigatório.",
    remote: "Please fix this field.",
    email: "Escreva um endereço válido.",
    url: "Escreva uma URL válida.",
    date: "Escreva uma data válida.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Escreva um número válido.",
    digits: "Please enter only digits.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
  });
</script>