<h4 class="align-content-center" style="margin: 0 auto">Refiner Modules</h4>
<div class="container" style="margin-top: 5%">
    <h5>Forms</h5>
    <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-12">


            <div class="card">
                <div class="card-header">Registration form</div>
                <div class="card-body">
            <?php
            /*
             * create an instance of the form
             * they are other ways to go about it
             * in future Versions this may change
             * */
            $form =new  \common\Forms;
            /*
             * begin form
             * */

            echo $form->formHeader('modules','post');
            /*
             * create labels and inputs
             * */
            echo "<div class='row'><div class='col-lg-6 col-sm-12'>";
            echo $form->label('first_name',' First Name');
            echo $form->input(1,'text','f_name');
            echo "</div><div class='col-lg-6 col-sm-12'>";
            echo $form->label('last_name','Last Name');
            echo $form->input(1,'text','last_name');
            echo "</div></div>";
            echo $form->label ('user',' Username');
            echo $form->input(1,'text','username');
            echo $form->label('email','Email');
            echo $form ->input(1,'email','user_email');
            echo $form->label('password','Password');
            echo $form->input(1,'password','user_password');
            /*
             * Close form
             * */
            echo $form->formFooter('Register');
            ?>
                </div>
                <div class="card-footer">
                    @refiner forms: css bootstrap
                    <a href="" class="list-inline">Learn more about creating forms</a>

                </div>
            </div>




        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">Login form</div>
                <div class="card-body">
            <?php

            /*
             * Create form header
             * */
            echo $form->formHeader('modules','post');
            /*
             * Create username label
             * Create input field <input type="text" name = 'username'>*/
            echo $form->label('username','Username');
            echo $form->input(1,'text','username');
            /*
             * Create password lebel
             * Create password field*/
            echo $form->label('password','password');
            echo $form->input(1,'password','password');
            /*
             * Remember me
             * */
            echo $form->checkbox(1,'Remember me','rememberme');
            echo "<a href=''> No account yet? Register </a>";
            /*
             * Close the form*/
            echo $form->formFooter('Login');
            ?>
                </div>
                <div class="card-footer">
                    @refiner forms: css bootstrap
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
                <div class="card-header">About Forms</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="">Introduction</a></li>
                        <li class="list-group-item"><a href="">Form Class</a></li>
                        <li class="list-group-item"><a href="">Creating forms</a></li>
                        <li class="list-group-item"><a href="">Credits</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<a href="<?=$url.'home'?>">Home</a>

