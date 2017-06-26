The site uses Gulp to compile all CSS and JS, to compress images, and to organise all assets. All assets can be found in src. In the command line run the following commands:

cd /var/www/validity
gulp watch

Now, when you change any of the source files, the compiled files will be generated. The generated files are located at public_html/assets.

npm install gulp-sass --save-dev
