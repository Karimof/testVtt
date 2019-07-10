<?php
    use yii\helpers\HTML;

    $this->title='Registration';
?>

<div class="site-login" style="background: url('/site/images/reg.jpg'); min-height: 700px; width: 100%" >
    <div class="container">
        <div class="container" style="background-color: rgba(256,256,256,0.2); width:400px; text-align: center; margin-top: 50px;padding-top: 30px; padding-bottom: 10px" >
            <img src="/site/images/user.png" style="width: 150px;">
            <br><br>
            <form action="upload_registration" method="get">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <input type="text" class="form-control" name="fullName" placeholder="Full Name" required value="">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="login" placeholder="Login" required value="">
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input  type="password" class="form-control" name="password" placeholder="Password" required value="">
                </div><br>
                <div class="form-group" style="margin-left: -43.2px">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Registration', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
