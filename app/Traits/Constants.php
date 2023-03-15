<?php

namespace App\Traits;

trait Constants{

	function question(){
	    
	    return [
	    	'امراض القلب والشرايين (الضغط – شرايين القلب – عضل القلب – جلطة في الدماغ – نزيف في الدماغ – سائر امراض القلب والشرايين)',
            'امراض الجهاز التنفسي ماعدا السرطان (الربو –انسداد القصبات الهوائية – تشمع الرئة – امراض أخرى)',
            'امراض الجهاز الهضمي ماعدا السرطان (قولون – التهاب الامعاء – جيوب في الامعاء – امراض المرارة – الكبد – البنكرياس)   ',
            'امراض الكلى والمسالك البولية (حصوة – التهاب – قصور – تكيس)',
            'امراض العضم ماعدا السرطان او الاطراف المزروعة',
            'امراض الجهاز العصبي ماعدا السرطان (شلل الاطفال – انهيار عصبي – تليف لويحي – الصرع ...)',
            'السكري او امراض الغدد ماعدا السرطان',
            'امراض الاذن، الانف والحنجرة او العين ماعدا السرطان',
            'امراض الدم ماعدا الامراض الخبيثة (فقر الدم)',
            'امراض خبيثة (اورام خبيثة وامراض خبيثة في الدم)',
            'الامراض المنتقلة جنسيا ومرض او فيروس الايدز',
            'امراض اخرى. حوادث او عمليات تنظير او فحوصات تشخيصية سابقة او مستقبلية على علم مسبق بها',
            ' هل تتناول اي دواء او تتابع اي علاج',
            'للنساء: هل انت حامل في الوقت الحاضر',
            'الامراض والعاهات الخلقية',
            'الامراض النفسية (كأبة – توتر)',
            'هل تعاني من عوارض متعلقة بالأمراض المذكورة اعاله (اوجاع ظهر – اوجاع صدر – اوجاع مفاصل)'
	    ];
	}
	
	function usernotification($id,$data){
	    $content = array(
	        "en" => $data
	    );

	    $fields = array(
	        'app_id' => "7e3f5328-41df-4280-9e83-d8c565533fe4",
	        'include_player_ids' => array($id),
	        'data' => array(
	            "foo" => "bar"
	        ),
	        'contents' => $content
	    );

	    $fields = json_encode($fields);
	    print("\nJSON sent:\n");
	    print($fields);

	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
	    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
	                                               'Authorization: Basic ODAyMWI2ZWYtNTg2MS00NDVhLWJiOTItZWQyODliNmVlNTRh'));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($ch, CURLOPT_HEADER, FALSE);
	    curl_setopt($ch, CURLOPT_POST, TRUE);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

	    $response = curl_exec($ch);
	    curl_close($ch);

	    return $response;
	}

}