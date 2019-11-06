<div class="container content">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
            <form class="reg-page" method="POST" action="<?= base_url('login'); ?>">
                <div class="reg-header">
                    <h2>
                        <li class="fa fa-user"></li> Login
                    </h2>
                </div>

                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="text-right">
                    <button class="btn-u pull-right" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    <!--/row-->
</div>
<!--/container-->