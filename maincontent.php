<main class="gridMain">
    <p>Some info will be shown here as well as the login button</p>
    <form action="inside/">
        <input type="submit" value="testa animationer" />
    </form>
    <div>
        <h3>Logga in</h3>
    </div>

    <form class="form-group" action="backlogic/login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control" />
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
        <button class="btn btn-block btn-success mt-2" name="login">
            Login
        </button>
        <p class="mt-2 text-center">
            Already registered? <a href="index.php">Click here</a> to Create
            Account
        </p>
    </form>
    <h1>Register</h1>
    <form action="backlogic/register.php" method="post" autocomplete="off">
        <label for="username">
            <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required />
        <label for="password">
            <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required />
        <label for="email">
            <i class="fas fa-envelope"></i>
        </label>
        <input type="email" name="email" placeholder="Email" id="email" required />
        <input type="submit" value="Register" />
    </form>
    <a href="index.php?page=start">
        en text som länkar vidare
    </a>
</main>