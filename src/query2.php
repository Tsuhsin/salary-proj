<link href="./c3-0.7.20/c3.css" rel="stylesheet" type="text/css">
<script src="./c3-0.7.20/d3-5.8.2.min.js" charset="utf-8"></script>
<script src="./c3-0.7.20/c3.min.js"></script>

<?php
header('Content-Type: text/html; charset=utf-8');
// 指定Opendata資料的網址（歷年各業受僱員工每人每月總薪資）
$url = "https://quality.data.gov.tw/dq_download_json.php?nid=9634&md5_url=7b41ec11a497a37184b82402be86eda5";
// $url = "./temp/myopendata_cache.json";
// 從指定網站取得JSON資料
$json = file_get_contents($url);
//利用函數json_decode解析JSON格式資料
$json_data = json_decode($json, true);
// echo $json;
// 設定行業種類初始陣列
$industry_list['工業及服務業']='工業及服務業__Industry_and_services';
$industry_list['工業']='工業_Industrial';
$industry_list['礦業及土石採取業']='礦業及土石採取業_Mining_and_quarrying';
$industry_list['製造業']='製造業_Manufacturing';
$industry_list['電力及燃氣供應業']='電力及燃氣供應業_Electricity_and_gas_supply';
$industry_list['用水供應及污染整治業']='用水供應及污染整治業_Water_supply_and_remediation_activities';
$industry_list['營建工程業']='營建工程業_Construction';
$industry_list['服務業']='服務業_Services';
$industry_list['批發及零售業']='批發及零售業_Wholesale_and_retail_trade';
$industry_list['運輸及倉儲業']='運輸及倉儲業_Transportation_and_storage';
$industry_list['住宿及餐飲業']='住宿及餐飲業_Accommodation_and_food_service_activities';
$industry_list['出版_影音製作_傳播及資通訊服務業']='出版_影音製作_傳播及資通訊服務業_Information_and_communication';
$industry_list['金融及保險業']='金融及保險業_Financial_and_insurance_activities';
$industry_list['不動產業']='不動產業_Real_estate_activities';
$industry_list['專業科學及技術服務業']='專業科學及技術服務業_Professional_scientific_and_technical_activities';
$industry_list['支援服務業']='支援服務業_Support_service_activities';
$industry_list['教育業']='教育業_Education';
$industry_list['醫療保健']='醫療保健_Human_health_activities';
$industry_list['藝術_娛樂及休閒服務業']='藝術_娛樂及休閒服務業_Arts_entertainment_and_recreation';
$industry_list['其他服務業']='其他服務業_Other_service_activities';

$industry_index[0] = $industry_list[$_GET['i1']];
$industry_index[1] = $industry_list[$_GET['i2']];
$industry_index[2] = $industry_list[$_GET['i3']];
$industry_index[3] = $industry_list[$_GET['i4']];

$industry_get[0] = $_GET['i1'];
$industry_get[1] = $_GET['i2'];
$industry_get[2] = $_GET['i3'];
$industry_get[3] = $_GET['i4'];

// echo $industry_index;

$yy = 1980;
// $j = 0;

for ($i=0; $i<sizeof($json_data); $i++) {
    if ($json_data[$i]["年月別_Year_and_onth"]==$yy) {
        for ($j=0;$j<4;$j++) {
            $result[$j][$yy]=$json_data[$i][$industry_index[$j]];
        }
        if ($yy==2018) break;
        else $yy++;
    }
}

$json_out = json_encode($result);
// echo $json_out;
echo '<br> 1980年~2018年各行業每人每月總薪資';
?>

<div id="chart"></div>

<script>
var chart = c3.generate({
    bindto: '#chart',
    data: { 
    	x: 'x',
        columns: [
        	['x', 
        	<?php
        		for ($i=1980; $i<=2018; $i++) {
        			echo $i;
        			if ($i==2018) echo ']';
        			else echo ',';
        		}
        		echo ',';
                for ($j=0;$j<4;$j++) {
                    echo "['" . $industry_get[$j] . "',";
                    for ($i=1980; $i<=2018; $i++) {
                        echo $result[$j][$i];
                        if ($i==2018) echo ']';
                        else echo ',';
                    }
                    if ($j==3) echo '],';
                    else echo ',';
                }
    		?>
    }
});
</script>