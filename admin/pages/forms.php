<?php
$map = array('titulo' => 'Inputs', 'secao' => 'Formulários');
include_once 'header.php';
require_once '../assets/php/classes/linksClass.php';
?>
<link rel="stylesheet" href="../<?= (Links::css_DatePicker) ?>">
<link rel="stylesheet" href="../<?= (Links::css_DateRange) ?>">
<link rel="stylesheet" href="../<?= (Links::css_iCheck) ?>">
<link rel="stylesheet" href="../<?= (Links::css_Select2) ?>">
<link rel="stylesheet" href="../<?= (Links::css_TimePicker) ?>">
<link rel="stylesheet" href="../<?= (Links::css_ColorPicker) ?>">
<!-- Main content -->
<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Select2</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Minimal</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled</label>
            <select class="form-control select2" disabled="disabled" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>Multiple</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
              <option>Alabama</option>
              <option>Alaska</option>
              <option>California</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled Result</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Alabama</option>
              <option>Alaska</option>
              <option disabled="disabled">California (disabled)</option>
              <option>Delaware</option>
              <option>Tennessee</option>
              <option>Texas</option>
              <option>Washington</option>
            </select>
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
      the plugin.
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Date picker</h3>
        </div>
        <div class="box-body">
          <!-- Date -->
          <div class="form-group">
            <label>Date:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <!-- Date range -->
          <div class="form-group">
            <label>Date range:</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="reservation">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <!-- Date and time range -->
          <div class="form-group">
            <label>Date and time range:</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
              </div>
              <input type="text" class="form-control pull-right" id="reservationtime">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <!-- Date and time range -->
          <div class="form-group">
            <label>Date range button:</label>

            <div class="input-group">
              <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                <span>
                  <i class="fa fa-calendar"></i> Date range picker
                </span>
                <i class="fa fa-caret-down"></i>
              </button>
            </div>
          </div>
          <!-- /.form group -->

        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <div class="col-md-6">

      <div class="box box-info">
        <div class="box-header">
          <h3 class="box-title">Color & Time Picker</h3>
        </div>
        <div class="box-body">
          <!-- Color Picker -->
          <div class="form-group">
            <label>Color picker:</label>
            <input type="text" class="form-control my-colorpicker1">
          </div>
          <!-- /.form group -->

          <!-- Color Picker -->
          <div class="form-group">
            <label>Color picker with addon:</label>

            <div class="input-group my-colorpicker2">
              <input type="text" class="form-control">

              <div class="input-group-addon">
                <i></i>
              </div>
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.form group -->

          <!-- time Picker -->
          <div class="bootstrap-timepicker">
            <div class="form-group">
              <label>Time picker:</label>

              <div class="input-group">
                <input type="text" class="form-control timepicker">

                <div class="input-group-addon">
                  <i class="fa fa-clock-o"></i>
                </div>
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </div>

  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">iCheck - Checkbox &amp; Radio Inputs</h3>
        </div>
        <div class="box-body">
          <!-- Minimal style -->

          <!-- checkbox -->
          <div class="form-group">
            <label>
              <input type="checkbox" class="minimal" checked>
            </label>
            <label>
              <input type="checkbox" class="minimal">
            </label>
            <label>
              <input type="checkbox" class="minimal" disabled>
              Minimal skin checkbox
            </label>
          </div>

          <!-- radio -->
          <div class="form-group">
            <label>
              <input type="radio" name="r1" class="minimal" checked>
            </label>
            <label>
              <input type="radio" name="r1" class="minimal">
            </label>
            <label>
              <input type="radio" name="r1" class="minimal" disabled>
              Minimal skin radio
            </label>
          </div>

          <!-- Minimal red style -->

          <!-- checkbox -->
          <div class="form-group">
            <label>
              <input type="checkbox" class="minimal-red" checked>
            </label>
            <label>
              <input type="checkbox" class="minimal-red">
            </label>
            <label>
              <input type="checkbox" class="minimal-red" disabled>
              Minimal red skin checkbox
            </label>
          </div>

          <!-- radio -->
          <div class="form-group">
            <label>
              <input type="radio" name="r2" class="minimal-red" checked>
            </label>
            <label>
              <input type="radio" name="r2" class="minimal-red">
            </label>
            <label>
              <input type="radio" name="r2" class="minimal-red" disabled>
              Minimal red skin radio
            </label>
          </div>

          <!-- checkbox -->
          <div class="form-group">
            <label>
              <input type="checkbox" class="flat-red" checked>
            </label>
            <label>
              <input type="checkbox" class="flat-red">
            </label>
            <label>
              <input type="checkbox" class="flat-red" disabled>
              Flat green skin checkbox
            </label>
          </div>

          <!-- radio -->
          <div class="form-group">
            <label>
              <input type="radio" name="r3" class="flat-red" checked>
            </label>
            <label>
              <input type="radio" name="r3" class="flat-red">
            </label>
            <label>
              <input type="radio" name="r3" class="flat-red" disabled>
              Flat green skin radio
            </label>
          </div>
        </div>
        <div class="box-footer">
          Many more skins available. <a href="http://fronteed.com/iCheck/">Documentation</a>
        </div>
      </div>
    </div>
  </div>

</section>
<?php include_once 'footer.php'; ?>
<script src="../<?=(Links::js_ColorPicker)?>"></script>
<script src="../<?=(Links::js_Moment)?>"></script>
<script src="../<?=(Links::js_Select2)?>"></script>
<script src="../<?=(Links::js_DatePicker)?>"></script>
<script src="../<?=(Links::js_DateRange)?>"></script>
<script src="../<?=(Links::js_TimePicker)?>"></script>
<script src="../<?=(Links::js_iCheck)?>"></script>

<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>

</html>