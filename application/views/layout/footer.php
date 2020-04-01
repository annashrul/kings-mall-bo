
<!-- Must needed plugins to the run this Template -->

<script src="<?=base_url().'assets/'?>js/bundle.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/date-time.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/setting.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/fullscreen.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/bootstrap-growl.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/notification-active.js"></script>

<!-- Active JS -->
<script src="<?=base_url().'assets/'?>js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="<?=base_url().'assets/'?>js/default-assets/modal-classes.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/modaleffects.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/peity.min.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/peity-demo.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/am-chart.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/gauge.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/serial.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/light.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/ammap.min.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/worldlow.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/radar.js"></script>
<script src="<?=base_url().'assets/'?>js/d3.min.js"></script>
<script src="<?=base_url().'assets/'?>js/c3.min.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/c3-chart-custom.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/dashboard-2.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/sweetalert2.min.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/sweetalert-init.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/file-upload.js"></script>
<script src="<?=base_url().'assets/'?>js/default-assets/basic-form.js"></script>

<script>
	/*date range*/
	function get_daterange(type) {
		var output = null;
		$.ajax({
			url: "http://localhost/bo_nov/site/get_session_date/" + type,
			type: "GET",
			async: false,
			success: function (res) {
				output = res;
			}
		});
		return output;
	}

	var startDate = get_daterange('startDate');
	var endDate = get_daterange('endDate');

	$('#daterange').daterangepicker({
		"showDropdowns": true,
		"ranges": {
			'Hari Ini': [moment(), moment()],
			'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'7 Hari Terakhir': [moment().subtract(6, 'days'), moment()],
			'30 Hari Terakhir': [moment().subtract(29, 'days'), moment()],
			'Minggu Ini': [moment().startOf('isoWeek'), moment().endOf('isoWeek')],
			'Minggu Lalu': [moment().subtract(1, 'weeks').startOf('isoWeek'), moment().subtract(1, 'weeks').endOf('isoWeek')],
			'Bulan Ini': [moment().startOf('month'), moment().endOf('month')],
			'Bulan Lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
			'Tahun Ini': [moment().startOf('year'), moment().endOf('year')],
			'Tahun Lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
		},
		"alwaysShowCalendars": true,
		"startDate": startDate,
		"endDate": endDate,
		"maxDate": moment(),
		"opens": "right"
	}, function(start, end, label) {
		console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
		$('#field-date').val(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
		after_change(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
	});
	function after_change(val) {
		$.ajax({
			url: "http://localhost/bo_nov/site/set_session_date/" + btoa('field-date') + '/' + btoa(val),
			type: "GET",
			success: function (res) {
				console.log(res);
			}
		});
	}
</script>

</html>
