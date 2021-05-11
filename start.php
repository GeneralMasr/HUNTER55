<?php
date_default_timezone_set('Asia/Baghdad');
$config = json_decode(file_get_contents('config.json'),1);
$id = $config['id'];
$token = $config['token'];
$config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
$screen = file_get_contents('screen');
exec('kill -9 ' . file_get_contents($screen . 'pid'));
file_put_contents($screen . 'pid', getmypid());
include 'index.php';
$accounts = json_decode(file_get_contents('accounts.json') , 1);
$cookies = $accounts[$screen]['cookies'];
$useragent = $accounts[$screen]['useragent'];
$users = explode("\n", file_get_contents($screen));
$count = count(explode("\n", file_get_contents($for)));
$uu = explode(':', $screen) [0];
$file = $config['for'];
	$ig = new ig(['account'=>$accounts[$file],'file'=>$file]);
function verfmatch($u,$email){
  usleep(400000);
global $ig;
if(preg_match('/(live|hotmail|outlook)\.(.*)/', $email)){
    $check_mail = inInsta($email);
     if ($check_mail !== false) {
        return "Good";
          }else{
       return "bad";
     }
    }
    
    
    
    
    

     
    
    
    
    
    
  $check_mail = $ig->sign_in_help($email);
if($check_mail->status == "ok"){
 if(strstr($email,"@gmail.com")){
   $ban = check_ban($email);
    if($ban == "Yes"){
  usleep(300000);
  $check_user = $ig->sign_in_help($u);
print_r($check_user);
if($check_user->status == "ok"){
  $restmail = $check_user->contact_point;
$em = verfyRest($email,$restmail);
return $em;
        }
      }
    }else{
       usleep(200000);
  $check_user = $ig->sign_in_help($u);
if($check_user->status == "ok"){
  $restmail = $check_user->contact_point;
$em = verfyRest($email,$restmail);
return $em;
        }
    }
  }else{
   print_r($check_mail);
  }
}
function verfyRest($email,$restmail){
  $ex = explode("@",$email)[0];
  $exx = explode("@",$email)[1];
  $e = explode("@",$restmail)[0];
  $ee = explode("@",$restmail)[1];
if($ex[0] == $e[0] and $ex[-1] == $e[-1] and $exx[0] == $ee[0] and $exx[-1] == $ee[-1]){
  return "Good";
}else{
  return "Bad";
  }
}
$se = 100;
$i = 0;
$count = 0;
$gmail = 0;
$hotmail = 0;
$yahoo = 0;
$mailru = 0;
$aol = 0;
$yandex = 0;
$nott = 0;
$za = 0;
$filter = 0;
$blacklist = 0;
$norest =0;
$true = 0;
$false = 0;
$edit = bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"جاري فحص اليوزرات انتظر 🦁",
    'parse_mode'=>'markdown',
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'عدد اليوزرات المفحوصه🔍: '.$i,'callback_data'=>'fgf']],
                [['text'=>'عدد اليوزرات المتبقيه🔢: '.$count,'callback_data'=>'count']],
                [['text'=>'يوزر يتم فحصه🎲: '.$user,'callback_data'=>'fgdfg']],
                [['text'=>"Gmail: $gmail",'callback_data'=>'dfgfd'],['text'=>"Hotmail: $hotmail",'callback_data'=>'ghj']],
                [['text'=>"Yahoo: $yahoo",'callback_data'=>'gdfgfd'],['text'=>"MailRu: $mailru",'callback_data'=>'fgd']],
                [['text'=>"Aol : $aol",'callback_data'=>'fgjjjvf'],['text'=>"Yandex: $yandex",'callback_data'=>'hshdvs']],
                [['text'=>'ليس بزنس📛: '.$nott,'callback_data'=>'hdhdh']],
                [['text'=>'بزنس✔️: '.$za,'callback_data'=>'jsheil']],
                [['text'=>'فلتر☠️: '.$filter,'callback_data'=>'filter']],
                [['text'=>'قائمة سوداء📬: '.$blacklist,'callback_data'=>'kshsh']],
                [['text'=>'ليس ريست📩: '.$norest,'callback_data'=>'lshsvp']],
                [['text'=>'تم صيده✅: '.$true,'callback_data'=>'gj']],
                [['text'=>'ليس متاح💥: '.$false,'callback_data'=>'dghkf']]
            ]
        ])
]);
$se = 100;
$editAfter = 1;
foreach ($users as $user) {
    $info = getInfo($user, $cookies, $useragent);
    if ($info != false and !is_string($info)) {
        $mail = trim($info['mail']);
        $verfid = array('Truo','False','Unknown');
        $verf = array_rand($verfid,1);
        $usern = $info['user'];
        $e = explode('@', $mail);
               if (preg_match('/(hotmail|outlook|yahoo|Yahoo|yAhoo|aol|aOl|Aol)\.(.*)|(gmail)\.(com)|(mail|yandex|inbox|list)\.(ru)/i', $mail,$m)) {
            echo 'check ' . $mail . PHP_EOL;
            $za +=1;
                    if(checkMail($mail)){
                        $inInsta = inInsta($mail);
                        if ($inInsta !== false) {
                             if($config['filter'] <= $follow){
                                echo "True - $user - " . $mail . "\n";
                                if(strpos($mail, 'gmail.com')){
                                    $gmail += 1;
                                } elseif(strpos($mail, 'aol')){ 
                                	$aol += 1;
                                } elseif(strpos($mail, 'hotmail.') or strpos($mail,'outlook.') or strpos($mail,'live.com')){
                                    $hotmail += 1;
                                } elseif(strpos($mail, 'yahoo')){
                                    $yahoo += 1;
                                } elseif(preg_match('/(mail|bk|yandex|inbox|list)\.(ru)/i', $mail)){
                                    $mailru += 1;
                                }
                                $follow = $info['f'];
                                $following = $info['ff'];
                                $media = $info['m'];
                                bot('sendMessage', ['disable_web_page_preview' => true, 'chat_id' => $id, 'text' => "♻️ *𝙶𝙴𝙽𝙴𝚁𝙰𝙻-𝙼𝙰𝚂𝚁~𝙷𝚄𝙽𝚃𝙴𝚁* ♻️\n━━━━━━━━━━━━━━━\n.🕵🏼.𝚄𝚂𝙴𝚁𝙽𝙰𝙼𝙴 » `$usern`\n.📨.𝙴𝙼𝙰𝙸𝙻 » `$mail`\n.👥.𝙵𝙾𝙻𝙻𝙾𝚆𝙴𝚁𝚂 » $follow\n.🛎️.𝙵𝙾𝙻𝙻𝙾𝚆𝙸𝙽𝙶 » $following\n.📸.𝙿𝙾𝚂𝚃 » $media\n.🕰️.𝚃𝙸𝙼𝙴 𝙶𝚁𝙰𝙿 » " . date('Y/n/j g:i') . "\n" . ".📮.𝚅𝙴𝚁𝙵𝙸𝙳 » $verfid[$verf]\n━━━━━━━━━━━━━━━\n.👨🏼‍💻.𝙱𝚈 » [𝙶𝙴𝙽𝙴𝚁𝙰𝙻-𝙼𝙰𝚂𝚁](t.me/SISSQ)\n.🔥.𝙲𝙷 » [𝙲𝙷𝙰𝙽𝙽𝙴𝙻](t.me/GNRAILMASR)",
                                'parse_mode'=>'markdown',
                                'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>'𝙶𝙴𝙽𝙴𝚁𝙰𝙻-𝙼𝙰𝚂𝚁','url'=>'t.me/SISSQ'],['text'=>'𝙲𝙷𝙰𝙽𝙽𝙴𝙻','url'=>'t.me/GNRAILMASR']],
            ]
         ])
     ]);

                                bot('editMessageReplyMarkup',[
                                    'chat_id'=>$id,
                                    'message_id'=>$edit->result->message_id,
                                    'reply_markup'=>json_encode([
                                        'inline_keyboard'=>[
                                            [['text'=>'عدد اليوزرات المفحوصه🔍: '.$i,'callback_data'=>'fgf']],
                                            [['text'=>'عدد اليوزرات المتبقيه🔢: '.$count,'callback_data'=>'count']],
                                            [['text'=>'يوزر يتم فحصه🎲: '.$user,'callback_data'=>'fgdfg']],
                                            [['text'=>"Gmail: $gmail",'callback_data'=>'dfgfd'],['text'=>"Hotmail: $hotmail",'callback_data'=>'ghj']],
                                            [['text'=>"Yahoo: $yahoo",'callback_data'=>'gdfgfd'],['text'=>"MailRu: $mailru",'callback_data'=>'fgd']],
                                            [['text'=>"Aol : $aol",'callback_data'=>'fgjjjvf'],['text'=>"Yandex: $yandex",'callback_data'=>'hshdvs']],
                                            [['text'=>'ليس بزنس📛: '.$nott,'callback_data'=>'hdhdh']],
                                            [['text'=>'بزنس✔️: '.$za,'callback_data'=>'jjwjx']],
                                            [['text'=>'فلتر☠️: '.$filter,'callback_data'=>'filter']],
                                            [['text'=>'قائمة سوداء📬: '.$blacklist,'callback_data'=>'jsbsjw']],
                                            [['text'=>'ليس ريست📩: '.$norest,'callback_data'=>'lohgp']],
                                            [['text'=>'تم صيده✅: '.$true,'callback_data'=>'gj']],
                                            [['text'=>'ليس متاح💥: '.$false,'callback_data'=>'dghkf']]
                                        ]
                                    ])
                                ]);
                                $true += 1;
                             } else {
                                   $filter += 1;
                                 echo "Filter $mail\n";
                             }
                        } else {
                          $norest += 1;
                          echo "No Rest $mail\n";
                        }
                    } else {
                        $false += 1;
                        echo "Not Vaild 2 - $mail\n";
                    }
        } else {
           $blacklist +=1;
          echo "BlackList - $mail\n";
        }
    } elseif(is_string($info)){
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"الحساب - `$screen`\n تم حظره من *الفحص*.",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                        [['text'=>'نقل اللستة 🔁','callback_data'=>'moveList&'.$screen]],
                        [['text'=>'حذف الحساب 🗑️','callback_data'=>'del&'.$screen]]
                    ]
            ]),
            'parse_mode'=>'markdown'
        ]);
        exit;
    } else {
         $nott += 1;
        echo "Not Bussines - $user\n";
    }
    usleep(800000);
    $i++;
    file_put_contents($screen, str_replace($user, '', file_get_contents($screen)));
    file_put_contents($screen, preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "", file_get_contents($screen)));
    if($i == $editAfter){
        bot('editMessageReplyMarkup',[
            'chat_id'=>$id,
            'message_id'=>$edit->result->message_id,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [['text'=>'عدد اليوزرات المفحوصه🔍: '.$i,'callback_data'=>'fgf']],
                    [['text'=>'عدد اليوزرات المتبقيه🔢: '.$count,'callback_data'=>'count']],
                    [['text'=>'يوزر يتم فحصه🎲: '.$user,'callback_data'=>'fgdfg']],
                    [['text'=>"Gmail: $gmail",'callback_data'=>'dfgfd'],['text'=>"Hotmail: $hotmail",'callback_data'=>'ghj']],
                    [['text'=>"Yahoo: $yahoo",'callback_data'=>'gdfgfd'],['text'=>"MailRu: $mailru",'callback_data'=>'fgd']],
                    [['text'=>"Aol : $aol",'callback_data'=>'fgjjjvf'],['text'=>"Yandex: $yandex",'callback_data'=>'hshdvs']],
                    [['text'=>'ليس بزنس📛: '.$nott,'callback_data'=>'hdhdh']],
                    [['text'=>'بزنس✔️: '.$za,'callback_data'=>'jjwjx']],
                    [['text'=>'فلتر☠️: '.$filter,'callback_data'=>'filter']],
                    [['text'=>'قائمة سوداء📬: '.$blacklist,'callback_data'=>'kjssw']],
                    [['text'=>'ليس ريست📩: '.$akiln,'callback_data'=>'llsbp']],
                    [['text'=>'تم صيده✅: '.$true,'callback_data'=>'gj']],
                    [['text'=>'ليس متاح💥: '.$false,'callback_data'=>'dghkf']]
                ]
            ])
        ]);
        $editAfter += 1;
    }
}
bot('sendMessage', ['chat_id' => $id, 'text' =>"انتهى الفحص : ".explode(':',$screen)[0]]);

