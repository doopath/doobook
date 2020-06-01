**Discription**</br>
CHP is a quick solution to the quick start your work. No installation plugins, just clone this repository.

**CHP can:**
<ul>
  <li>minify and compile scss/css</li>
  <li>minify js</li>
  <li>include _file.html pieces in one .html file </li>
  <li>optimize pictures and convert it in the .webp</li>
  <li>optimize fonts and convert it in the .woff / .woff2 file</li>
  <li>sync your browser and autoupdate it</li>
  <li>dynamic watch changes in src/ file and update a browser</li>
</ul>

**To use**</br>
When you are save some file in src/ gulp delete dist/ folder and create it again.
If you want to include some html file - call it as _filename.html and put it in src/ folder.


**INSTALATION**
```bash
npm install --global gulp
git clone https://github.com/sha1om/gulp_chp
```

**PHP SUPPORT**</br>
If you are need to use php scripts you can start the php server.
```bash
php -S localhost:port -t /path/to/directory/
```
Then you can see the page by localhost:port

For example:
```bash
php -S localhost:3000 -t /home/shalom/files/shalom_chp/
```

Now the main html page is located at: http://localhost:8000

Also, you can change package.json for configurate names, versions and reps.
