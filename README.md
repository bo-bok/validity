# validity

![screenshot](https://user-images.githubusercontent.com/19147734/33762287-d66d228a-dc03-11e7-8850-9f22803cf260.png)

This is the presentational theme only for the site. To run this locally, please see guidance below.

##### You'll need
* a local wordpress install
* atom
* sass-autocompile (atom plugin)
* node v6.2.0 (or another sass-autocompile compatible version)
* node-sass

##### Running the theme
In order to run the theme, you'll need a local install of wordpress. See this guide: https://premium.wpmudev.org/blog/develop-wordpress-locally-mamp/

Once your local install is setup up, you'll need to add `validity-theme` to your `wp-content/themes/` directory. Then **activate** the theme in the wordpress admin area under `Appearence/Themes/`.


##### Compiling sass into css
This project uses [sass-autocompile](https://atom.io/packages/sass-autocompile) atom plugin to compile scss files into a single css file at **the root level** of the project. To output to the correct location, you'll need to edit the settings as shown below:

<img width="835" alt="screen shot 2017-10-19 at 15 42 00" src="https://user-images.githubusercontent.com/19147734/33762263-c28b5624-dc03-11e7-8288-8bf494e2fa3d.png">

*Tip*: if css isn't updating after this is setup, try using a hard refresh in browser (command, shift, r)

##### Importing test db and custom posts setup
For importing Custom Posts
http://www.wpbeginner.com/wp-tutorials/how-to-exportimport-custom-post-types-in-wordpress/
