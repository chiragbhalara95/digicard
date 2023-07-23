<?php
use PHPMailer\PHPMailer\PHPMailer, Carbon\Carbon, Carbon\CarbonPeriod;

function _mail_send_general( $replyData = array() ,$subject="" , $message="" , $mailids = array() , $attachments = array() ) {
    $fromData = $fromdata=array(
        'host'=>env('SMTP_HOST'),
        'port'=>env('SMTP_PORT'),
        'username'=>env('SMTP_USERNAME'),
        'password'=>env('SMTP_PASSWORD'),
        'from_name'=>env('SMTP_FROM_NAME'),
        'from_email'=>env('SMTP_FROM_EMAIL'),
    );
    _re($fromData);
    $replyToMail = $fromData['username'];
    $replyToName = 'DigiCard';
    if( isset($replyData['email']) && $replyData['email'] != '' ) $replyToMail = $replyData['email'];
    if( isset($replyData['name']) && $replyData['name'] != '' ) $replyToName = $replyData['name'];

    $mail = new PHPMailer;
    $IS_SMTP = 1;
    if($IS_SMTP):
        $mail->SMTPDebug = 2; //Alternative to above constant
        $mail->isSMTP(); // commented to send the mail
        $mail->CharSet = "utf-8";
        $mail->Host = $fromData['host'];
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Port = $fromData['port'];
    endif;
    $mail->Username = $fromData['username'];
    $mail->Password = $fromData['password'];
    $mail->setFrom( $fromData['from_email'] , $fromData['from_name'] );
    if( $replyToMail != '' ):
        $mail->AddReplyTo( $replyToMail , $replyToName );
    endif;
    //  Add Attachments >>
    if( isset( $attachments ) && count( $attachments ) ):
        foreach ( $attachments as $key => $value ):
            $mail->AddAttachment( $value );
        endforeach;
    endif;
    //  << Add Attachments
    $mail->Subject = $subject;
    $mail->MsgHTML($message);
    if(count($mailids)):
        foreach ($mailids as $key => $value):
            $mail->addAddress($key,$value);
        endforeach;
    endif;
    $mail->isHTML(true);
    $a = $mail->send();
    return $a;
}

function initials($str) {
    $outputStr =  array_reduce(
        explode(' ', $str),
        function ($initials, $word) {
            return sprintf('%s%s', $initials, substr($word, 0, 1));
        },
        ''
    );

    return substr($outputStr, 0,3);
}


function getEmbedUrl($url) {
    // function for generating an embed link
    $finalUrl = '';

    if (strpos($url, 'facebook.com/') !== false) {
        // Facebook Video
        $finalUrl.='https://www.facebook.com/plugins/video.php?href='.rawurlencode($url).'&show_text=1&width=200';

    } else if(strpos($url, 'vimeo.com/') !== false) {
        // Vimeo video
        $videoId = isset(explode("vimeo.com/",$url)[1]) ? explode("vimeo.com/",$url)[1] : null;
        if (strpos($videoId, '&') !== false){
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://player.vimeo.com/video/'.$videoId;

    } else if (strpos($url, 'youtube.com/') !== false) {
        // Youtube video
        $videoId = isset(explode("v=",$url)[1]) ? explode("v=",$url)[1] : null;
        if (strpos($videoId, '&') !== false){
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://www.youtube.com/embed/'.$videoId;

    } else if(strpos($url, 'youtu.be/') !== false) {
        // Youtube  video
        $videoId = isset(explode("youtu.be/",$url)[1]) ? explode("youtu.be/",$url)[1] : null;
        if (strpos($videoId, '&') !== false) {
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://www.youtube.com/embed/'.$videoId;

    } else if (strpos($url, 'dailymotion.com/') !== false) {
        // Dailymotion Video
        $videoId = isset(explode("dailymotion.com/",$url)[1]) ? explode("dailymotion.com/",$url)[1] : null;
        if (strpos($videoId, '&') !== false) {
            $videoId = explode("&",$videoId)[0];
        }
        $finalUrl.='https://www.dailymotion.com/embed/'.$videoId;

    } else{
        $finalUrl.=$url;
    }

    return $finalUrl;
}

function convertUTCToOtherTimeZone($timeZone = 'UTC', $dateTimeUTC = null, $dateFormat = 'Y-m-d H:i:s'){

    $dateTimeUTC = $dateTimeUTC ? $dateTimeUTC : date("Y-m-d H:i:s");

    $date = new DateTime($dateTimeUTC, new DateTimeZone('UTC'));
    $date->setTimeZone(new DateTimeZone($timeZone));

    return $date->format($dateFormat);
}