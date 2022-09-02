<?php
ob_start();
define('API_KEY','5215691348:AAHFpOz-VYWPIjAQqO-bOPlNeJ1TQSUxmYQ'); //حط توكن بوتك بدال الاصفار//
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$BOT_Damascus = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BOT_Damascus";
$BOTS_SYR1A = file_get_contents($url); return json_decode($BOTS_SYR1A);}
$Dev = array("1707433366","1456787071");
$Devoffic = array("839738252"); //حط ايديك بدل الاصفار//
$sudo         = 839738252; //حط هنا كمان ايديك// 
$puyy = "AA5YU"; //حط معرفك بدال الافصار بدون@//
@$usernamebot = "Mariamx_bot"; //حط معرف بوتك بدل الاصفار//
$bot_id       = 5215691348; //حط ايدي بوتك بدل الاصفار//
@$channel = "YYFNL"; //حط معرف قناتك بدون@ بدل الاصفار//
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$message_id = $update->callback_query->message->message_id;
@$message = $update->message;
@$message_id = $update->message->message_id;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$edit_chat_id = $update->edited_message->chat->id;
@$edit_from_id = $update->edited_message->message->from->id; 
@$chat_id = $update->message->chat->id; 
@$from_id = $update->message->from->id;
@$caption = $update->message->caption;
@$chatid3=$update->message->chat->id;
@$fromid3=$update->message->from->id;
@$text=$update->message->text;
@$mid=$update->message->message_id;
@$message = $update->message;
@$message_id = $update->message->message_id;
@$text           = $message->text;
@$chat_id     = $message->chat->id;
@$user          = $update->message->from->username;
@$from_id     = $message->from->id;
@$from_user = $message->from->username;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$title =$message->chat->title;
@$rep = $message->reply_to_message;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$biioo = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $biioo['result']['bio'];

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
$admin = "839738252";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$message = $update->message;
$e_id = $update->callback_query->data->data_id;
$rep = $message->message_id ;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$namee = $update->callback_query->from->first_name;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}



function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
	if (mb_strpos($str, $d) !== false) {
		return true;
}
}
}
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$re         = $update->message->reply_to_message;


mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$getCCmember = explode("\n",$CCmember);

if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' || $status == 'administrator' || in_array($from_id,$Devoffic)){

