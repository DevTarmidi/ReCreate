<?php
    
?>
<div class="container">
    <div class="row mt-5">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4 text-center mt-5">
        <form class="form-signin" action="signup" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only mt-2">Email address</label>
        <input type="email" id="inputEmail" class="form-control mt-2" placeholder="Email address" maxlength=40 required autofocus>
        <label for="inputPassword" class="sr-only mt-2">Password</label>
        <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Sign in</button>
        </form>
        Have not account? <a style="margin:2px;" href="<?php echo site_url()."signup" ?>" role="button">Sign up</a>
    </div>
    <div class="col-lg-4">
    </div>
    </div>
</div>