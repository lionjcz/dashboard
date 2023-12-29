<?php
echo "cicdtest";
// $url = 'http://localhost:3000/api/images';

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $response = curl_exec($ch);
// curl_close($ch);

// $imageUrls = json_decode($response, true);

// if (is_array($imageUrls)) {
//     foreach ($imageUrls as $imageUrl) {
//         echo "Image URL: {$imageUrl}<br>";
//     }
// } else {
//     echo "Error: Unable to retrieve image URLs or decode JSON.";
// }


// echo "1";
    // echo $_POST;

// $appData = $this->checkPost('checkLogin');
// checkLogin();
// FunctionName();

// function checkLogin()
// {    
//     $appData = checkPost('checkLogin');

//     $account	= strtolower(trim($appData['account']));
//     $password	= trim($appData['password']);


//     // 帳號、密碼空值判斷
//     if (empty($account) || empty($password)) {

//         $resultData['Result_Code'] = '003';
//     } else {
//         $this->load->model('member_model');

//         // 登入檢查
//         $memberData = $this->member_model->appLoginCheck($account,$this->i->o2e($account,$password));

//         if ($memberData) {
//             $resultData['Result_Code']	= '001';
//             $resultData['Data']['m_id']	= $memberData['m_id'];
//             $resultData['Data']['temperature']	= $memberData['temperature'];
//         } else {
//             //帳號或密碼錯誤
//             $resultData['Result_Code'] = '006';
//         }
//     }

//     print_r(json_encode($resultData));
// }

/*
無post資料時, 統一輸出固定的資訊
Tony 20141111
*/
//  function checkPost($api_name){

//     // echo $api_name;
//     // exit;

//     echo $_POST["ActiveData"];



    // if(!$this->input->post()){
    // //無post資料
    //     $resultData['Result_Code']	= '002';
    //     print_r(json_encode($resultData));
    //     exit;
    // } else {
    //     echo "111";
    //     exit;

    //     $appData = $this->input->post("ActiveData",true);
    //     $appData_log = base64_decode($appData);	//寫LOG檔用
    //     $appData = json_decode($appData_log,true);

    //     //寫LOG檔
    //     $this->dolog("==========START==========");
    //     $this->dolog("========".$api_name."=======");
    //     $this->dolog($appData_log);
    //     $this->dolog(time());
    //     $this->dolog("==========END==========");

    //     return $appData;
    // }

// }





?>
