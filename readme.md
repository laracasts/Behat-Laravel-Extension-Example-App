# 1. Install Dependencies

Have a look at the `require-dev` block in the `composer.json` file to see which dependencies you'll
need to pull in:

    "behat/behat": "~3.0@dev",
    "behat/mink": "~1.6@dev",
    "behat/mink-extension": "~2.0@dev",
    "behat/mink-browserkit-driver": "~1.2@dev",
    "laracasts/behat-laravel-extension": "dev-master"

# 2. Take a look at Behat.yml

Notice how, within this file, we load the `LaravelExtension`. As a parameter, you may also
specify a custom Laravel 5 environment file that should be loaded. By default, the extension
will look for a `.env.behat` file, however, you're free to change this.

This file should, like the `.env` file in your project root, contain any special environment variables
for your tests (such as a special acceptance test-specific database).

# 3. Write Features

Check out `features/bootstrap/example.feature` for a quickie feature to get you started. Because our context
(`features/bootstrap/FeatureContext.php`) is extending `MinkContext`, we already have a bunch of definitions out of the box.

> You can always run `behat -dl` to see a full list.

Have fun!

![example](https://dl.dropboxusercontent.com/u/774859/Work/BehatLaravelExtension/example.png)