if($re and $text == "رفع مدير"  and !in_array($re_id,$getCCmember)){
file_put_contents("data/member/$chat_id/member.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/member/$chat_id/Cmember.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مدير" and in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مدير"  and in_array($re_id,$getCCmember)){
$str = str_replace($re_id,"",$getCCmember);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmember);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/member/$chat_id/member.txt",$ex);
file_put_contents("data/member/$chat_id/Cmember.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مدير"  and !in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "المدراء" || $text == "قائمه المدراء" and $Cmember != null || $Cmember != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك المدراء عزيزي

$Cmember ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح المدراء" || $text == "مسح قائمه المدراء"){
file_put_contents("data/member/$chat_id/member.txt","");
file_put_contents("data/member/$chat_id/Cmember.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع المدراء",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
mkdir("data/admins");
mkdir("data/admins/$chat_id");

$Cadmins = file_get_contents("data/admins/$chat_id/Cadmins.txt");
$CCadmins = file_get_contents("data/admins/$chat_id/admins.txt");
$useradmin = explode("\n",$CCadmins);

if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' || $status == 'administrator' || in_array($from_id,$Dev) || in_array($from_id,$getCCmember)){

if($re and $text == "رفع ادمن"  and !in_array($re_id,$useradmin)){
file_put_contents("data/admins/$chat_id/admins.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/admins/$chat_id/Cadmins.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع ادمن" and in_array($re_id,$useradmin)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل ادمن"  and in_array($re_id,$useradmin)){
$str = str_replace($re_id,"",$CCadmins);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cadmins);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/admins/$chat_id/admins.txt",$ex);
file_put_contents("data/admins/$chat_id/Cadmins.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$useradmin)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "الادمنية" || $text == "قائمه الادمنية" and $Cadmins != null || $Cadmins != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك الادمنية عزيزي

$Cadmins ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح الادمنية" || $text == "مسح قائمه الادمنية"){
file_put_contents("data/admins/$chat_id/admins.txt","");
file_put_contents("data/admins/$chat_id/Cadmins.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع الادمنية",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
mkdir("data/mmyaz74");
mkdir("data/mmyaz74/$chat_id");

$mmyaz7= file_get_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt");
$mmyaz77 = file_get_contents("data/mmyaz74/$chat_id/mmyaz74.txt");
$mmyaz = explode("\n",$mmyaz77);

if ($tc == 'group' | $tc == 'supergroup'){  
if($status == "creator" || $status == "administrator" ||  in_array($from_id,$Dev)  ||  in_array($from_id,$getCCmember)  ||  in_array($from_id,$useradmin)  ) {

if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مميز 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مميز" and in_array($re_id,$mmyaz)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح عضو مميز مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مميز"  and in_array($re_id,$mmyaz)){
$str = str_replace($re_id,"",$mmyaz77);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmmyaz74);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt",$ex);
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله ليصبح عضو 👶🏻
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مميز"  and !in_array($re_id,$mmyaz)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "المميزين" || $text == "قائمه المميزين" and $mmyaz7!= null || $mmyaz7!= ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🍬¦ اليك المميزين عزيزي

$mmyaz7",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح المميزين" || $text == "مسح قائمه المميزين"){
file_put_contents("data/mmyaz74/$chat_id/mmyaz74.txt","");
file_put_contents("data/mmyaz74/$chat_id/Cmmyaz74.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع المميزين",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
if( $text=="الادمنيه" or $text=="الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
$found = $result[$key]['status'];
if($found == "creator"){
  $owner = $result[$key]['user']['id'];
  $owner2 = $result[$key]['user']['username'];
}
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."√┇"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
	 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مقفول┇المالك  ~
$owner | @$owner2 🙎‍♂
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
👮🏻┇قائمة الادمنية بالمجموعة  ~
$msg
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
$Cadmins
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
'parse_mode'=>"MarkDown",
 ]);
}
}
//link 
if($settings["lock"]["link"] == "مقفول️"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) && !in_array($from_id,$mmyaz) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
}
}
}
if($settings["lock"]["linkr"] == "مقفول️"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) && !in_array($from_id,$mmyaz)  ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
//farse ♥
if($settings["lock"]["farse"] == "مقفول️"){
	if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
$uo=json_decode(file_get_contents("https://api.telegram.org/bot$token/getchat?chat_id=$fromid3"))->result;
$io=$uo->first_name;
$word = json_decode(file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/detect?key=trnsl.1.1.20170725T151635Z.31fe7a5603917164.915fed1f5a9aaebef43860694075516e7af7aa47&text=".urlencode($io)))->lang;
$new = $update->message->new_chat_member; 
if($new and $word !="ar" and $word !="en"){
bot('SendMessage', [
'chat_id'=>$chatid3,
'text'=>"⚠️┇ ممنوع دخول الفارسية هنا  [$io](tg://user?id=$fromid3)"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
bot('kickChatMember',[
'chat_id'=>$chatid3,
'user_id'=>$fromid3,
]);
}
}
}
// lock photo
if($settings["lock"]["photo"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->photo){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
// lock photo r
if($settings["lock"]["photor"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->photo){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
// gif
if($settings["lock"]["gif"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
//gif r
if($settings["lock"]["gifr"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
}
}
}
// document
if($settings["lock"]["document"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->document){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}

// video
if($settings["lock"]["video"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->video){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
  }
}
}
// video r
if($settings["lock"]["videor"] == "مقفول️"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
if ($update->message->video){  
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
  }
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "مقفول️"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $getCCmember && $edit_for_id != $useradmin && $edit_for_id != $mmyaz){
if ($update->edited_message->text){  
bot('deletemessage',[
'chat_id'=>$chat_edit_id,
'message_id'=>$message_edit_id
]);
}
}
}
// contact
if ($settings["lock"]["contact"] == "مقفول️"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}

// tag
if ($settings["lock"]["tag"] == "مقفول️"){
if (strstr($text,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// username 
if ($settings["lock"]["username"] == "مقفول️"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// audio
if ($settings["lock"]["audio"] == "مقفول️"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "مقفول️"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz) ){ 
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if($settings["lock"]["bot"] == "مقفول️"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}
}
// kick bots and user
if($settings["lock"]["botk"] == "مقفول️"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker
if ($settings["lock"]["sticker"] == "مقفول️"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول️"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}

//forward restrict
if ($settings["lock"]["forwardr"] == "مقفول️"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
 }
}
}
}


// fosh 
if ($settings["lock"]["fosh"] == "مقفول️"){
if (strstr($text,"كس") == true  or strstr($text,"ذب") == true or strstr($text,"اير") == true  or  strstr($text,"شرموطة") == true   or strstr($text,"الاسد") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+1800,
]);
}
}
}
}
//arabic
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
//English
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
//iduser



// muteall
if ($settings["lock"]["mute_all"] == "مقفول️"){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
//tsmet ♥
if ($settings["lock"]["tsmet"] == "مقفول️"){
if($update->message){
if ( $status != 'creator' &&  !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
//markdown
if ($settings["lock"]["markdowns"] == "مقفول️"){
if($update->message->entities){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
// muteall time
if ($settings["lock"]["mute_all_time"] == "مقفول️"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
else
{
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول️"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول️"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول️"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول️"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) && !in_array($from_id,$mmyaz)) {
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
 }
}
}
}
//iduser
if(in_array($from_id,$Devoffic)){
$info = "مطور السورس";
}elseif(in_array($from_id,$Dev) ){
$info = "مطور اساسي";
}elseif($status == "creator"){
$info = "مالك أساسي";
}elseif($status == "administrator"){
$info = "مشرف المجموعة";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في البوت";
}elseif(in_array($from_id,$manger) ){
$info = "مدير البوت";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز️";
}elseif($status == "member" ){
$info = "فقط عضو️";
}
$msgs = json_decode(file_get_contents('msgs.json'),true);
$rasael = $msgs['msgs'][$chat_id][$from_id];
$game = json_decode(file_get_contents('game.json'),true);
$coinat = $game['game'][$chat_id][$from_id];
if(!$coinat){
$coinat == "0";
}
if($rasael >= 3000){
$rutbat = "اقوى تفاعل";
}if($rasael > 2500){
$rutbat = "تفاعل نار";
}if($rasael > 2000){
$rutbat = "قمه التفاعل";
}if($rasael > 1500){
$rutbat = "متفاعل";
}if($rasael > 800){
$rutbat = "متوسط";
}if($rasael > 600){
$rutbat = " ضعيف";
}if($rasael < 300){
$rutbat = "غير متفاعل ";
}
$Free1 = array('ممكن اعاكس ❤️😂','ممكن اتفرج 🌚💋','القمر ملوش قيمه قصادك 🌚🖤','خليني احبك🙈❤️','ممكن خاص 🌚😹','لاخلقه ولا اخلاق☹️😹','نو كومنت 😹😹','الله يحفظك ياقمر','شكلك زربه 😹😹','ياحلو منين الله جابك🙈❤️','خليني ابوسك 🙈❤️','طيح الله حظك وحظ ابوك😹','مارتاحلك😐','ااااخ قلبي مش مستحمل الحلاوه','ادمن وقف الايدي بعد القمره ده 😫❤️','خلصو الحلوات اجو الحلوين');
$Free2 = array_rand($Free1,1);
$Data_gr = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$hloobot"));
$title =$Data_gr->result->title;
$username = $message->from->username;
if($username){$user = "$username";}else{$user = "مفيش معرف لبروفايلك ...!⁩";}
if($text == "ايدي" or $text == "معلوماتي" or $text == "id" or $text == "ID"){
 $result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
  $file_id=$result["result"]["photos"][0][0]["file_id"];
  $count=$result["result"]["total_count"];
  if($count == "0"){
bot('sendmessage',[
"chat_id"=>$chat_id,
"text"=>"
𖡋 مفيش صوره في بروفايلك ...!
𖡋 $Free1[$Free2]
𖡋 𝚄𝚂𝙴𝚁 ⌯  @$username
𖡋 𝙼𝚂𝙶 ⌯  $rasael
𖡋 𝚂𝚃𝙰 ⌯  $info
𖡋 𝙸𝙳 ⌯  $from_id
𖡋 𝙸𝙽𝚃 ⌯  $rutbat
"
]);
  }else{
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"
𖡋 $Free1[$Free2]
𖡋 𝚄𝚂𝙴𝚁 ⌯  @$username
𖡋 𝙼𝚂𝙶 ⌯  $rasael
𖡋 𝚂𝚃𝙰 ⌯  $info
𖡋 𝙸𝙳 ⌯  $from_id
𖡋 𝙸𝙽𝚃 ⌯  $rutbat

",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
}}

if($settings["information"]["add"] == "مقفول️") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

if($settings["information"]["add"] == "مقفول️"){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
if($youadding < $setadd){
if($addtext == false){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┊عزيزي العضو [$first_name](https://t.me/$username)
🚸┊لتستطيع التكلم اضف $setadd من الاعضاء
",
]);
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
    bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$msg
]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
  }
  else
  {
      bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
 ]);
   }
}
  }
}
}
//  game
if($settings["lock"]["game"] == "مقفول️"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول️"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$getCCmember) && !in_array($from_id,$useradmin) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
//spam
 date_default_timezone_set('Asia/Damascus');
$as = date('i')+15;
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
  if(strpos($text,"وضع تكرار") !== false){
mkdir("data/$chat_id");
mkdir("spam");
$spamx = str_replace("وضع تكرار ","",$text);
if(is_numeric($spamx)){
 if($spamx > 0){
file_put_contents("data/$chat_id/spamxe.txt",$spamx);
file_put_contents("spam/tim.txt",$as); 
var_dump(bot('sendMessage',[ 
'chat_id' => $chat_id,
'text' =>"
💬┇بواسطه ~⪼ [$first_name](t.me/$username)
☑┇تم وضع تكرار $spamx",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id' => $message->message_id,
]));
}}}}
$weplus = 1 ;
$timex = date("Y-m-d-h-i-A");
$timex = str_replace("am", "", $timex);
@$NBots = file_get_contents("spam/$from_id/$timex.txt");
$timex_spam = $NBots + 1;
mkdir("spam/$from_id");
file_put_contents("spam/$from_id/$timex.txt",$timex_spam);
$NBots2 = file_get_contents("spam/$from_id/$timex.txt");
$NBX = file_get_contents("data/$chat_id/spamxe.txt");
if($NBots2 >=$NBX) {
if ($settings["lock"]["spam"] == "مقفول️"){
var_dump(bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
'until_date'=>time()+$weplus*1600,
]));
}}
$timer = file_get_contents("spam/tim.txt"); 
if($message and $timer<date('h')){
$dir = "spam";
$all = scandir($dir);
if($all != null){
   foreach($all as $file){
      if($file == '.' or $file == '..') continue;
      if(is_file($dir.'/'.$file)){
         unlink($dir.'/'.$file);
      } elseif(is_dir($dir.'/'.$file)){
          $sc = scandir($dir.'/'.$file);
foreach($sc as $sn){
             if($sn == '.' or $sn == '..') continue;
             unlink($dir.'/'.$file.'/'.$sn);
             rmdir($dir.'/'.$file);
          }
      } 
   }
} else {
   die('not found dir');
}
rmdir($dir);
mkdir($dir);
file_put_contents("spam/tim.txt",$as); 
}
// filter
if($text=="/filterlist" or $text=="filterlist" or $text=="قائمة الفلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⚠┊قائمة الكلمات الممنوعه ،
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ 
|🔘|~⪼($result)
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "/filter ") !== false or strpos($text , "فلترة كلمة") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','فلترة كلمة'],'',$text);
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
☑┇تم اضافتها لقائمه المنع
🔘┇{$text}
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
elseif (strpos($text , "/unfilter " ) !== false or strpos($text , "الغاء فلترة") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$text = str_replace(['/unfilter ','الغاء فلترة'],'',$text);
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
☑┇تم ازالتها من لقائمه المنع
🔘┇{$text}
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text== "/clean filterlist" or $text=="clean filterlist" or $text=="مسح الفلاتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇تم مسح قائمه المنع
",
     'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
// setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text");
if($plus < 500) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقفول┇تم وضع القوانين للمجموعه",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❕┇لا تستطيع وضع اكثر من 500 حرف
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

//♥

// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
مقفول┇تم وضع ترحيب للمجموعه
",'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❕┇لا تستطيع وضع اكثر من 200 حرف",
  'reply_to_message_id'=>$message_id,
 
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💯 لقد تم حظرك من البوت ♨️",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
	bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
  ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text != "🔙 رجوع") {	
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){  
if( $status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشىء](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
}
}
if($text == "تفعيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تفعيل الاعضاء" ){
if($tc == 'group' | $tc == 'supergroup'){
if( in_array($from_id,$useradmin) and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاعضاء
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'parse_mode'=>"markdown"
,	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
??🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$getCCmember) and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( in_array($from_id,$useradmin) and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاعضاء
✓
", 'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
if($text == "تعطيل الاعضاء" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
elseif ( strpos($text , 'وضع اعضاء') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['وضع اعضاء'],'',$text);
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg://user?id=$from_id) 👷🏽
📡¦ تم وضع العدد *$code*
✓
",
'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
} 
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⁉️┇يجب ان يكون العدد بين 1 إلى 20",
'reply_to_message_id'=>$message_id,
]);  
}
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text=="قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط" or $text=="قفل روابط"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط" or $text=="فتح روابط"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات" or $text=="قفل المعرف"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المعرفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات" or $text=="فتح المعرف"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التعديل" or $text=="قفل تعديل"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التعديل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التعديل" or $text=="فتح تعديل"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو" or $text=="قفل فيديو"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو" or $text=="فتح فيديو"){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الريكوردات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الريكوردات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الريكوردات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الريكوردات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الريكوردات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الريكوردات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الريكوردات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الريكوردات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الريكوردات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الريكوردات" ){if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الريكوردات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الريكوردات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الريكوردات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الصور" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الصور" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الردود" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الردود" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الردود" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الردود
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الردود" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الملصقات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملصقات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الملصقات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملصقات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملصقات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المتحركه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المتحركه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الدردشه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الدردشه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الدردشه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الدردشه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الدردشه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التاك" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التاك" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التاك" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التاك
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التاك" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل البوتات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح البوتات بالطرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الكلايش" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكلايش" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الكلايش" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكلايش
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكلايش" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التكرار" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التكرار" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التكرار" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التكرار
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["spam"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التكرار" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التوجيه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الماركدوان" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الماركدوان" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الماركدوان" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الماركدوان
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdowns"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الماركدوان" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الجهات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الجهات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الجهات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الجهات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الجهات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المتحركه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gifr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المتحركه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الصور بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الصور بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الصور بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الفيديو بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الفيديو بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["videor"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الفيديو بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الترحيب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الترحيب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الترحيب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الترحيب
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الترحيب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل االصور
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الرد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الرد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الانجليزية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الانجليزية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الانجليزية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الانجليزية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الانجليزية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل العربية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل العربية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح العربية" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح العربية
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح العربية" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل المواقع" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المواقع" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المواقع" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح المواقع
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المواقع" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الملفات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الملفات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الملفات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الملفات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الملفات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الموسيقى" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الموسيقى" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الموسيقى" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الموسيقى
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الموسيقى" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الاشعارات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الاشعارات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الاشعارات" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الاشعارات
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الاشعارات" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل بصمة الفيديو" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح بصمة الفيديو
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح بصمة الفيديو" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تعطيل الالعاب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الالعاب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الالعاب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الالعاب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الالعاب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الالعاب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "تفعيل الالعاب" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الالعاب" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الالعاب" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الالعاب" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الالعاب" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل العاب البوت
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الالعاب" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text == "تاك الكل" or $text == "تاك للكل" or $text == "تاك للادمنية" or $text == "تاك للادمنيه"){
$up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
   $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['username']);
$msg = $msg.""."➺"."[@$innames]";
}
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• تعالو
@[".$result[$key]['user']['username']."]
$msg
",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
 ]);
 }
