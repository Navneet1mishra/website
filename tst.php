<form action="" method="POST" onsubmit="return loginvalidation();">
    <div class="row">
        <label>Email</label> <span id="email_error"></span>
        <div>
            <input type="text" name="email" id="email"
                class="form-control" placeholder="Enter your Email ID">
        </div>
    </div>
    <div class="row">
        <label>Password</label><span id="password_error"></span>
        <div>
            <input type="Password" name="password" id="password"
                class="form-control" placeholder="Enter your password">

        </div>
    </div>
    <div class="row">
        <div>
            <button type="submit" name="submit" class="btn login">Login</button>
        </div>
    </div>
    <div class="row">
        <div>
            <a href="p.php"><button type="button" name="submit"
                    class="btn signup">Signup</button></a>
        </div>
    </div>
</form>