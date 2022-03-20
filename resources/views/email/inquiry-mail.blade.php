<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Mail</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
    padding: 0;
    margin: 0;
}

html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
@media only screen and (max-device-width: 680px), only screen and (max-width: 680px) { 
    *[class="table_width_100"] {
        width: 96% !important;
    }
    *[class="border-right_mob"] {
        border-right: 1px solid #dddddd;
    }
    *[class="mob_100"] {
        width: 100% !important;
    }
    *[class="mob_center"] {
        text-align: center !important;
    }
    *[class="mob_center_bl"] {
        float: none !important;
        display: block !important;
        margin: 0px auto;
    }   
    .iage_footer a {
        text-decoration: none;
        color: #929ca8;
    }
    img.mob_display_none {
        width: 0px !important;
        height: 0px !important;
        display: none !important;
    }
    img.mob_width_50 {
        width: 40% !important;
        height: auto !important;
    }
}
.table_width_100 {
    width: 680px;
}
</style>

<body>
   
<center>
<h2 style="padding: 23px;background: #b3deb8a1;border-bottom: 6px green solid;">
</h2>
</center>
  
<p>Hello</p>
<p>The Contact person details given below:</p>
<div id="mailsub" class="notification" align="center">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">
        <tr>
            <td>Name: </td>
            <td>{{$data['first_name']}}</td>
        </tr>
        <tr>
            <td>Email: </td>
            <td>{{$data['email']}}</td>
        </tr>
        <tr>
            <td>Phone: </td>
            <td>{{$data['contact_no']}}</td>
        </tr>
        <tr>
            <td>Message: </td>
            <td>{!!$data['message']!!}</td>
        </tr>

    </table>
<p class="text-justify">Visit Us::<a href="{{url('')}}">Visit Our Website : {{url('')}}</a></p>
</div>
</body>
</html>