if($text== "قفل الكل" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الكل" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول️";
	$settings["lock"]["username"]="مقفول️";
	$settings["lock"]["bot"]="مقفول️";
	$settings["lock"]["forward"]="مقفول️";
	$settings["lock"]["tgservices"]="مقفول️";
	$settings["lock"]["contact"]="مقفول️";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);

}
}
}
if($text== "قفل الكل" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الكل" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);

$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الكل" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الكل
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
	$settings["lock"]["username"]="مفتوح";
	$settings["lock"]["bot"]="مفتوح";
	$settings["lock"]["forward"]="مفتوح";
	$settings["lock"]["tgservices"]="مفتوح";
	$settings["lock"]["contact"]="مفتوح";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);}
}
}
if($text== "فتح الكل" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ عذراً ، هذا الأمر يخص {الادمن,المدير,المنشئ,المطور} فقط
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if( $text == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
$add = $settings["information"]["added"];
if ($add == true){
  bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
     ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg://user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم تقييد آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ مينفعش تقييد المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
 ]);
}
}
}
if ( strpos($text , "تقييد مدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
$we = str_replace(['تقييد مدة'],'',$text);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg://user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم تقييد آلعضـو بنجآح  لمدة $we دقيقة
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
     ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⇜ حدود التقيد ، لازم تكون مابين [1-1000]
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"⇜ مينفعش ، تقييد المنشئ , الادمن , المطور",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
if( $text == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
     ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg://user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم الغاء تقييد آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if( $text == "المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg://user?id=$from_id) 👷🏽
📡¦ المقيدين
$result
✓
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text == "مسح المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
     ]);
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
🙋🏼‍♂️¦ أهلا عزيزي [$first_name](tg://user?id=$from_id) 👷🏽
📡¦ تم مسح المقيدين
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
if( $rt && $text=="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
 bot('pinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
  ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"⇜ تم ، ثبتلك الرساله ياعيني ✅",
'reply_to_message_id'=>$message_id,
 ]);
 }
}
if(  $text=="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
 bot('unpinChatMessage',[
'chat_id'=>$chat_id,
'message_id'=>$replyid
  ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌¦ تم الغاء تثبيت الرساله 
✓",
'reply_to_message_id'=>$message_id,
 ]);
 }
}
if ( strpos($text , 'وضع قوانين') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['وضع قوانين'],'',$text);
$plus = mb_strlen("$code");
if($plus < 600) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"مقفول┇تم وضع القوانين للمجموعه",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⇜ مينفعش ، تحط اكتر من 600 حرف",
  'reply_to_message_id'=>$message_id,
 ]);
}
}
}
}
if( $text=="القوانين"){
if ($tc == 'group' | $tc == 'supergroup'){  
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text",'parse_mode'=>"markdown",'disable_web_page_preview'=>true, 
	 'reply_to_message_id'=>$message_id,
   ]);
   }   
else
{
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$text",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 
	 'reply_to_message_id'=>$message_id,
   ]);
}
}
if (strpos($text , "وضع ترحيب ") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['وضع ترحيب'],'',$text);
$plus = mb_strlen("$we");
if($plus < 600) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇تم وضع ترحيب للمجموعة
$we
",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

if( $rt && $text== "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
bot('KickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
  ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg://user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم حـظـر آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
   ]);
   } 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ مينفعش حظر المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 if( $rt && $text== "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id
  ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو »  [$re_name](tg://user?id=$re_id)
🎫¦ الايدي » {`$from_id`}
🛠¦ تم الغاء حـظـر آلعضـو بنجآح 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
   ]);
   } 
else	
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ مينفعش حظر المنشئ , الادمن , المطور
🛠",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
}
 if( $rt && $text == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$re_msgid
]);
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
 }
}
if (  strpos($text , 'حذف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
$num = str_replace(['/rmsg ','حذف'],'',$text);
if ($num <= 100 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
          ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
⛑¦ تـم مسح ~⪼ { *$num* } من الرسائل  
✓
",'parse_mode'=>"markdown",
   ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⇜ مقدرش ، احذف فوق ال100 رساله
",
   ]);
}
}
}
if( $text=="الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
⇜ رابط المجموعة ياعمري
$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
⇜ رابط المجموعة ياعمري
$getlinkde
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }
 if( $text=="تحذير" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "بالتقييد"){
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
 }
else
{
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
     ]);
	 	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 }
