<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login for E-library</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action ="/project/partials/_handleLogin.php" method = "post">
            <div class="modal-body">
                
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Email address</label>
                        <input type="text"  class="form-control" id="loginEmail"  name="loginEmail" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label ">Password</label>
                        <input type="password" class="form-control" id="loginPass" name = "loginPass">
                        
</div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-outline-primary">Reset</button>
                    <a href="partials/_recover_pws.php" class="float-end">Forgot Your Password?</a>
                
            </div>

            </form>
        </div>
    </div>
</div>