<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article class="flex justify-center">
    <div class="flex mt-24 w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-6 mb-4" action="app/users/login.php" method="post">
            <?php if (isset($_GET['fromIndex']) && $_GET['fromIndex'] == 'true') : ?>
                <p class="text-xs text-rose-600 mb-4"><?= $loginFail ?></p>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    E-mail
                </label>
                <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 text-xs" type="email" name="email" id="email" placeholder="your@email.com" required>
                <small class="text-xs italic text-gray-500">Please provide your email address.</small>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2 mt-4" for="password">
                        Password
                    </label>
                    <input class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-xs" type="password" name="password" id="password" placeholder="******************" required>
                    <small class="text-xs italic text-gray-500">Please provide your password (passphrase).</small>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Sign In
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="reset-password.php">
                        Forgot Password?
                    </a>
                </div>
            </div>
        </form>
        <a class="flex justify-center mt-5 text-blue-300 hover:text-fuchsia-400" href="/signup.php">No account? Sign up here!</a>
    </div>
</article>



<?php require __DIR__ . '/views/footer.php'; ?>
