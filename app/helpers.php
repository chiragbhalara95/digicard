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
