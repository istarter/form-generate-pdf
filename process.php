<?php
require_once __DIR__ . '/vendor/autoload.php';



$con = mysqli_connect("localhost", "root", "", "logo");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


if($_POST){

    $uploaddir = 'uploads/';
    $dislike_logos = $_FILES['logo-dislike']['name'];
    $countfiles = sizeof($dislike_logos);

    $countfiles;
    $filenames = '';
    for($i=0;$i<$countfiles;$i++) {
        // $filenames[] = $_FILES['logo-dislike']['tmp_name'][$i];
        $filenames .= '<td style="width:33%;"><img src="'.$_FILES['logo-dislike']['tmp_name'][$i].'"></td>';
        
    }

    

    $like_logos = $_FILES['logo-like-att'] ['name'];
    $filesCount = sizeof($like_logos);;
    $nameFiles = '';
    for($i = 0; $i<$filesCount; $i++) {
        // $nameFiles[] = $_FILES['logo-like-att']['tmp_name'][$i];
       $nameFiles .='<td style="width:33%;"><img src="'. $_FILES['logo-like-att']['tmp_name'][$i].'"></td>';
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $logoDesign = $_POST['logo-design'];
    $compName = $_POST['comp-name'];
    $logo = $_POST['logo'];
    $tagLine = $_POST['tag-line'];
    $tag = $_POST['tagline'];
    $descript = $_POST['discriptionq'];
    $allCheck = $_POST['all-check'];
    $logoType = $_POST['logo-type'];
    $lgraphicQlementq = $_POST['graphic-element-q'];
    $graphicElement = $_POST['graphic-element'];
    $likeColor = $_POST['like-color'];
    $like = $_POST['like'];
    $dislikeColor = $_POST['dislike-color'];
    $dislike = $_POST['dislike'];
    $dislikeLogoes = $_POST['dislike-logoes'];
    $logoDislikeq = $_POST['logo-dislike-q'];
    $logoDislike = $_POST['logo-dislike-d'];
    $logoLike = $_POST['logo-like'];
    $logotype_q = $_POST['logo-type-q'];
    $effect_logo = $_POST['effect_logo'];
    $symbol = $_POST['symbol'];
    $symbol2 = $_POST['symbol2'];
    $symbol3 = $_POST['symbol3'];
    $logo_like_att = $_POST['logo-like-att'];
    //check boxes
    $effect_logos = '';
    foreach ($effect_logo as $eff_logo) {
        $effect_logos .= $eff_logo . ' - ';
    }

    $logo_types = '';
    foreach($logoType as $logo) {
        $logo_types .= $logo. ' - ';
    }





}

if (isset($_POST['submit'])) {

        $data = json_encode($_POST);
        $data = mysqli_real_escape_string($con, $data);
        $datetime = date('Y-m-d H:i:s');

        $query = "INSERT INTO form (form_data, add_at) VALUES ('$data', '$datetime')";

        // $result = mysqli_query($con, $query);

        if (mysqli_query($con, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }


    




    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHTML('
    
    <form action="process.php" method="POST">
    <h2 style="" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Client
        <span>Information</span></h2>
    
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

<div class="form-group">
<b style="margin: 4px !important; padding: 5px !important;"> <label class="label-form" for="name">Name:</label></b>
   <span> ' . $name . ' </span> 
</div>

<div class="form-group">
    <b style="margin: 4px !important; padding: 5px !important;"><label class="label-form" for="email">Email:</label></b>
    <span>    ' . $email . ' <span/>
    
</div>
<div class="form-group">
    <b style="margin: 4px !important; padding: 5px !important;">
    <label class="label-form" for="pwd">Mobile:</label></b>
    <span> ' . $mobile . ' <span/>
    
</div>
<div class="col-md-12">
    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Logo
        <span>Design</span></h2>
</div>
<br>


<div class="form-group" >
    <!--company-name-->
    <b style="margin: 4px !important;">
    <label class="label-form " for="logo" >Company Name:</label>
      <span>  ' . $logo . ' </span>
   </b>
</div>
<!--company-name-end-->

<!--tag-line-->

<div class="form-group">
<b style="margin: 4px !important; padding-top: 10px;">
    <label class="label-form" for="tagLine">Tag Line:</label></b>
        <span> ' . $tag  . ' </span>
    
    
    <label class="radio-inline">
</div>
<!--tag-line-end-->

<!--descriptin-area-->
<div class="form-group" style="">
<b style="margin: 4px !important;">
    <label class="label-form" for="Discription">Discription</label></b>
    <span>    ' . $descript . ' </sapn>
        
    
</div>

<!--descriptin-area-end-->


<!--description-effects-end -->

<!--description-symbol-->


<!--description-symbol-end-->
<!--font-detail-end-->



<!--form-end-->
</div>

</div>
</div>
</div>
</section>
<!-- end employee -->
<section id="chek" style="float:left;width:100%">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<b style="margin: 7px !important;">
<label style="font-size: 18px" class="label-form" for="check">How would you describe the effect
    you are looking for in your logo?</label></b>
<div class="row">
' . $effect_logos . '

</div>

<br>
</div>

<!--description-effects-end -

<!--description-symbol-->

<div class="form-group">
<label style="font-size:25px;" class="label-form" for="check">Would you like a symbol or a
logotype?</label>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios1">
        ' . $symbol . '
        </label>
        </p>
        </div>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios2">
        ' . $symbol2 . '
        </label>
        </p>
        </div>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios3">
        ' . $symbol3 . '
        </label>
        </p>
        </div>
</div>

</div>
</div>
</div>
</section>
<!--chekedlist-->
<section id="for_m" style="width:100%;float:left">
<div class="termination_form">
<div class="container">
<div class="row">
<div class="col-xs-12">
<!--graphic-detail-->
<div class="form-group" style="">
<p style="margin: 4px !important;">
    <label style="font-size: 6px; margin-top: 4px" class="label-form" for="Discription">Which
        graphic elements or images would you want the designer to use/emphasize or AVOID using
        in your logo?</label> '. $graphicElement .'</p>
</div>
<!--graphic-detail-end-->

<!--color-scheme-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
        <p style="margin: 4px !important;">
            <label class="label-form" for="like">Like Color:</label>
            '. $like .'
            </p>
        </div>
        <div class="col-sm-6">
        <p style="margin: 4px !important;">
            <label class="label-form" for="like">DisLike Color:</label>
            '. $dislike .'
            </p>
        </div>
    </div>
</div>
<!--color-scheme-end-->

<!--Attachment-files-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
        <h4 style="margin: 4px !important;">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you dislike along with reasons why you dislike them? <br>
                </label>
                <p> '. $filenames .' </p>
            </h4>
            
            <table class="table">
                <tr>
                    
                    '. $filenames .'
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
        <h4 style="margin: 4px !important;">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you admire along with reasons why you admire them?</label>
              
                '. $logoLike .'
           
           </h4>
           <table class="table">
           <tr>
               '.$nameFiles.'
           </tr>
       </table>
        </div>
    </div>
    
  
</div>
<br><br>

<!--description-symbol-end--->
</div>
</div>
</div>
</div>

</section>
<!--chekedlist--end--><br><br>
<section>
<div style="float: left;width: 100%;">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="col-md-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

    <!--font-detail-->
    <div class="form-group">
    <b style="margin: 7px !important;">
        <label style="font-size: 25px;" class="label-form" for="check">Would you like a
            symbol or a logotype?</label></b>
            <div class="row">
            <span>    '. $logo_types .' </span>
            </div>
       
       <br>
      
       
       
       
    </div>
    <!--font-detail-end-->

    <br><br>

</div>
</div>
</div>
</div>

</form>
    ');
    $file_name = time()."_attachment.pdf";
    $content = $mpdf->Output('attachments/'.$file_name,'F');

    // Send Email 
    // Create instance of Swift_Attachment with our PDF file
    // $attachment = new Swift_Attachment('attachments/'.$file_name, 'attachment.pdf', 'application/pdf');

    $message = (new Swift_Message('Wonderful Subject'))
    ->setSubject('Your subject')
    ->setFrom(array('info@viralwebbs.com' => 'Viral Webbs'))
    ->setTo(array('illustration@viralwebbs.com', 'illustrations@viralwebbs.com'))
    ->setBody('Here is the message itself')
    ->attach(Swift_Attachment::fromPath('attachments/'.$file_name));

    // Create the Transport
    $transport = (new Swift_SmtpTransport('mail.viralwebbs.com', 26))
    ->setUsername('tanseer@viralwebbs.com')
    ->setPassword('viral123_')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Send the created message
    $mailer->send($message);

    header("Location: index.php?success=1");
}elseif(isset($_POST['download'])){
    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHTML('
    
    <form action="process.php" method="POST">
    <h2 style="" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Client
        <span>Information</span></h2>
    
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

<div class="form-group">
<b style="margin: 4px !important; padding: 5px !important;"> <label class="label-form" for="name">Name:</label></b>
   <span style="margin-left: 10px"> ' . $name . ' </span> 
</div>

<div class="form-group">
    <b style="margin: 4px !important; padding: 5px !important;"><label class="label-form" for="email">Email:</label></b>
    <span>    ' . $email . ' <span/>
    
</div>
<div class="form-group">
    <b style="margin: 4px !important; padding: 5px !important;">
    <label class="label-form" for="pwd">Mobile:</label></b>
    <span> ' . $mobile . ' <span/>
    
</div>
<div class="col-md-12">
    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Logo
        <span>Design</span></h2>
</div>
<br>


<div class="form-group" >
    <!--company-name-->
    <b style="margin: 4px !important;">
    <label class="label-form " for="logo" >Company Name:</label>
      <span>  ' . $logo . ' </span>
   </b>
</div>
<!--company-name-end-->

<!--tag-line-->

<div class="form-group">
<b style="margin: 4px !important; padding-top: 10px;">
    <label class="label-form" for="tagLine">Tag Line:</label></b>
        <span> ' . $tag  . ' </span>
    
    
    <label class="radio-inline">
</div>
<!--tag-line-end-->

<!--descriptin-area-->
<div class="form-group" style="">
<b style="margin: 4px !important;">
    <label class="label-form" for="Discription">Discription</label></b>
    <span>    ' . $descript . ' </sapn>
        
    
</div>

<!--descriptin-area-end-->


<!--description-effects-end -->

<!--description-symbol-->


<!--description-symbol-end-->
<!--font-detail-end-->



<!--form-end-->
</div>

</div>
</div>
</div>
</section>
<!-- end employee -->
<section id="chek" style="float:left;width:100%">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<b style="margin: 7px !important;">
<label style="font-size: 18px" class="label-form" for="check">How would you describe the effect
    you are looking for in your logo?</label></b>
<div class="row">
<span> ' . $effect_logos . ' <span>

</div>

<br>
</div>

<!--description-effects-end -

<!--description-symbol-->

<div class="form-group">
<label style="font-size:25px;" class="label-form" for="check">Would you like a symbol or a
logotype?</label>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios1">
        ' . $symbol . '
        </label>
        </p>
        </div>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios2">
        ' . $symbol2 . '
        </label>
        </p>
        </div>
        <div class="form-check" style="margin-top: 10px;">
        <p style="margin: 4px !important;">
        <label class="form-check-label" for="exampleRadios3">
        ' . $symbol3 . '
        </label>
        </p>
        </div>
</div>

</div>
</div>
</div>
</section>
<!--chekedlist-->
<section id="for_m" style="width:100%;float:left">
<div class="termination_form">
<div class="container">
<div class="row">
<div class="col-xs-12">
<!--graphic-detail-->
<div class="form-group" style="">
<p style="margin: 4px !important;">
    <label style="font-size: 6px; margin-top: 4px" class="label-form" for="Discription">Which
        graphic elements or images would you want the designer to use/emphasize or AVOID using
        in your logo?</label> '. $graphicElement .'</p>
</div>
<!--graphic-detail-end-->

<!--color-scheme-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
        <p style="margin: 4px !important;">
            <label class="label-form" for="like">Like Color:</label>
            '. $like .'
            </p>
        </div>
        <div class="col-sm-6">
        <p style="margin: 4px !important;">
            <label class="label-form" for="like">DisLike Color:</label>
            '. $dislike .'
            </p>
        </div>
    </div>
</div>
<!--color-scheme-end-->

<!--Attachment-files-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
        <h4 style="margin: 4px !important;">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you dislike along with reasons why you dislike them? <br>
                </label>
                <p> '. $logoDislike .' </p>
            </h4>
            
            <table class="table">
                <tr>
                    '.$filenames.'
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
        <h4 style="margin: 4px !important;">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you admire along with reasons why you admire them?</label>
              
                '. $logoLike .'
           
           </h4>
           <table class="table">
           <tr>
               '.$nameFiles.'
           </tr>
       </table>
        </div>
    </div>
    
  
</div>
<br><br>

<!--description-symbol-end--->
</div>
</div>
</div>
</div>

</section>
<!--chekedlist--end--><br><br>
<section>
<div style="float: left;width: 100%;">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="col-md-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

    <!--font-detail-->
    <div class="form-group">
    <p style="margin: 7px !important;">
        <label style="font-size: 25px;" class="label-form" for="check">Would you like a
            symbol or a logotype?</label>
            <div class="row">
                '. $logo_types .'
            </div>
       </p>
       <br>
      
       
       
       
    </div>
    <!--font-detail-end-->

    <br><br>

</div>
</div>
</div>
</div>

</form>
    ');
    $file_name = time()."_attachment.pdf";
    $content = $mpdf->Output($file_name,'D');



}
