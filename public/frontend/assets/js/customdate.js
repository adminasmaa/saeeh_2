jQuery(document).ready(function () {
    jQuery('#datepicker').datepicker(
      $.datepicker.regional['ar'] = {
                closeText: 'إغلاق',
                prevText: '&#x3c;السابق',
                nextText: 'التالي&#x3e;',
                currentText: 'اليوم',
                  monthNames: [' يناير ', 'فبراير ', 'مارس ', 'ابريل ', 'مايو ', 'يونيو ',   'يوليو ', 'أغسطس ', 'سبتمبر ',  'أكتوبر  ', 'نوفمبر  ', ' ديسمبر '],
                  monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                  dayNames: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  dayNamesShort: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  dayNamesMin: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  weekHeader: 'أسبوع',
                  dateFormat: 'yy-mm-dd',
                firstDay: 6,
                isRTL: true,
                showMonthAfterYear: false,
                  yearSuffix: ''},
          $.datepicker.setDefaults($.datepicker.regional['ar'])
)});

  jQuery(document).ready(function () {
    jQuery('#datepicker1').datepicker(
      $.datepicker.regional['ar'] = {
                closeText: 'إغلاق',
                prevText: '&#x3c;السابق',
                nextText: 'التالي&#x3e;',
                currentText: 'اليوم',
                  monthNames: [' يناير ', 'فبراير ', 'مارس ', 'ابريل ', 'مايو ', 'يونيو ',   'يوليو ', 'أغسطس ', 'سبتمبر ',  'أكتوبر  ', 'نوفمبر  ', ' ديسمبر '],
                  monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                  dayNames: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  dayNamesShort: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  dayNamesMin: ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
                  weekHeader: 'أسبوع',
                  dateFormat: 'yy-mm-dd',
                firstDay: 6,
                isRTL: true,
                showMonthAfterYear: false,
                  yearSuffix: ''},
          $.datepicker.setDefaults($.datepicker.regional['ar'])
)});