else
{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️┇خطأ لا يمكن تحذير الادمن  , المدير  , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if($text=="مسح التحذير" && $rt ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم مسح تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 }
}
}
if ( strpos($text , 'وضع تحذير') !== false  ) {
$newdec = str_replace(['وضع تحذير'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 👤┇تم تعيين عدد التحذيرات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⇜ مينفعش تحط اكتر من 20 تحذير
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تحذيراتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تحذيراتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }

elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text

",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;

mkdir("alhospi");

$message_id = $message->message_id;
$gp_get = file_get_contents("alhospi/groups.txt");
$groups = explode("\n", $gp_get);
$Tt_lz0 = file_get_contents("alhospi/Tt_lz.txt");
$pirvate = explode("\n",file_get_contents("alhospi/pirvate.txt"));
$forward = $update->message->forward_from;
$Tt_lz = count($pirvate)-1;
$YYFNL = count($groups)-1;

if($text == "اذاعه عام بالتوجيه 📣" and $from_id == $sudo){
    file_put_contents("alhospi/Tt_lz.txt","YYFNL");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور قم بتوجية رسالتك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if($message and $Tt_lz0 == "YYFNL" and $from_id == $sudo){
for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
'chat_id'=>$groups[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
'chat_id'=>$pirvate[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
 unlink("alhospi/Tt_lz.txt");
} 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور تم ارسال رسالتك الى $Tt_lz عضو و $YYFNL من مجموعات البوت",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
} 
if($text and $type == 'private' and !in_array($from_id, $pirvate)){
file_put_contents("alhospi/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("alhospi/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص 👤" and $from_id == $sudo){
    file_put_contents("alhospi/Tt_lz.txt","Tt_lz");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور قم بارسال رسالتك ملاحضة يمكنك استعمال الماركدوان",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id
]);
}
if($message and $Tt_lz0 == "Tt_lz" and $from_id == $sudo){
for ($i=0; $i<count($pirvate); $i++) { 
bot('sendMessage',[
'chat_id'=>$pirvate[$i],
'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("alhospi/Tt_lz.txt","ismail");
} 
$Tt_lz = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور تم ارسال رسالتك الى $Tt_lz عضو",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if ($text == "اذاعه عام 📢" and $from_id == $sudo){
file_put_contents("alhospi/Tt_lz.txt","Tt_lz1");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور قم بارسال رسالتك ملاحضة يمكنك استعمال الماركدوان",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if($message and $Tt_lz0 == "Tt_lz1" and $from_id == $sudo){
for ($i=0; $i<count($groups); $i++) { 
bot('sendMessage',[
'chat_id'=>$groups[$i],
'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
bot('sendMessage',[
'chat_id'=>$pirvate[$i],
'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("alhospi/Tt_lz.txt");
} 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور تم ارسال رسالتك الى $Tt_lz عضو و $YYFNL من مجموعات البوت",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id
]);
}
if($text == "📛 اذاعة خاص بالتوجية 📛" and $from_id == $sudo){
file_put_contents("alhospi/Tt_lz.txt","YYFNL0");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور قم بتوجية رسالتك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if($message and $Tt_lz0 == "YYFNL0" and $from_id == $sudo){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
'chat_id'=>$pirvate[$i],
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
unlink("alhospi/Tt_lz.txt");
} 
$Tt_lz = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور تم توجية رسالتك الى $Tt_lz عضو بنجاح",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if($text == "الاحصائيات 📈" and $from_id == $sudo){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 📈 

👥¦ عدد المجموعات المفعله : $YYFNL
👤¦ عدد المشتركين في البوت : $Tt_lz
📡",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
]);
}
if($text =="بوت غادر" && in_array($from_id,$Dev)){
$send = file_get_contents("data/add.json"); $send = str_replace($chat_id, " ", $send); $send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send); file_put_contents('data/add.json', $send); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"⇜ يلا سلام 💔", 
  'reply_to_message_id'=>$message_id,
]);  
bot('leaveChat',[ 
'chat_id'=>$chat_id, 
]); 
} 
if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "اشتي امسح حسابي" or $text == "اشتي احذف حسابي" or $text == "اشتي رابط الحذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
⌯ رابط حذف اك التيلي ↯
⌯ فكر كويس عشان متندمش
⌯ https://telegram.org/deactivate
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){

    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
🗯¦ تم آرسـآل رسـآلتگ آلى آلمـطـور
📬¦ سـآرد عليگ في آقرب وقت
{ @AA5YU }

🏌 
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'','url'=>'']],
               ]
        ])
    ]);
}
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'','url'=>'']],
               ]
        ])
    ]);
}
}
}
if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
}
if($text =="تعطيل التواصل ✖️" ){
if (in_array($from_id,$Dev)){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي المطور 👨🏻‍✈️
📡¦ تم تعطيل التواصل بنجاح
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}
}
if($text =="تفعيل التواصل 🔛" ){
if (in_array($from_id,$Dev)){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي المطور 👨🏻‍✈️
📡¦ تم تفعيل التواصل بنجاح
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
date_default_timezone_set('Africa/Egypt');
if($text == "الوقت" or $text == "التاريخ"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👁‍🗨✣ البلد : مصر \n" . "  
📊✣ السنة : " . date("Y") . "\n" . "  
🗓✣ الشهر : " . date("n") . "\n" . "  
🧮✣ اليوم :" . date("j") . "\n" . "  
⏰✣ الساعه :" . date('g:i') . "\n" . "  
┉ ┉ ┉ ┉ ┉ ┉ ┉  
📡┇Ch ~⪼ @YYFNL",
'reply_to_message_id'=>$message->message_id
]);
}
$Tt_lz077 = explode('قولي',$text);
if($Tt_lz077){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$Tt_lz077[1],
]);
}
$ue = $message->reply_to_message; 
$uee = $ue->message_id;
$UEE_E = explode('قوليله',$text);
if($UEE_E){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$UEE_E[1],
'reply_to_message_id'=>$uee,
]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
file_get_contents("data/$chat_id/gamess.php");
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));
}
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);
$fast = array('• اسرع واحد يرسل » { الفتئ }','• اسرع واحد يرسل » { محمد }','• اسرع واحد يرسل » { قناة }','• اسرع واحد يرسل » { بوت روكي }','• اسرع واحد يرسل » { رمضان }','• اسرع واحد يرسل » { تيم الحوشبي }','• اسرع واحد يرسل » { الحوشبي }','• اسرع واحد يرسل » { تلفون }','• اسرع واحد يرسل » { مطبخ }','• اسرع واحد يرسل » { اليمن }','• اسرع واحد يرسل » { سوريا }','• اسرع واحد يرسل » { العراق }','• اسرع واحد يرسل » { السعوديه }','• اسرع واحد يرسل » { مصر }','• اسرع واحد يرسل » { السودان }');
$faster = array_rand($fast, 1);
$mthal = array('• اكمل المثل التالي ؛👇
• { لكل حالة مقاله ولكل .... برع } •','• اكمل المثل التالي ؛👇
• { عادت .... الى عادتها القديمه } •','• اكمل الحكمة التاليه ؛👇
• { من .... العلى سهر الليالي } •','• اكمل المثل التالي ؛👇
• { مخرب .... الف عمار } •','• اكمل المثل التالي ؛👇
• { من .... لقي } •','• اكمل المثل التالي ؛👇
• { ادخلها من ..... واخرجها من الثانيه } •','• اكمل المثل التالي ؛👇
• { ادق من خيط .... } •','• اكمل المثل التالي ؛👇
• { اذا التقت .... هانت الحقوق } •','•  اكمل المثل التالي ؛👇
• { كل .... فيه خير } •',' • اكمل الجمله التالي ؛👇
• { كما تدين .... } •',' • اكمل الجمله التالي ؛👇
• { الصميل خرج من .... } •',' • اكمل المثل التالي ؛👇
• { اللي مايعرف .... يشويه } •',' • اكمل المثل التالي ؛👇
• { الهربات كثير و ..... وحده } •',' • اكمل المثل التالي ؛👇
• { القبيلي .... نفسه } •'
);
$qui1 = array('•| سؤال :/ ماهو اسرع المخلوقات البحريه على الاطلاق؟!','•| سؤال :/ ماهي اقوى انواع الحجارة؟!','•| سؤال :/ ماهي السورة التي ذكر فيها بالعوض؟!','•| سؤال :/ ماهي اول عمله اسلاميه؟!','•| سؤال :/ ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','•| سؤال :/ ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','•| سؤال :/ ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','•| سؤال :/ من هو مؤسس علم الجبر؟!','•| سؤال :/ من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
• ماعكس هاذه الكلمه •{ جاوع }•','• ماعكس هاذه الكلمه •{ فارغ }•','• ماعكس هاذه الكلمه •{ سمين }•','• ماعكس هاذه الكلمه •{ بخيل }•','
• ماعكس هاذه الكلمه •{ شجاع }•','
• ماعكس هاذه الكلمه •{ الخوف }•','
• ماعكس هاذه الكلمه •{ عاقل }•','
• ماعكس هاذه الكلمه •{ كن }•','
• ماعكس هاذه الكلمه •{ الذهاب }•','
• ماعكس هاذه الكلمه •{ العودة }•','
• ماعكس هاذه الكلمه •{ مطفئه }•','
• ماعكس هاذه الكلمه •{ الليل }•','
• ماعكس هاذه الكلمه •{ مضلم }•','
• ماعكس هاذه الكلمه •{ حالي }•'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
• ارسل المختلف من الايموجي 👇
{ 😫😫😫😫😩😫😫😫 }','
• ارسل المختلف من الايموجي 👇
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
• ارسل المختلف من الايموجي 👇
{ 🧝‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
• ارسل المختلف من الايموجي 👇
{ 😰😰😰😰😥😰😰😰 }','
• ارسل المختلف من الايموجي 👇
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
• ارسل المختلف من الايموجي 👇
{ 👨‍👦👨‍👧👨‍👦👨‍??👨‍👦👨‍👦👨‍??👨‍👦 }','
• ارسل المختلف من الايموجي 👇
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
• ارسل المختلف من الايموجي 👇
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
• مامعنى هاذه الكلمه •{ فحط }•','• مامعنى هاذه الكلمه •{ ذهب }•','• مامعنى هاذه الكلمه •{ عاد }•','
• مامعنى هاذه الكلمه •{ يلفظ }•','
• مامعنى هاذه الكلمه •{ خروج }•','
• مامعنى هاذه الكلمه •{ يراعي }•','
• مامعنى هاذه الكلمه •{ ينتظر }•','
• مامعنى هاذه الكلمه •{ مؤمن }•','
• مامعنى هاذه الكلمه •{ مسلم }•','
• مامعنى هاذه الكلمه •{ بيت }•','
• مامعنى هاذه الكلمه •{ محافظة }•','
• مامعنى هاذه الكلمه •{ دولة }•');
$ras = array('113+133-2=??','876+11-9=??','197×2-190=??','44-15+15=??','13+12-13-1+4=??','900000+2-900000=??','5322+1-1=??','21+25-13=??','909+75-5=??','44-1+11=??','532+256=??','6321+4667-10000=??');
$rass = array_rand($ras, 1);
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if(in_array($chat_id,$game1) and $text == '244' or $text == '878'  or $text == '204'  or $text == '44'  or $text == '15'  or $text == '2' or  $text == '5322' or $text == '33' or $text == '979' or $text == '34' or $text == '788' or $text == '988'){
if($level == "gamere"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="رياضيات" or $text =="الرياضيات"){
file_put_contents("game/$chat_id/game.txt","gamere");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ras[$rass],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gamees");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);
}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == '🧝‍♀' or $text == '👩‍❤️‍💋‍👩'  or $text == '😩'  or $text == "🧡" or $text == " ‍‍‍👨‍👦" or $text == '💓'  or $text == '🤘'  or $text == '👨' or  $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'  or $text == 'منزل'  or $text == 'ينتظر'  or $text == 'يراعي'  or $text == 'مؤمن' or  $text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gamees"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'  or $text == 'مليان'  or $text == 'نحيف'  or $text == 'سخي'  or $text == 'خائف' or  $text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'  or $text == 'دقة'  or $text == 'حليمه'  or $text == 'حليمة'  or $text == 'طلب' or  $text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'  or $text == 'سمك التونه'  or $text == 'سمك التونة'  or $text == 'الالماس'  or $text == 'البقره' or  $text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'الحوشبي' or $text == 'الفتئ'  or $text == 'اليمن'  or $text == 'مصر'  or $text == 'السودان'  or $text == 'سوريا' or  $text == 'العراق' or $text == 'رمضان' or $text == 'تيم الحوشبي' or $text == 'تلفون' or $text == 'بوت روكي' or $text == 'قناة' or $text == 'محمد' or $text == 'مطبخ'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','??','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','??','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
file_get_contents("data/$chat_id/gamess.php");
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يبعت ديهہٓ ››`$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*📮¦ عدد النقود التي ربحتها هي » { ".$game['game'][$chat_id][$from_id]." }*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*💬¦ ليس لديك نقود ،
📬¦ للحصول ؏ النقود ،
📮¦ ارسل الالعاب وابدأ اللعب !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  >= 19 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 20 } من نقودك ،📨¦ وتم اضافة » { 200 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 49 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 50 } من نقودك ،📨¦ وتم اضافة » { 600 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+600);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-50);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 99 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 100 } من نقودك ،📨¦ وتم اضافة » { 1000 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*  💬 ❉ رسائلك »  { ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 19){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*⚜¦ لايمكنني بيع نقودك  ،
❗️¦ يجب ان تكون نقودك 20 فما فوق !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
$oopp = file_get_contents("sett.txt");
$n = file_get_contents("seto.txt");
if($status == "craetor" or in_array($from_id,$Dev)){
if(strpos($text, "اضف نقاط ") !== false){
$an = str_replace("اضف نقاط ", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","nnam");
file_put_contents("seto.txt","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد النقاط الان ✓
• سيتم ارسالها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);
}
}
}
if($text && $oopp =="nnam"){
if($status == "craetor" or in_array($from_id,$Dev)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة نقاط { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("sett.txt","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('game.json', json_encode($game));
}
}
}
if($status == "craetor" or in_array($from_id,$Dev)){
if(strpos($text, "اضف رسائل ") !== false){
$an = str_replace("اضف رسائل ", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","naam");
file_put_contents("seto.txt","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد الرسائل الان ✓
• سيتم اضافتها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);
}
}
}
if($status == "craetor" or in_array($from_id,$Dev)){
if($text && $oopp =="naam"){
if($tc == "supergroup"){
file_put_contents("sett.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة عدد الرسائل { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$n] = ($msgs['msgs'][$chat_id][$n]+$text);
file_put_contents('msgs.json', json_encode($msgs));
}
}
}
if($status == "craetor" or in_array($from_id,$Dev)){
if(strpos($text, "اضف مجوهرات") !== false){
$an = str_replace("اضف مجوهرات", "", $text);
if($tc == "supergroup"){
file_put_contents("sett.txt","nammm");
file_put_contents("seto.txt","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال عدد النقاط الان ✓
• سيتم ارسالها الى { $an }
",
 'reply_to_message_id'=>$message_id
,]);
}
}
}
if($text && $oopp =="nammm"){
if($status == "craetor" or in_array($from_id,$Dev)){
if($tc == "supergroup"){
file_put_contents("sett.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
🚸✣ تم اضافة نقاط { $text } ✓
• لصاحب الحساب » $n
",
 'reply_to_message_id'=>$message_id
,]);
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('game.json', json_encode($game));
}
}
}
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📌✣ تم مسح { ".$msgs['msgs'][$chat_id][$from_id]." } من رسائلك ✓*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text =="تفعيل الالعاب" or $text =="تفعيل الألعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 ]);
file_put_contents("data/$chat_id/gamess.php","مفتوح");
}
}
if($text =="تعطيل الالعاب" or $text =="تعطيل الألعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 ]);
file_put_contents("data/$chat_id/gamess.php","مقفول");
}
}
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
☤ تفعيل الالعاب 
☤ تعطيل الالعاب 
    ╼╾
✽ الاسرع
✽ معاني
✽ ترتيب
✽ اسئله
✽ امثله
✽ المختلف
✽ سمايلات
✽ تخمين
✽ العكس
✽ رياضيات
✽ حجره ↢ ورقه ↢ مقص
╼╾
❖ بيع نقاطي + العدد ↼ للأستبدال
	",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN",
]);
}
  elseif(  $text == 'تعطيل' ){
  if (in_array($from_id,$Dev)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
🌿┇أهلا عزيزي المطور 👮‍♀
🌿┇تم تعطيل بأمر منك 
@$puyy
✓
",
'reply_to_message_id'=>$message_id,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
  elseif ( strpos($text , "وضع كلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$num = str_replace(['وضع كلايش '],'',$text);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
		  bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        💬┇بواسطه ~⪼ [$first_name](t.me/$username)
☑┇تم وضع عدد الكلايش $startlock
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}

}
}
  elseif($text=="الحماية" or $text=="الاعدادات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
$locklink = $settings["lock"]["link"];
$linkr = $settings["lock"]["linkr"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$en = $settings["lock"]["en"];
$ar = $settings["lock"]["ar"];
$spam = $settings["lock"]["spam"];
$rdodsg = $settings["lock"]["rdodsg"];
$photor = $settings["lock"]["photor"];
$markdowns = $settings["lock"]["markdowns"];
$farse = $settings["lock"]["farse"];
$tsmet = $settings["lock"]["tsmet"];
$lockbots = $settings["lock"]["bot"];
$lockbotsk = $settings["lock"]["botk"];
$lockforward = $settings["lock"]["forward"];
$lockforwardk = $settings["lock"]["forwardr"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$iduser = $settings["lock"]["iduser"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$gifr = $settings["lock"]["gifr"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$videor = $settings["lock"]["videor"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("| فعال |","","⭕️اعدادات المجموعة
➖
👮🏾¦ اعدادات المجموعه : 

#️⃣¦ التاك » { $locktag }
©¦ المعرفات » { $lockusername }
📝¦ التعديل » { $lockedit }
🔗¦ الروابط » { $locklink }
📹¦ المتحركه » { $lockgif }
📷¦ الصور » { $lockphoto }
🆔¦ الايدي » { $iduser }
💱¦ التكرار » { $spam }
🔊¦ الموسيقى » { $lockaudio }
🔈¦ البصمة » { $lockvoice }
📑¦ الكلايش » { $lockcharacter }
🕹¦ الالعاب » { $lockgame }
🗂 العاب البوت {  $lockgamess }
🔂¦ التوجيه » { $lockforward }
®¦ السيئات » { $lockfosh }
↩️¦ الرد » { $lockreply }
👤¦ الاشعارات » { $locktg }
📽¦ بصمة الفيديو » { $lockvideo_note }
🚩¦ الموقع » { $locklocation }
👁‍🗨¦ الجهات » { $lockcontact }
⚜️¦ الماركدوان » { $markdowns }
🔖¦ الردود { $rdodsg }
🎑¦ الملصقات » { $locksticker }
🅰¦ العربية » { $ar }
??¦ الاتجليزية » { $en }
💤¦ الدردشة » { $locktext }
🏌🏻¦ البوتات بالطرد » { $lockbotsk }
🤖¦ البوتات » { $lockbots }

💱¦ اعدادات التقـييد :

💢¦ التقييد بالتوجيه » { $lockforwardk }
📸¦ التقييد بالصور » { $photor }
🔗¦ التقييد بالروابط » { $linkr }
🎉¦ التقييد بالمتحركه » { $gifr }
🎥¦ التقييد الفيديو » { $videor }
");
$text2 = str_replace("| غیر فعال |","","$text");
bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}

if($text == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"⇜ من 「 $first_name 」 
⇜ تأمر تم تفعيل المجموعة ورفعت كل الادمن
༄",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"",'url'=>"https://t.me/"],['text'=>"",'callback_data'=>"text"]
],
]
])
]); 
}
else
{
if($howmember >= 1){
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"⇜ من 「 $first_name 」 
⇜ تأمر تم تفعيل المجموعة ورفعت كل الادمن
༄",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]); 
 bot('sendmessage',[
        'chat_id'=>$Devoffic[0],
        'text'=>" تم اضافة المجموعة إلى قائمة المجموعات ✅
➖➖➖➖➖
🚩معلومات المجموعة :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

بواسطة : [ @$username ] 
", 
    ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
    $settings = '{"lock": {
            "text": "مفتوح",
            "photo": "مفتوح",
            "link": "مفتوح",
            "tag": "مفتوح",
			"username": "مفتوح",
            "sticker": "مفتوح",
            "video": "مفتوح",
            "voice": "مفتوح",
            "audio": "مفتوح",
            "gif": "مفتوح",
            "bot": "مفتوح",
            "forward": "مفتوح",
            "document": "مفتوح",
            "tgservic": "مفتوح",
			"edit": "مفتوح",
			"reply": "مفتوح",
			"contact": "مفتوح",
			"location": "مفتوح",
			"game": "مفتوح",
			"gamess": "مفتوح",
			"cmd": "مفتوح",
			"spam": "مفتوح",
			"mute_all": "مفتوح",
			"mute_all_time": "مفتوح",
			"markdowns": "مفتوح", 
            "fosh": "مفتوح",
            "farse": "مفتوح",
			"lockauto": "مفتوح",
			"lockcharacter": "مفتوح",
			"video_msg": "مفتوح"
		},
		"information": {
        "added": "true",
		"welcome": "مفتوح",
		"add": "مفتوح",
		"ar": "مفتوح",
		"en": "مفتوح",
		"tsmet": "مفتوح",
            "iduser": "مفتوح",
		"rdodsg": "مفتوح",
		"lockchannel": "مفتوح",
		"hardmodebot": "مفتوح",
		"hardmodewarn": "بالتقييد",
		"charge": "999 يوم",
		"setadd": "3",
		"dataadded": "",
		"expire": "",
		"textwelcome": "اهلا بك عزيزي",
		"rules": "⚜┇لم يتم حفظ قوانين للمجموعه",
		"msg": "",
		"timelock": "00:00",
		"timeunlock": "00:00",
		"pluscharacter": "300",
		"downcharacter": "0",
		"setwarn": "3"
		}
}';
    $settings = json_decode($settings,true);
	$settings["information"]["expire"]="$next_date";
	$settings["information"]["dataadded"]="$dateadd";
	$settings["information"]["msg_id"]="$message_id";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
🚸¦ لآ يمـگنني تفعيل آلبوت في آلمـجمـوعهہ‏ يجب آن يگون آگثر مـن 【*1*】 عضـو 👤
",
  'reply_to_message_id'=>$message_id,
	  	  'reply_markup'=>json_encode([
'inline_keyboard'=>[
 	[
['text'=>"",'url'=>"https://t.me/"]
  ],
   ]
   ])
 ]); 
}
}
}
}
}
//add
if ( $text == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	
 ]);  
 		        bot('sendmessage',[
        'chat_id'=>$Devoffic[0],
        'text'=>"تم اضافة مجموعة جديدة بواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

بواسطة : [ @$username ] 
", 
    ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
    $settings = '{"lock": {
            "text": "مقفول",
            "photo": "مقفول",
            "link": "مقفول",
            "tag": "مقفول",
			"username": "مقفول",
            "sticker": "مقفول",
            "video": "مقفول",
            "voice": "مقفول",
            "audio": "مقفول",
            "tsmet": "مقفول",
            "iduser": "مقفول",
            "gif": "مقفول",
            "bot": "مقفول",
            "forward": "مقفول",
            "document": "مقفول",
            "tgservic": "مقفول",
			"edit": "مقفول",
			"reply": "مقفول",
			"contact": "مقفول",
			"location": "مقفول",
			"game": "مقفول",
			"gamess": "مقفول",
			"cmd": "مقفول",
			"en": "مقفول",
			"ar": "مقفول",
			"rdodsg": "مقفول",
			"spam": "مقفول",
			"mute_all": "مقفول",
			"mute_all_time": "مقفول",
			"markdowns": "مقفول", 
            "fosh": "مقفول",
            "farse": "مقفول",
			"lockauto": "مقفول",
			"lockcharacter": "مقفول",
			"video_msg": "مقفول"
		},
		"information": {
        "added": "true",
		"welcome": "مقفول",
		"add": "مقفول",
		"lockchannel": "مقفول",
		"hardmodebot": "مقفول",
		"hardmodewarn": "مقفول",
		"charge": "999 يوم",
		"setadd": "3",
		"spamx": "5",
		"dataadded": "",
		"expire": "",
		"msg": "",
		"timelock": "00:00",
		"timeunlock": "00:00",
		"pluscharacter": "300",
		"downcharacter": "0",
		"textwelcome": "اهلا بك عزيزي",
		"rules": "⚜┇لم يتم حفظ قوانين للمجموعه",
		"setwarn": "3"
		}
}';
    $settings = json_decode($settings,true);
	$settings["information"]["expire"]="$next_date";
	$settings["information"]["dataadded"]="$dateadd";
	$settings["information"]["msg_id"]="$message_id";
    $settings = json_encode($settings,true);
    file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"⇜ المجموعة متفعله قبل كده يا حب
",'reply_to_message_id'=>$message_id,
 ]); 
}
}
}
}
if($text=="/start" &&  $tc == "private"){
if (!in_array($from_id,$Devoffic)){
$uphoto = "https://anubisloader.000webhostapp.com/Avatar.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>"اهلا انا مريم 🧚

↞ اختصاصي ادارة المجموعات من السبام والخ..
↞ عشان تفعلني ارفعني اشراف وارسل تفعيل.🏽‍🔧
↞ معرف المطور @AA5YU ..",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"تحديثات مريم 🍻",'url'=>"https://t.me/YYFNL"]]
    ,
     
        [['text'=>"ضيفني لـ مجموعتك 🦋",'url'=>"https://t.me/Mariamx_bot?startgroup=Commands&admin=ban_users+restrict_members+delete_messages+add_admins+change_info+invite_users+pin_messages+manage_call+manage_chat+manage_video_chats+promote_members"]]
    ]

  ])
  ]);
}}
if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Devoffic)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🎖¦ آهہ‏‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 🛠
🚸¦ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"ضع اسم للبوت ©"],['text'=>"👨🏻‍✈️¦ ضع كليشة المطور"]
],
[
['text'=>"تعطيل التواصل ✖️"],['text'=>"تفعيل التواصل 🔛"]
],
[
['text'=>"اضف رد عام ➕"],['text'=>"مسح رد عام ➕"]
],
[
['text'=>"الردود العامه 🗨"],['text'=>"مسح جميع الردود العامه 🗨"]
],
[
['text'=>"👥المجموعات"],['text'=>"👤المشتركين"]
],
[
['text'=>"اذاعه عام 📢"],['text'=>"الاحصائيات 📈"]
],
[
['text'=>"اذاعه 🗣"],['text'=>"اذاعه عام بالتوجيه 📣"]
],
[
['text'=>"اذاعه خاص 👤"],['text'=>"📛 اذاعة خاص بالتوجية 📛"]                            
],
[
['text'=>"تحديث السورس ™️"]
],
],
  'resize_keyboard'=>true
])
]);
}
}
$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "ضع اسم للبوت ©" and in_array($from_id,$Devoffic)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
'chat_id'=>$chat_id,
'text'=>"📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الاسم  للبوت 🍃
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Devoffic)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=> "📭¦ تم تغير اسم البوت  ✋🏿
🗯¦ الان اسمه ( $text )
✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "بوت" || $text == "ما اسمك"){
if ($tc == 'group' | $tc == 'supergroup'){
$rand = array('يعني مش بوته!','هلا','اخرس','اسمي مريم ياخي️','عايز اي','اسكت','توكل','رخم','عندي اسم علي فكره','مش شغلانه هي');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);}}
if($text == "بوته" || $text == "ما اسمك"){
if ($tc == 'group' | $tc == 'supergroup'){
$rand = array('عايز اي','هلا','اخرس','اسمي مريم ياخي️','عايز اي','اسكت','توكل','رخم','عندي اسم علي فكره','مش شغلانه هي');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);}}

$message = $update->message;
$arr = array("ها حياتي😻","عيونه 👀 وخشمه 👃🏻واذانه👂🏻","باقي ويتمدد 😎","ها حبي 😍","ها عمري 🌹","اجيت اجيت كافي لتصيح 🌚👌","هياتني اجيت 🌚❤️","نعم حبي 😎","هوه غير يسكت عاد ها شتريد 😷","احجي بسرعه شتريد 😤","ها يا كلبي ❤️","هم صاحو عليه راح ابدل اسمي من وراكم 😡","لك فداك $namebot حبيبي انت اموووح 💋","دا اشرب جاي تعال غير وكت 😌","كول حبيبي أمرني 😍","احجي فضني شرايد ولا اصير ضريف ودكلي جرايد لو مجلات تره بايخه 😒😏","اشتعلو اهل $namebot شتريد 😠","بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف 😂","طالع مموجود 😒","هااا شنوو اكو حاته بالكروب وصحت عليه  😍💕","انت مو قبل يومين غلطت عليه؟  😒","راجع المكتب حبيبي عبالك $namebot سهل تحجي ويا 😒","ياعيون $namebot أمرني 😍","لك دبدل ملابسي اطلع برااااا 😵😡 ناس متستحي","سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب 😑","مشغول ويا ضلعتي  ☺️","مازا تريد منه 😌🍃");
$arr1 = array_rand($arr,true);
if($message){

$get = file_get_contents("msg.txt")+1; 
file_put_contents("msg.txt",$get); 
if (!in_array($from_id,$Devoffic)){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
if ($get == "5" or $text == $namebot  ){
if ($tc == 'group' | $tc == 'supergroup'){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>$arr[$arr1],
 'reply_to_message_id'=>$message_id,
]);
} 
}
}
}
}
$arr = array("نعم حبيبي المطور 🌝❤","يابعد روح $namebot 😘❤️","هلا بمطوري العشق أمرني");
$arr1 = array_rand($arr,true);
if($message){

$get = file_get_contents("msg.txt")+1; 
file_put_contents("msg.txt",$get); 
if (in_array($from_id,$Devoffic)){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
if ($get == "5" or $text == $namebot  ){
if ($tc == 'group' | $tc == 'supergroup'){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>$arr[$arr1],
 'reply_to_message_id'=>$message_id,
]);
} 
}
}
}
}
$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "👨🏻‍✈️¦ ضع كليشة المطور" and in_array($from_id,$Devoffic)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي 🍁
💬¦ الان قم بارسال الكليشه 
🛠
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Devoffic)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"
📜¦ تم وضع الكليشه بنجاح كلاتي 👋🏻

($text)
✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
//مطوررر✅
if($text == "المطور" ){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$sudo"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$dets = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$sudo"));
$name =$dets->result->first_name;
bot('sendphoto',[
'chat_id'=>$chat_id, 
'photo'=>$file_id, 
'caption'=>"❲ 𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒓𝒔 𝒃𝒐𝒕 ❳
— — — — — — — — —
◉ 𝚍𝚎𝚟 𝚗𝚊𝚖𝚎 : $name
◉ 𝚍𝚎𝚟 𝚞𝚜𝚎𝚛 : ❲ @$puyy ❳
◉ 𝚍𝚎𝚟 𝚒𝚍 : ❲ $sudo ❳
",
'reply_to_message_id'=>$message_id,
]);}

if($text=="🚷 حظر عام 🚷" && $tc == "private" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل حظر عام + الايدي
√
",
]);}
elseif( strpos($text , "حظر عام") !== false) {
if (in_array($from_id,$Devoffic)) {
$text = str_replace(['حظر عام'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($text=="🚷 الغاء حظر عام 🚷" && $tc == "private" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الغاء حظر عام + الايدي
√
",
]);}
elseif ( strpos($text , "الغاء حظر عام") !== false) {
if (in_array($from_id,$Devoffic)) {
$text = str_replace(['الغاء حظر عام'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم الغاء حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text == "المحظورين عام" or $text == "🚫 المحظورين عام 🚫") {
if ( in_array($from_id,$Devoffic)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
☑┇قائمة المحظورين

$result
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($text=="❗️حظر مجموعة❗️" ){
if ($tc == "private") {
if (in_array($from_id,$Devoffic)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text , "غادر" ) !== false ) {
$text = str_replace(['غادر'],'',$text);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ تم مغادرة المجموعة بنجاح
√
",
  ]);
bot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
elseif($text=="📊 الاحصائيات 📊"){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
			bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🤖 الاحصائيات هي :

👥 عدد المجموعات: $group

👤 عدد المستخدمين: $users
",
            'hide_keyboard'=>true,
	]);
	}
  elseif($text=="المجموعات" or $text=="👥المجموعات" ){
$group = count($user["grouplist"]);
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
👥¦ عدد المجموعات المفعلة » $MoHaMMedd  ➼
",
            'hide_keyboard'=>true,
  ]);
  }
  elseif($text=="المشتركين" or $text=="👤المشتركين" ){
$users = count($user["userlist"]);
      bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
👤¦ عدد المشتركين في البوت » $MOhaMMed  ➼
",
            'hide_keyboard'=>true,
  ]);
  }
if(!$bio){
$biio = "لايوجد بايو";
}elseif($bio){
$biio = "$bio";
}
if($text == "بايو"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$biio",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ايديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" `$from_id` ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
elseif ($text == '🔈 اذاعة بالخاص🔈' && in_array($from_id,$Devoffic)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == '🔈 اذاعة بالمجموعات🔈' && in_array($from_id,$Devoffic)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == '🔊 توجيه بالمجموعات' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"🔊 توجيه بالمجموعات",
  'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text == 'توجيه بالخاص 🔊' && in_array($from_id,$Dev)) {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ ارسل رسالتك الان
√",
			  'reply_to_message_id'=>$message_id,
			   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🔙  رجوع"] 
]
   ],
  'resize_keyboard'=>true
   ])
		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}


elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال الرسالة بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>" تم ارسال الرسالة بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال رسالتك بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
 bot('sendmessage',[
      'chat_id'=>$numbers[$z],        
	  'text'=>"$text",
    ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text != "رجوع  🔙") {
     bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"تم ارسال رسالتك بنجاح مقفول️",
  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
 bot('sendmessage',[
      'chat_id'=>$numbers[$z],        
	  'text'=>"$text",
    ]);
}
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);



if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
  
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"($text)
  ✓ تم اضافت الرد 🚀 
-",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
$armof = file_get_contents("conferm.txt");
$php_aba = $update->message;
if($text == "رفع الردود"){
if($from_id == $Devoffic){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⇜ حلو ، دلوقتي ابعت ملف الردود",
]);
file_put_contents("conferm.txt","ok");
} else {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⇜ عذراً ، هذا الأمر يخص مطور السورس فقط",
]);
}
}
if($php_aba->document and $armof =="ok"){
$file = "https://api.telegram.org/file/bot".$token."/".bot('getfile',['file_id'=>$php_aba->document->file_id])->result->file_path;
 file_put_contents("Repliest.json",file_get_contents($file));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ورفعنا الردود ياحلو 
༄",
]);
unlink("conferm.txt");

}
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"⇜ تمام عيني  
⇜ ابعت ابعت الرد عشان امسحه 
༄",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
  $str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
  unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"($text)
     ياقلبي مسحت الرد 
༄",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
  file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"⇜ الرد ده مش مضاف في قائمة الردود",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
  unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
  unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
  unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
  unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
  unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
  unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
  unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
  unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
  unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"تمام ياقلبي مسحت كل الردود 
༄",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
  bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"ردود المجموعة:

$get_rd

༄",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
  bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⇜ مفيش ردود مضافة!",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}

if(in_array($from_id,$Dev)){
if($text == "اضف رد عام" || $text == "اضف رد عام ➕"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"⇜ حلو ، دلوقتي ابعت الكلمة الي هتكون رد عام",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
  file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"⇜ حلو , دلوقتي ابعت جواب الرد
⇜ ( نص,صوره,فيديو,متحركه,ريكورد,اغنيه ) 
༄",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"($text)
  واضفنا الرد لكل المجموعات يامز
༄",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد عام" || $text == "مسح رد عام ➕" ){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"
⇜ تمام يامز  
⇜ ابعت ابعت الرد عشان امسحه من كل المجموعات
༄",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
  $str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
  unlink("data/addrd/$text.txt");
     unlink("data/addrd/media/$text.txt");
     unlink("data/addrd/media/sticker/$text.txt");
     unlink("data/addrd/media/video/$text.txt");
     unlink("data/addrd/media/videonote/$text.txt");
     unlink("data/addrd/media/document/$text.txt");
     unlink("data/addrd/media/photo/$text.txt");
     unlink("data/addrd/media/audio/$text.txt");
     unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"
($text)
    يامز مسحت الرد من كل المجموعات
༄
",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
  file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 'chat_id'=>$chat_id,
 'text'=>"⇜ الرد ده مش مضاف في قائمة الردود العامه",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح الردود العامه" || $text == "مسح جميع الردود العامه 🗨"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
  unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
  unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
  unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
  unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
  unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
  unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
  unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
  unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
  unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"    يامز مسحت كل الردود العامه
༄",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}


if($text == "الردود العامه" || $text == "الردود العامه 🗨" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
  bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الردود العامه كلها:

$I_get_rd

༄",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود العامه" || $text == "الردود العامه 🗨"and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
  bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"⇜ مفيش ردود مضافة!",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}

// رد علي الردود العامه 

if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 $l = json_decode(file_get_contents('l.json'),1);
$admin = 1444037923;
if(preg_match('/منع /',$text) and $from_id == $admin){
$ex = explode('منع ',$text)[1];
$l[] = $ex;
file_put_contents('l.json',json_encode($l));
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم منع الكلمة : $ex", 
]);
}
if($text == 'الممنوعات' and $from_id == $admin){
$words = '';
$c = 1;
for($i=0; $i<count($l); $i++){
$words .= "- $c : ".$l[$i]."\n";
$c++;
}
if($words != ''){
$words = $words;
}else{
$words = 'لا يوجد';
}
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- الكلمات الممنوعة :\n$words", 
]);
} 
if($text == 'حذف الممنوعات' and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"- تم حذف جميع الكلمات الممنوعة", 
]);
unlink('l.json');
}
if($text and $from_id != $admin){
for($i=0; $i<count($l); $i++){
if(preg_match("/".$l[$i]."/",$text)){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}
// رد علي الردود العامه 
$betr = str_replace("كشف","$betr",$text); 
if($text == "كشف $betr"){
$dets = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$betr"));
$name =$dets->result->first_name;
$id =$dets->result->id;
$user =$dets->result->username;
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"•*المعلومات*•~⪼
الاسم: $name 
المعرف: @$user
 الايدي: `$id`
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
]);
}
if($rt && $text == "كشف"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"•*المعلومات*•~⪼
الاسم: $re_name 
المعرف: @$re_user
 الايدي: `$re_id`
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
]);
}

if($text == "رتبتي" ){
if($status == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ مالك اساسي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "رتبتي" ){
if(in_array($from_id,$Devoffic)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ مطور السورس",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "رتبتي" ){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ مطور اساسي",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "رتبتي" ){
if(in_array($from_id,$mmyaz)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ عضو مميز",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "رتبتي" ){
if(in_array($from_id,$useradmin)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ ادمن البوت",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "رتبتي" ){
if(in_array($from_id,$getCCmember)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ مدير البوت",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "رتبتي" ){
if($status == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"رتبتك ⇜ مشرف المجموعه",
'reply_to_message_id'=>$message->message_id, 
]);
}
}

if($text=="اسكتي" and in_array($from_id,$useradmin)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
فوق مانا مخليك ادمن ؟؟ اسكت انت 😏
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and in_array($from_id,$getCCmember)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
عشان خطرك هسكت لانك مدير علي راسي  😌
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
حاضر ياتاج راسي 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
تأمر ياقلبي 😇
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
ع راسي تأمر انت بس 😌
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
مش فوق مخليك ادمن وتقولي اسكتي 😏
 ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسكتي" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"يعني اي اسكتي ؟؟ اسكت انت 🤧",
'reply_to_message_id'=>$message->message_id, 
]);
}
$id   = $message->from->id; 
if($text == 'هلا' and in_array($from_id,$Dev)){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"اهلا عزيزي المطور 😽❤️",
'reply_to_message_id'=>$message_id,
]);
}
if($text == 'هلو' and in_array($from_id,$Dev)){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"هلوات . نورت مطوري 😍",
'reply_to_message_id'=>$message_id,
]);
}
if($text=="م1"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
•للاستفسار - @$puyy


❨ اوامر الرفع والتنزيل ❩


⌯ رفع ↣ ↢ تنزيل مدير
⌯ رفع ↣ ↢ تنزيل ادمن
⌯ رفع ↣ ↢ تنزيل مميز


❨ اوامر المسح ❩

⌯ مسح الادمنيه
⌯ مسح المميزين

❨ اوامر الطرد الحظر الكتم ❩

⌯ حظر ↢ ❨ بالرد،بالمعرف،بالايدي ❩
⌯ تقيد ↢ ❨ بالرد،بالمعرف،بالايدي ❩
⌯ الغاء الحظر ↢ ❨ بالرد،بالمعرف،بالايدي ❩
⌯ فك التقييد ↢ ❨ بالرد،بالمعرف،بالايدي ❩
⌯ منع + الكلمة
⌯ الغاء منع + الكلمة
⌯ قائمه الممنوعات
⌯ مسح الممنوعات

",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text=="م2"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
للاستفسار - @$puyy 


❨ اوامر الوضع ❩

⌯ وضع ترحيب + الترحيب
⌯ وضع تكرار + العدد
⌯ وضع تحذير + العدد
⌯ وضع قوانين + القوانين

❨ اوامر رؤية الاعدادات ❩

⌯ المطورين
⌯ تحذيراتي
⌯ القوانين 
⌯ الادمنية
⌯ المدراء
⌯ المقيدين
⌯ المميزين
⌯ ايدي
⌯ الاعدادات 
⌯ الحماية
",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text=="م3"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
للاستفسار - @$puyy


❨ اوامر الردود ❩

⌯ الردود ↢ تشوف كل الردود المضافه
⌯ اضف رد ↢ عشان تضيف رد
⌯ مسح رد ↢ عشان تمسح الرد
⌯ مسح الردود ↢ تمسح كل الردود
⌯ الرد + كلمة الرد
-

❨ اوامر القفل والفتح بالمسح ❩

⌯ قفل ↣ ↢ فتح  التعديل  
⌯ قفل ↣ ↢ فتح  الريكوردات 
⌯ قفل ↣ ↢ فتح  الفيديو 
⌯ قفل ↣ ↢ فتح  الـصــور 
⌯ قفل ↣ ↢ فتح  الملصقات 
⌯ قفل ↣ ↢ فتح  المتحركه
⌯ قفل ↣ ↢ فتح  الماركدوان
⌯ قفل ↣ ↢ فتح  الدردشه  
⌯ قفل ↣ ↢ فتح  الروابط 
⌯ قفل ↣ ↢ فتح  التاك
⌯ قفل ↣ ↢ فتح  البوتات
⌯ قفل ↣ ↢ فتح  المعرفات 
⌯ قفل ↣ ↢ البوتات بالطرد 
⌯ قفل ↣ ↢ فتح  الكلايش 
⌯ قفل ↣ ↢ فتح  التكرار 
⌯ قفل ↣ ↢ فتح  التوجيه 
⌯ قفل ↣ ↢ فتح  العربية
⌯ قفل ↣ ↢ فتح  الانجليزية
⌯ قفل ↣ ↢ فتح  الرد 
⌯ قفل ↣ ↢ فتح  المواقع 
⌯ قفل ↣ ↢ فتح  الاشعارات 
⌯ قفل ↣ ↢ فتح  الجهات 
⌯ قفل ↣ ↢ فتح  البصمه الفيديو
⌯ قفل ↣ ↢ فتح  الموسيقى
⌯ قفل ↣ ↢ فتح  الــكـــل  


⌯ قفل ↣ ↢ التوجيه بالتقييد 
⌯ قفل ↣ ↢ الروابط بالتقييد 
⌯ قفل ↣ ↢ المتحركه بالتقييد
⌯ قفل ↣ ↢ الصور بالتقييد
⌯ قفل ↣ ↢ الفيديو بالتقييد  

❨ اوامر التفعيل والتعطيل ❩

⌯ تفعيل ↣ ↢ تعطيل الترحيب 
⌯ تفعيل ↣ ↢ تعطيل الردود 
⌯ تفعيل ↣ ↢ تعطيل الايدي

",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text == "تيست" or $text == "test" ){
if ( in_array($from_id,$Devoffic)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💯 البوت شـغــال 🚀
",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text=="اوامر الرد"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
  للاستفسار - @$puyy


❨ جميع اوامر الردود ❩

⌯ الردود ↢ تشوف كل الردود المضافه
⌯ اضف رد ↢ عشان تضيف رد
⌯ مسح رد ↢ عشان تمسح الرد
⌯ مسح الردود ↢ تمسح كل الردود
⌯ الرد + كلمة الرد

",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text=="م المطور"  ){
if ( in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
  للاستفسار - @$puyy


❨ اوامر المطور ❩

⌯ تفعيل ↢ لتفعيل البوت 
⌯ تعطيل ↢ لتعطيل البوت 
⌯ اسم البوت + غادر ↢ لجعل البوت يغادر من الجروب
⌯ مسح الادمنية ↢ لمسح الادمنيه 
⌯ مسح المميزين ↢ لمسح الاعضاء المميزين 
⌯ مسح المدراء ↢ لمسح المدراء 
⌯ مسح المطورين ↢ لمسح كل المطورين
⌯ رفع + تنزيل مطور↢ لرفع مطور او تنزيل مطور
⌯ تيست ↢ لمعرفة البوت ما اذا كان شغال او لا
⌯ اذاعه ↢ لنشر رساله لكل المجموعات
⌯ اذاعه خاص ↢ لنشر رساله لكل المشتركين خاص
⌯ اذاعه عام ↢ لنشر رساله لكل المجموعات والخاص
⌯ اذاعه عام بالتوجيه ↢ لنشر منشور قناتك بابتوجيه للكل
⌯ الاحصائيات ↢ لعرض احصائيات البوت
⌯ تحديث السورس↢ لتحديث السورس الى اصدار احدث

",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
if($text=="الاوامر"  ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$useradmin) or in_array($from_id,$getCCmember)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
منور ياحب 🌝

الاول صلي على النبي ❤️

دي جميع الاوامر العامه 👇

⌯ م1 ↢ اوامر الحمايه
⌯ م2 ↢ اوامر المجموعه
⌯ م3 ↢ اوامر الإداره
⌯ م المطور ↢  اوامر المطور
⌯ اوامر الرد ↢ اوامر الردود
⌯ الاعدادات ↢ اعدادات البوت

عندك اي استفسار @$puyy
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
if($text == "سورة الفاتحة" or $text == "سورة الفاتحه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/001.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البقره" or $text == "سورة البقره"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/002.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ال عمران" or $text == "سورة ال عمران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/003.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النساء" or $text == "سورة النساء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/004.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المائده" or $text == "سورة المائدة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/005.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الأنعام" or $text == "سورة الانعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/006.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعراف" or $text == "سورة الأعراف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/007.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الأنفال" or $text == "سورة الانفال"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/008.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التوبه" or $text == "سورة التوبة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/009.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يونس" or $text == "سورة يونس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/010.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرعد" or $text == "سورة الرعد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/011.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة إبراهيم" or $text == "سورة ابراهيم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/012.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحجر" or $text == "سورة الحجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/013.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النحل" or $text == "سورة النحل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/014.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الإسراء" or $text == "سورة الاسراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/015.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكهف" or $text == "سورة الكهف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/016.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة مريم" or $text == "سورة مريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/017.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة طه" or $text == "سورة طه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/018.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الأنبياء" or $text == "سورة الانبياء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/019.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحج" or $text == "سورة الحج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/020.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المؤمنون" or $text == "سورة المومنون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/021.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النور" or $text == "سورة النور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/022.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفرقان" or $text == "سورة الفرقان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/023.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشعراء" or $text == "سورة الشعراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/024.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النمل" or $text == "سورة النمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/025.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القصص" or $text == "سورة القصص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/026.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العنكبوت" or $text == "سورة العنكبوت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/027.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الروم" or $text == "سورة الروم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/028.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة لقمان" or $text == "سورة لقمان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/029.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة السجده" or $text == "سورة السجدة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/030.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحزاب" or $text == "سورة الأحزاب"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/031.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة سبا" or $text == "سورة سبإ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/032.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فاطر" or $text == "سورة فاطر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/033.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يس" or $text == "سورة يس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/034.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصافات" or $text == "سورة الصافات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/035.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ص" or $text == "سورة ص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/036.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزمر" or $text == "سورة الزمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/037.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة غافر" or $text == "سورة غافر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/038.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فصلت" or $text == "سورة فصلت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/039.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشوري" or $text == "سورة الشورى"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/040.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزخرف" or $text == "سورة الزخرف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/041.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الدخان" or $text == "سورة الدخان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/042.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجاثيه" or $text == "سورة الجاثية"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/043.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الأحقاف" or $text == "سورة الاحقاف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/044.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة محمد" or $text == "سورة محمد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/045.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفتح" or $text == "سورة الفتح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/046.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحجرات" or $text == "سورة الحجرات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/047.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ق" or $text == "سورة ق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/048.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الذاريات" or $text == "سورة الذاريات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/049.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطور" or $text == "سورة الطور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/050.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النجم" or $text == "سورة النجم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/051.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القمر" or $text == "سورة القمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/052.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرحمن" or $text == "سورة الرحمن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/053.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الواقعه" or $text == "سورة الواقعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/054.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحديد" or $text == "سورة الحديد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/055.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المجادله" or $text == "سورة المجادله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/056.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحشر" or $text == "سورة الحشر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/057.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الممتحنه" or $text == "سورة الممتحنة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/058.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصف" or $text == "سورة الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/059.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصف" or $text == "سورة الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/060.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجمعة" or $text == "سورة الجمعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/061.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المنافقون" or $text == "سورة المنافقون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/062.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التغابن" or $text == "سورة التغابن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/063.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطلاق" or $text == "سورة الطلاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/064.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التحريم" or $text == "سورة التحريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/065.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الملك" or $text == "سورة الملك"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/066.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القلم" or $text == "سورة القلم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/067.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحاقه" or $text == "سورة الحاقة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/068.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المعارج" or $text == "سورة المعارج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/069.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة نوح" or $text == "سورة نوح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/070.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجن" or $text == "سورة الجن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/071.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المزمل" or $text == "سورة المزمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/072.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المدثر" or $text == "سورة المدثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/073.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القيامه" or $text == "سورة القيامة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/074.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانسان" or $text == "سورة الإنسان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/075.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المرسلات" or $text == "سورة المرسلات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/076.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النبا" or $text == "سورة النبإ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/077.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النازعات" or $text == "سورة النازعات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/078.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة عبس" or $text == "سورة عبس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/079.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التكوير" or $text == "سورة التكوير"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/080.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفطار" or $text == "سورة الأنفطار"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/081.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المطففين" or $text == "سورة المطففين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/082.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانشقاق" or $text == "سورة الانشقاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/083.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البروج" or $text == "سورة البروج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/084.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطارق" or $text == "سورة الطارق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/085.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الأعلي" or $text == "سورة الاعلي"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/086.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الغاشيه" or $text == "سورة الغاشية"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/087.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفجر" or $text == "سورة الفجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/088.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البلد" or $text == "سورة البلد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/089.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشمس" or $text == "سورة الشمس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/090.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الليل" or $text == "سورة الليل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/091.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الضحى" or $text == "سورة الضحي"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/092.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشرح" or $text == "سورة الشرح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/093.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التين" or $text == "سورة التين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/094.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العلق" or $text == "سورة العلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/095.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القدر" or $text == "سورة القدر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/096.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البينه" or $text == "سورة البينة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/097.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزلزله" or $text == "سورة الزلزلة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/098.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العاديات" or $text == "سورة العاديات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/099.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة القارعه" or $text == "سورة القارعة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/100.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التكاثر" or $text == "سورة التكاثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/101.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العصر" or $text == "سورة العصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/102.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الهمزه" or $text == "سورة الهمزة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/103.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفيل" or $text == "سورة الفيل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/104.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة قريش" or $text == "سورة قريش"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/105.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الماعون" or $text == "سورة الماعون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/107.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكوثر" or $text == "سورة الكوثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/108.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكافرون" or $text == "سورة الكافرون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/109.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النصر" or $text == "سورة النصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/110.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المسد" or $text == "سورة المسد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/111.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاخلاص" or $text == "سورة الإخلاص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/112.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفلق" or $text == "سورة الفلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/113.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الناس" or $text == "سورة الناس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://server8.mp3quran.net/afs/114.mp3",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == 'مريم'){
$rand = array('خلاص يا بابا','عيوني 🖤','يخربيت مريم في الزفت ','خيررر!!!؟','عيونها لمريم 🌚❤️','انجزز 🤧','عيونها وقلبها وخشمها','؟','زعلانه','سم','هي شغلانه ؟ 🤦🏼‍♀️');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
} 
if($text == 'حالي' or $text == 'حالى'){
$rand = array('مكسوره','فرحانه','زعلانه','مكتئبه','قرفانه️','عايزه اموت','تعبانه','ميته');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
} 
$ARMOF = json_decode(file_get_contents("$chat_id.json"),1);
if($update and !$ARMOF[$from_id]){
$ARMOF[$from_id] = $update->message->from->first_name.$update->message->from->last_name;
file_put_contents("$chat_id.json",json_encode($ARMOF,128|34|256));
}
$ni = $update->message->from->first_name.$update->message->from->last_name;
if($ni != $ARMOF[$from_id]){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"غيرت اسمك لي مش كان ".$ARMOF[$from_id],
'reply_to_message_id'=>$update->message->message_id,
]);
$ARMOF[$from_id] = $update->message->from->first_name.$update->message->from->last_name;
file_put_contents("$chat_id.json",json_encode($ARMOF,128|34|256));
}
//حساسيه 
if (strpos($text, '😂') !== false) {
$rand = array('تدوم ياقلبي 😂','ضحكتك خطفت قلبي 😂❤️','ضحكتك قمر اويي 🌚❤️️','مش هضحك 🤧','في ضحكه قمر كده ؟😂❤️','😂😂😂❤️','ياعسلل 😂😂❤️','ياخرابي ع الجماللل 😂❤️','هههههههههههههههههههههههههههههههههههههههههههههههههههه️');
$ra = array_rand($rand ,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$update->message->message_id,
]);
}
if (strpos($text, 'cv') !== false or strpos($text, 'CV') !== false or strpos($text, 'سيفي') !== false or strpos($text, 'سيفى') !== false or strpos($text, 'سيڤي') !== false) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"انت لسه عن هتسأل عن السيفي ادخل بف ع طولل 😂❤️",
'reply_to_message_id'=>$update->message->message_id,
]);
}
if($text == 'احبك' or $text == 'بحبك'){
$rand = array('اكتررر','ابتدينا كذب','هممممممم','بعشقك');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
} 
//خارجي
$Replaysss = json_decode(file_get_contents("Repliest.json"),1);
if($text != $Replaysss[$text]){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$Replaysss[$text],
'reply_to_message_id'=>$message_id
]);
}
//ابراج
$aahaaa = file_get_contents("http://bessox.xyz/Api/abrag.php?aahaaa=$data");
if($text == "الابراج"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"اختر برجك من اسفل",'reply_to_message_id'=>$message_id,
'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "برج الحمل", 'callback_data' =>"الحمل"],['text' => "برج الثور", 'callback_data' =>"الثور"],['text' => "برج الجوزاء", 'callback_data' =>"الجوزاء"]],
[['text' => "برج السرطان", 'callback_data' =>"السرطان"],['text' => "برج الاسد", 'callback_data' =>"الاسد"],['text' => "برج العذراء", 'callback_data' =>"العذراء"]],
[['text' => "برج الميزان", 'callback_data' =>"الميزان"],['text' => "برج العقرب", 'callback_data' =>"العقرب"],['text' => "برج القوس", 'callback_data' =>"القوس"]],
[['text' => "برج الجدي", 'callback_data' =>"الجدي"],['text' => "برج الدلو", 'callback_data' =>"الدلو"],['text' => "برج الحوت", 'callback_data' =>"الحوت"]],
]]),
]);
}
if($data != "back"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'parse_mode'=>"markdown",
'text'=>"*$aahaaa*",
'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "رجوع 🔙", 'callback_data' =>"back"]],
]]),
]);
}

if($data == "back"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'parse_mode'=>"markdown",
'text'=>"*اختر اسم البرج الخاص بك*",
'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "برج الحمل", 'callback_data' =>"الحمل"],['text' => "برج الثور", 'callback_data' =>"الثور"],['text' => "برج الجوزاء", 'callback_data' =>"الجوزاء"]],
[['text' => "برج السرطان", 'callback_data' =>"السرطان"],['text' => "برج الاسد", 'callback_data' =>"الاسد"],['text' => "برج العذراء", 'callback_data' =>"العذراء"]],
[['text' => "برج الميزان", 'callback_data' =>"الميزان"],['text' => "برج العقرب", 'callback_data' =>"العقرب"],['text' => "برج القوس", 'callback_data' =>"القوس"]],
[['text' => "برج الجدي", 'callback_data' =>"الجدي"],['text' => "برج الدلو", 'callback_data' =>"الدلو"],['text' => "برج الحوت", 'callback_data' =>"الحوت"]],
]]),
]);
}
//تاج للجميع
$user = $message->from->username;
$ftag = file_get_contents("$chat_id.txt");
$tags = explode("\n",$ftag);
$chtag = $chat_id ."a";
if ( $text  and !in_array($id,$tags)){
file_put_contents("$chat_id.txt","\n$id",FILE_APPEND);
file_put_contents("$chtag.txt","\n𓆩 @$user 𓆪",FILE_APPEND);
}
$tagss = file_get_contents("$chtag.txt");
if ( $text == "منشن للكل" ){
bot ('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ قائمه الاعضاء :
 $tagss",
]);
}
$random = array('انت فزت لان اختياري مقص 🌚🤞🏻', 'انا فزت لان اختياري ورقة 🌚📄', 'متعادلين 🌚✊🏻');
$random1 = array_rand($random, 1);
$rrues = array('انت الفائز لان اختياري حجرة 🌚✊🏻', 'متعادلين 🤝🏻🌚', 'انا فزت لان اختياري مقص 🌚🤞🏻');
$rues = array_rand($rrues);
$ccut = array('متعادلين 🌚🤝🏻 ','انا فزت لان اختياري حجرة 🌚✊🏻', ' انت فزت لان اختياري ورقة 📄🌚');
$cut = array_rand($ccut);

if($text == "حجره"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$random[$random1],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مقص"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ccut[$cut],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ورقه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrues[$rues],
'reply_to_message_id'=>$message->message_id, 
]);
} 
$musict = file_get_contents("music.txt");
if($text == "تشغيل موسيقى"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⇜ حلو ، دلوقتي ابعت رابط الاغنيه لازم يكون جاهز",
]);
file_put_contents("music.txt","ok");
}
if($message and $musict =="ok"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"$text",
 caption =>"⇜ اتفضل , $text",
 reply_to_message_id =>$message->message_id, 
]);
unlink("music.txt");
}