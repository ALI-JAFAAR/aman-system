<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>طباعة</title>

</head>
<body>
	<div class="only-print">
		<img src="{{asset('id/master.mysan.jpg')}}" style="margin-right: 4px; width: 800px;height: 518px;position: absolute;">

		<p style="transform: rotate(-90deg);font-weight: bold;font-size: 16px;margin-right: -26px;margin-top: 233px;position: absolute;">No: {{$cus->card_no}}</p>

		<img src="{{$cus->img}}" style="width: 120px;height: 144px;position: absolute;margin-top: 169px;margin-right: 51px;border-radius: 11px;">

		<div style="max-width: 78px !important;max-height: 75px !important;position: absolute;margin-top: 351px;margin-right: 616px;">

			<img style="max-width: 78px;" src="data:image/png;base64,{{$qrCode}}">
			
		</div>


		<p style="font-size: 22px;font-weight: bold;margin-right: 259px;margin-top: 136px;position: absolute;">{{$cus->name}}</p>
		<p style="font-size: 22px;font-weight: bold;margin-right: 470px;margin-top: 136px;position: absolute;">{{$cus->name_en}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 259px;margin-top: 174px;position: absolute;">{{$cus->job}}</p>
		<p style="font-weight: bold;font-size: 22px;margin-right: 470px;margin-top: 174px;position: absolute;">{{$tr->translate($cus->job)}}</p>
		
		<p style="font-weight: bold;font-size: 20px;margin-right: 297px;margin-top: 210px;position: absolute;">{{$cus->job_address}}</p>
		<p style="font-weight: bold;font-size: 20px;margin-right: 470px;margin-top: 210px;position: absolute;">{{$tr->translate($cus->job_address)}}</p>
		
		<p style="font-weight: bold;font-size: 22px;margin-right: 277px;margin-top: 249px;position: absolute;">{{$cus->govs->name}}</p>
		<p style="font-weight: bold;font-size: 22px;margin-right: 470px;margin-top: 249px;position: absolute;">{{$tr->translate($cus->govs->name)}}</p>
		
		<p style="font-weight: bold;font-size: 22px;margin-right: 268px;margin-top: 283px;position: absolute;">{{$cus->categorize}}</p>
		<p style="font-weight: bold;font-size: 22px;margin-right: 470px;margin-top: 283px;position: absolute;">{{$tr->translate($cus->categorize)}}</p>
		
		<p style="font-weight: bold;font-size: 22px;margin-right: 268px;margin-top: 319px;position: absolute;">حقول النفط والغاز</p>
		<p style="font-weight: bold;font-size: 22px;margin-right: 470px;margin-top: 319px;position: absolute;">{{$tr->translate('حقول النفط والغاز')}}</p>
		
		
		<p style="font-weight: bold;font-size: 25px;margin-right: 423px;margin-top: 398px;position: absolute;">{{$cus->end_date}}</p>

		<p style="font-weight: bold;font-size: 26px;margin-right: 364px;margin-top: 458px;position: absolute;">{{$cus->insurance}}</p>

	</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function () {
		window.print();
	});
</script>

</body>
</html>