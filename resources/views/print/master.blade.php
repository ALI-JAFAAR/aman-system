@php
	use Milon\Barcode\DNS1D;
@endphp

<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>طباعة</title>

</head>
<body>
	<div class="only-print">
		<img src="{{asset('id/aman_master.png')}}" style="margin-right: 4px; width: 800px;height: 518px;position: absolute;">
<p style="font-weight: bold;font-size: 20px;margin-right: 86px;margin-top: 78px;position: absolute;">{{$cus->guild->name}}</p>


		<p style="transform: rotate(-90deg); font-weight: bold;font-size: 16px;margin-right:-41px;margin-top: 200px;position: absolute;">No: {{$cus->card_no}}</p>


		<img src="{{$cus->guild->img}}" style="width: 60px;height: 57px;position: absolute;margin-top: 47px;margin-right: 427px;">


		<img src="{{$cus->img}}" style="width: 136px;height: 164px;position: absolute;margin-top: 128px;margin-right: 35px;border-radius: 15px;">

		<img src="{{$cus->guild->sign}}" style="width: 120px;height: 50px;position: absolute;margin-top: 277px;margin-right: 45px;">
		


		<div style="max-width: 78px !important;max-height: 75px !important;position: absolute;margin-top: 370px;margin-right: 616px;">

			<img style="max-width: 80px;" src="data:image/png;base64,{{$qrCode}}">
		</div>



		<p style="font-weight: bold;font-size: 16px;margin-right: 43px;margin-top: 334px;position: absolute;">{{$cus->guild->user->name}}</p>








		<p style="font-size: 22px;font-weight: bold;margin-right: 310px;margin-top: 147px;position: absolute;">{{$cus->name}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 310px;margin-top: 185px;position: absolute;">عضو نقابي</p>
		
		<p style="font-weight: bold;font-size: 22px;margin-right: 310px;margin-top: 219px;position: absolute;">{{$cus->job}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 310px;margin-top: 255px;position: absolute;">{{$cus->categorize}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 310px;margin-top: 291px;position: absolute;">{{$cus->dob}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 310px;margin-top: 329px;position: absolute;">{{$cus->govs->name}}</p>

		<p style="font-weight: bold;font-size: 22px;margin-right: 311px;margin-top: 377px;position: absolute;">{{$cus->job_address}}</p>

		<p style="font-weight: bold;font-size: 20px;margin-right: 382px;margin-top: 406px;position: absolute;">{{$cus->end_date}}</p>

		<p style="font-weight: bold;font-size: 16px;margin-right: 304px;margin-top: 456px;position: absolute;">{{$cus->insurance}}</p>

		<p style="font-weight: bold;font-size: 20px;margin-right: 617px;margin-top: 454px;position: absolute;">{{$cus->gov_insurance}}</p>
	</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
	
	$(document).ready(function () {
		window.print();
	});
</script>

</body>
</html>