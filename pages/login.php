<body>
    <section class="main min-vh-100 d-flex flex-column">
        <main class="form-signin w-100 m-auto">
            <form>
                <a href="/"
                    class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="pages/res/img/html_icon.svg" width="120px" height="120px">
                </a>
                <h1 class="h3 mb-3 fw-normal">Log in</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
                <p class="text-body-secondary">Don't have account?<a href="/?page=register">Register</a></p>
            </form>
        </main>
    </section>

    <?php include 'sections/footer.php'; ?>

</body>