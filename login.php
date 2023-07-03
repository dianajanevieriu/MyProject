<?php include "parts/header.php";?>
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="tab-container">
            <div class="tab-content ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-login" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                <div class="card mb-0 mt-6 bg-light">
                    <div class="card-body" style="padding: 40px;">
                        <form id="login-form" name="login-form" class="mb-0" action="processLogin.php" method="post">
                            <h3>Login</h3>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="login-form-email">E-mail utilizator:</label>
                                    <input type="text" id="login-form-email" name="login-form-email" value="" class="form-control">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="login-form-password">Parolă:</label>
                                    <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control">
                                </div>
                                <div class="col-12 form-group">
                                    <button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
