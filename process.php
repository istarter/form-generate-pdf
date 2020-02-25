<?php 
require_once __DIR__ . '/vendor/autoload.php';



$con = mysqli_connect("localhost","root","","logo");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if(isset($_POST)) {
    // echo '<pre>';
    // print_r($_POST);


    $data = json_encode($_POST);
    $data = mysqli_real_escape_string($con,$data);
    $datetime = date('Y-m-d H:i:s'); 

    $query = "INSERT INTO form (form_data, add_at) VALUES ('$data', '$datetime')";

    // $result = mysqli_query($con, $query);

    if (mysqli_query($con, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $logoDesign = $_POST['logo-design'];
    $compName = $_POST['comp-name'];
    $logo = $_POST['logo'];
    $tagLine = $_POST['tag-line'];
    $tag = $_POST['tagline'];
    $descript = $_POST['descript'];
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
    $logoDislike= $_POST['logo-dislike'];
    $likedLogoes= $_POST['liked-logoes'];
    $logoLike= $_POST['logo-like'];
    $logotype= $_POST['logotype'];


    $mpdf = new \Mpdf\Mpdf();

    $mpdf->WriteHTML('
    
    <form action="process.php" method="POST">
    <h2 style="" class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Client
        <span>Information</span></h2>
    <input type="hidden" value="Client Information" name="client-info">
</div>
<div class=" col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

<div class="form-group">
    <label class="label-form" for="name">Name:</label>
    <input type="name" name="name" quired maxlength="50" class="form-control" id="name" placeholder="Enter Name" name="name">
</div>

<div class="form-group">
    <label class="label-form" for="email">Email:</label>
    <input type="email" name="email" quired maxlength="50" class="form-control" id="email" placeholder="abc@abc.com" name="email">
</div>
<div class="form-group">
    <label class="label-form" for="pwd">Mobile:</label>
    <input type="mobile" name="mobile" quired maxlength="20" class="form-control" id="pwd" placeholder="Enter mobile no" name="mobile">
</div>
<div class="col-md-12">
    <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Logo
        <span>Design</span></h2>
    <input type="hidden" value="Logo Design" name="logo-design">
</div>
<br>


<div class="form-group" style="margin-left: 10px;">
    <!--company-name-->
    <label class="label-form" for="logo">Company Name:</label>
    <input type="hidden" value="Company Name" name="comp-name">
    <input type="logo" name="logo" class="form-control ct-limit" id="logo " placeholder="Enter logo name" name="logo">
    <p class="tag-line">The way you want it on your logo</p><br>
</div>
<!--company-name-end-->

<!--tag-line-->

<div class="form-group">
    <label class="label-form" for="tagLine">Tag Line:</label>
    <input type="hidden" value="Tag Line:" name="tag-line">
    <input type="text" name="tagline" class="form-control ct-limit" id="tagLine " placeholder="Enter Tag Line" name="tagLine">
    <p class="tag-line">Enter tag line if you want select the choice</p>
    <label class="radio-inline">
</div>
<!--tag-line-end-->

<!--descriptin-area-->
<div class="form-group" style="">
    <label class="label-form" for="Discription">Discription</label>
    <input type="hidden" value="Discription" name="descript">
    <textarea class="form-control name=" discription" desc-limit" rows="10" id="Discription"></textarea>
</div>
<p class="tag-line">What types of products or services your company supplies, etc.?</p>
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
<label style="font-size: 18px" class="label-form" for="check">How would you describe the effect
    you are looking for in your logo?</label>
<input type="hidden" value="How would you describe the effect
    you are looking for in your logo?" name="all-check"><br>
<p class="tag-line">Choose from this list of words and/or add your own.</p>
<div class="row">
    <!--col1-->
    <div class="col-md-4 col-xs-6 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
        <label class="checkbox">
            <input name="unique" type="checkbox" value="">Unique/Creative
        </label>
        <label class="checkbox">
            <input name="clean" type="checkbox" value="">Clean/Simple
        </label>
        <label class="checkbox">
            <input name="classy" type="checkbox" value="">Classy
        </label>

        <label class="checkbox">
            <input name="professional" type="checkbox" value="">Professional
        </label>
        <label class="checkbox">
            <input name="medical" type="checkbox" value="">Medical
        </label>
        <label class="checkbox">
            <input name="luxurious" type="checkbox" value="">Luxurious
        </label>

        <label class="checkbox">
            <input name="industry" type="checkbox" value="">Industry Oriented
        </label>
        <label class="checkbox">
            <input name="corporate" type="checkbox" value="">Corporate
        </label>
        <label class="checkbox">
            <input name="modern" type="checkbox" value="">Modern
        </label>
        <label class="checkbox">
            <input name="childlike" type="checkbox" value="">Childlike
        </label>
    </div>
    <!--col2-->
    <div class="col-xs-4 hidden-xs"></div>
    <div class="col-md-4 col-xs-12">
        <label class="checkbox">
            <input name="outdoors" type="checkbox" value="">Outdoors/Natural
        </label>
        <label class="checkbox">
            <input name="tech" type="checkbox" value="">High Tech
        </label>
        <label class="checkbox">
            <input name="retro" type="checkbox" value="">Retro
        </label>
        <label class="checkbox">
            <input name="fun" type="checkbox" value="">Fun
        </label>
        <label class="checkbox">
            <input name="serious" type="checkbox" value="">Serious
        </label>
        <label class="checkbox">
            <input name="illustrative" type="checkbox" value="">Illustrative
        </label>
        <label class="checkbox">
            <input name="silly" type="checkbox" value="">Silly/Cartoon
        </label>
        <label class="checkbox">
            <input name="masculine" type="checkbox" value="">Masculine
        </label>
        <label class="checkbox">
            <input name="feminine" type="checkbox" value="">Feminine
        </label>

    </div>
</div>

<br>
</div>

<!--description-effects-end -

<!--description-symbol-->

<div class="form-group">
<label style="font-size:25px;" class="label-form" for="check">Would you like a symbol or a
    logotype?</label>
<input type="hidden" value="Would you like a symbol or a
    logotype?" name="logo-type">
<br>
<p class="tag-line">Choose from this list of words and/or add your own.</p>

<label class="checkbox">
    <input type="checkbox" name="symbol" value="">Symbol with font style.
</label>
<label class="checkbox">
    <input type="checkbox" name="nosymbol" value="">No Symbol Please. Just a Professional Font
</label>
<label class="checkbox">
    <input type="checkbox" name="nausal" value="">Not Sure. Leave it to NAUSAL
</label>
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
    <label style="font-size: 26px; margin-top: 44px" class="label-form" for="Discription">Which
        graphic elements or images would you want the designer to use/emphasize or AVOID using
        in your logo?</label>
    <input type="hidden" value="Which
        graphic elements or images would you want the designer to use/emphasize or AVOID using
        in your logo?" name="graphic-element-q">
    <textarea name="graphic-element" class="form-control gralimit" rows="10" id="Discription" placeholder="Please explain what to avoid and what to use"></textarea>
</div>
<!--graphic-detail-end-->

<!--color-scheme-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
            <label class="label-form" for="like">Like:</label>
            <input type="hidden" value="Which color you like" name="like-color">
            <input type="name" name="like" class="form-control ct-limit" id="name" placeholder="Which color you like" name="name">
        </div>
        <div class="col-sm-6">
            <label class="label-form" for="like">DisLike:</label>
            <input type="hidden" value="Which color you Dislike" name="dislike-color">
            <input type="name" name="dislike" class="form-control ct-limit" id="name" placeholder="Which color you Dislike" name="name">
        </div>
    </div>
</div>
<!--color-scheme-end-->

<!--Attachment-files-->
<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you dislike along with reasons why you dislike them</label>
            <input type="hidden" value="Dislike Logoes" name="dislike-logoes">
            <input type="hidden" value="Please provide 3 reference logos that you dislike along with reasons why you dislike them" name="logo-dislike-q">
            <textarea name="logo-dislike" class="form-control reflimit" rows="10" id="Discription"></textarea><br>
            <input type="file" name="logo-dislike" value="" class="">
        </div>
        <div class="col-sm-6">
            <label class="label-form" for="Discription">Please provide 3 reference logos that
                you admire along with reasons why you admire them</label>
            <input type="hidden" value="Liked Logoes" name="liked-logoes">
            <textarea name="logo-like" class="form-control reflimit" rows="10" id="Discription"></textarea><br>
            <!-- <button type="button" class="btn btn-primary">Attachement</button> -->
            <input type="file" name="logo-like" value="" class="">
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
<div style="float: left;width: 100%;background: #202020;">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="col-md-12 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">

    <!--font-detail-->
    <div class="form-group">
        <label style="font-size: 25px;" class="label-form" for="check">Would you like a
            symbol or a logotype?</label>
        <input type="hidden" value="Would you like a
                symbol or a logotype?" name="logotype"><br>
        <p style="font-size: 20px;" class="tag-line">Choose from this list of words and/or
            add your own.</p>

        <label class="checkbox">
            <input type="checkbox" name="corporate" value="">Corporate
        </label>
        <label class="checkbox">
            <input type="checkbox" name="script" value="">Script
        </label>
        <label class="checkbox">
            <input type="checkbox" name="bold" value="">Bold
        </label>
        <label class="checkbox">
            <input type="checkbox" name="light" value="">Light
        </label>
        <label class="checkbox">
            <input type="checkbox" name="fancy" value="">Fancy
        </label>
    </div>
    <!--font-detail-end-->

    <br><br>

</div>
</div>
</div>
</div>
<div class="text-center">
<br><br><span><button type="submit" class="btn btn-primary btn-lg">submit</button> </span><span><button type="button" class="btn btn-primary btn-lg">Download</button> </span>
</div><br><br>
</form>
    ');

    $mpdf->Output();











}