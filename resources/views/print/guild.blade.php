@php
	use Milon\Barcode\DNS1D;
@endphp

<!DOCTYPE html>
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>طباعة</title>
    <style>
        @page {
            size: Portrait;
        }
    </style>
</head>
<body>
	<div class="only-print">
	    
		<img src="{{asset('id/guild-front.png')}}" style="width: 545px;height: 893px;position: absolute;margin-right: 2px;">

		<img src="{{$cus->guild->img}}" style="border-radius: 50%;width: 65px;height: 63px;position: absolute;margin-top: 25px;margin-right: 425px;">

		<p style="font-size: 19px;font-weight: bold;margin-right: 77px;margin-top: 61px;position: absolute;max-width: 368px;">{{$cus->guild->name}}</p>
		
		<p style="font-weight: bold;font-size: 18px;margin-right: 194px;margin-top: 380px;position: absolute;">{{$cus->guild->user->name}}</p>
		
		<img src="{{$cus->img}}" style="border-radius: 6%;width: 166px;height: 219px;position: absolute;margin-top: 146px;margin-right: 167px;">
        
        <img src="{{$cus->guild->sign}}" style="width: 151px;height: 112px;position: absolute;margin-top: 313px;margin-right: 167px;">
        
        <div style="max-width: 96px !important;max-height: 83px !important;position: absolute;margin-top: 690px;margin-right: 380px;">
    
            <img style="max-width: 92px;" src="data:image/png;base64,{{$qrCode}}">
        
        </div>
        
		<p style="font-size: 30px;font-weight: bold;margin-right: 27px;margin-top: 449px;position: absolute;">{{$cus->name}}</p>

		<p style="font-weight: bold;font-size: 30px;margin-right: 22px;margin-top: 510px;position: absolute;">عضو نقابي</p>

		<p style="font-size: 30px;font-weight: bold;margin-right: 23px;margin-top: 576px;position: absolute;">{{$cus->job}}</p>

		<p style="font-size: 30px;font-weight: bold;margin-right: 22px;margin-top: 655px;position: absolute;">{{$cus->categorize}}</p>

        <p style="font-size: 28px;font-weight: bold;margin-right: 22px;margin-top: 747px;position: absolute;">{{$cus->job_address}}</p>
        
        <p style="font-size: 24px;font-weight: bold;margin-right: 276px;margin-top: 802px;position: absolute;">{{$cus->end_date}}</p>
        
        <div style="page-break-before: always;">
    	        
                <img src="{{asset('id/guild-back.png')}}" style="width: 545px;height: 893px;position: absolute;margin-top: 898px;">
        	    
        	    <img src="{{$cus->guild->img}}" style="border-radius: 50%;width: 51px;height: 52px;position: absolute;margin-top: 928px;margin-right: 436px;">
        	    
        	    <div style="max-width: 96px !important;max-height: 83px !important;position: absolute;margin-top: 1076px;margin-right: 215px;">
    
    			    <img style="max-width: 77px;" src="data:image/png;base64,{{$qrCode}}">
    		    </div>
    		
        	    <p style="font-size: 24px;font-weight: bold;margin-right: 159px;margin-top: 1165px;position: absolute;">{{$cus->name_en}}</p>
                
        		<p style="font-size: 24px;font-weight: bold;margin-right: 17px;margin-top: 1429px;position: absolute;">{{$cus->govs->name}}</p>
                
                <p style="font-size: 24px;font-weight: bold;margin-right: 17px;margin-top: 1368px;position: absolute;">{{$cus->dob}}</p>
        		<p style="font-size: 24px;font-weight: bold;margin-right: 363px;margin-top: 1368px;position: absolute;">{{$cus->dob}}</p>
        		
        		<p style="font-size: 24px;font-weight: bold;margin-right: 390px;margin-top: 1435px;position: absolute;">{{$tr->translate($cus->govs->name)}}</p>
        		
        		<p style="font-size: 24px;font-weight: bold;margin-right: 284px;margin-top: 1652px;position: absolute;">{{$cus->insurance}}</p>
        		
                <p style="font-size: 24px;font-weight: bold;margin-right: 22px;margin-top: 1654px;position: absolute;">{{$cus->gov_insurance}}</p>
                
	    </div>
        
	</div>
	

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>

	$(document).ready(function () {
		window.print();
	});
</script>

</body>
</html>