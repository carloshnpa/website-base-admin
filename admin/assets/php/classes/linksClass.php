<?php
namespace Classes;

/**
 * Classe para a padronização de includes de arquivos JS e CSS
 * constante de retorno tendo como base a pasta admin/ as ROOT
 * @package Classes
 * @example @return Links::js_Chart
 * @return String
 */

 class Links {

    public const js_Chart          = 'components/chart.js/Chart.min.js';
    public const js_Calendar       = 'components/fullcalendar/dist/fullcalendar.min.js';
    public const js_CalendarPt     = 'components/fullcalendar/dist/locale/pt-br.js';
    public const js_Select2        = 'components/select2/dist/js/select2.full.min.js';
    public const js_TimePicker     = 'plugins/timepicker/bootstrap-timepicker.min.js';
    public const js_DatePicker     = 'components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js';
    public const js_Moment         = 'components/moment/min/moment.min.js';
    public const js_DateRange      = 'components/bootstrap-daterangepicker/daterangepicker.js';
    public const js_iCheck         = 'plugins/iCheck/icheck.min.js';
    public const js_CKEditor       = 'components/ckeditor/ckeditor.js';
    public const js_CKFinder       = 'components/ckfinder/ckfinder.js';
    public const js_ColorPicker    = 'components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js';
    public const js_Holder         = 'components/holderjs/holder.min.js';
    
    public const css_DatePicker    = 'components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css';
    public const css_DateRange     = 'components/bootstrap-daterangepicker/daterangepicker.css';
    public const css_Calendar     = 'components/fullcalendar/dist/fullcalendar.min.css';
    public const css_TimePicker    = 'plugins/timepicker/bootstrap-timepicker.min.css';
    public const css_Select2       = 'components/select2/dist/css/select2.min.css';
    public const css_iCheck        = 'plugins/iCheck/all.css';
    public const css_ColorPicker   = 'components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css';

      
}

?>