<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>طباعة</title>

</head>
<body>
	<div class="only-print">
		<img src="{{asset('id/aman.png')}}" style="width: 420px;height: 777px;position: absolute;">
		<p style="font-size: 20px;font-weight: bold;margin-right: 6%;margin-top: 31.3%;position: absolute;">worker->name</p>

		<p style="font-size: 20px;margin-right: 10%;margin-top: 34.5%;position: absolute;">member_type</p>
		<p style="font-size: 20px;    margin-right: 10%;margin-top: 36.5%;position: absolute;">worker->job</p>
		<p style="font-size: 20px;margin-right: 10%;margin-top: 39%;position: absolute;">worker->dob</p>
		<p style="font-size: 20px;    margin-right: 10%;margin-top: 41.3%;position: absolute;">worker->job_place</p>
		<p style="font-size: 18px;    margin-right: 11%;margin-top: 43.5%;position: absolute;">worker->insurance</p>
		<p style="font-size: 18px;margin-right: 10.4%;margin-top: 45.8%;position: absolute;">worker->end_date</p>
	</div>


<script>
	$(document).ready(function () {
		// window.print();
	});
</script>

</body>
</html>