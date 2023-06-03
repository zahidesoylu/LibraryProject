<div class="container" id="log" style="margin-top: 80px">
    <div class="row">
        <div class="col-5 mb-4" id="f1">
            <form action="login.php" method="POST" class="px-4 py-3" id="userForm">
                <h4>User</h4><br>
                <div class="mb-3">
                    <label for="userFormNameSurname" class="form-label">Name Surname</label>
                    <input type="text" class="form-control" id="userFormNameSurname" name="userFormNameSurname" placeholder="Enter your name and surname"><br>
                </div>
                <div class="mb-3">
                    <label for="userFormEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="userFormEmail" name="userFormEmail" placeholder="email@example.com"><br>
                </div>
                <div class="mb-3">
                    <label for="userFormPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="userFormPassword" name="userFormPassword" placeholder="Password"><br>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
            <div class="dropdown-divider"></div>
        </div>
        <div class="col-5 mb-4" id="f2">
            <form action="login.php" method="POST" class="px-4 py-3">
                <h4>Admin</h4><br>
                <div class="mb-3">
                    <label for="adminFormNameSurname" class="form-label">Name Surname</label>
                    <input type="text" class="form-control" id="adminFormNameSurname" name="adminFormNameSurname" placeholder="Enter your name and surname"><br>
                </div>
                <div class="mb-3">
                    <label for="adminFormEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="adminFormEmail" name="adminFormEmail" placeholder="email@example.com"><br>
                </div>
                <div class="mb-3">
                    <label for="adminFormPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="adminFormPassword" name="adminFormPassword" placeholder="Password"><br>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
            <div class="dropdown-divider"></div>
        </div>
    </div>
</div>


