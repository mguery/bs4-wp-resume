# Bootstrap Resume - WordPress theme

WordPress version of this Bootstrap template: https://startbootstrap.com/template-overviews/resume/

**WordPress theme for developers using Start Bootstrap resume template.**

* * *

## ToC

*   Install, use, what's inside
*   Credits
*   Tools + Resources

* * *

### Install and Usage

Download on GitHub - Click the "Clone or download" button then download zip. 
After you download and unzip folder, you can edit the following files/folders:

**Resume Theme folder**

- style.css: normalize.css (version 7), global styles, WordPress styles
- header.php: opening tags (head, header, and side navigation)
  -- can also add link to profile image around line 36 by replacing */assets/img/profile.jpg* - 
  ```
  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_theme_file_uri('/assets/img/profile.jpg'); ?>"
                alt="">
  ```              
- footer.php: closing tags (div, body, and html)
- front-page.php: can add or remove a section, see template-parts folder to edit html 
- functions.php: Under Enqueue scripts and styles comment - can add or remove stylesheets, fonts and icons, and scripts

**Template-parts folder** 

Content separated by section. Ex: About section is in content-about.php
- content-about.php 
- content-awards.php 
- content-education.php 
- content-experience.php 
- content-interests.php 
- content-skills.php 


**Assets folder**

All folders and files from the [Start Bootstrap](https://github.com/BlackrockDigital/startbootstrap-resume) template. See their [README.md](https://github.com/BlackrockDigital/startbootstrap-resume/blob/master/README.md) for more info about Gulp tasks. 

*CSS folder*

- resume.css: you can edit to add your personal brand and then minify to see changes on the front end. Or if you're using Sass, you can make changes to the SCSS folder.

*IMG folder*

- replace profile JPG to yours. Size: 500x500

*Vendor folder*

- Bootstrap - all CSS and JS files
- Icons  Font Awesome, Simple Line Icons, and Devicons
- jQuery and jQuery Easing (scrolling effect on navigation)

After you're done, right click on resume theme folder > Send to > Compressed folder. Then from your WordPress dashboard, upload your zipped theme and activate to see it live. 

* * *

### Credits

Resume template - [Start Bootstrap](https://github.com/BlackrockDigital/startbootstrap-resume)

Starter theme - [Underscores.me](http://underscores.me)

[Normalize v7](https://github.com/necolas/normalize.css)

* * *

### Tools + Resources

- Editors: [Visual Studio Code](https://code.visualstudio.com/) or [Sublime Text](https://www.sublimetext.com/)
- Local Dev Environment: [Local by Flywheel](http://local.getflywheel.com) or [ServerPress](http://serverpress.com)
- WordPress and Gulp: [WPGulp](https://github.com/ahmadawais/WPGulp)
- [WordPress Codex](https://codex.wordpress.org/)
- Read docs offline - [Zeal](https://zealdocs.org)

*Tips for resume and portfolio*

- [How to Write a Good Resume](https://medium.freecodecamp.org/how-to-write-a-good-resume-in-2017-b8ea9dfdd3b9#.v2y9bkcbd)
- [Web Developer Resume](https://uptowork.com/blog/web-developer-resume)
- [Elevator pitch](https://skillcrush.com/2015/05/08/elevator-pitch-proud-of/) - add to your About section
- [Web Development Project Ideas from Experts](https://simplestepscode.com/web-development-project-ideas-from-experts/)
- [24 Essential Portfolio Tips for New Techies](https://skillcrush.com/2015/10/27/24-essential-portfolio-tips-for-new-techies/)
- [Find work](http://msguery.net/webdev)

***

### Coming soon
Add a portfolio feature to the theme. In the meantime, to create one using your repos use [Git Showcase](http://gitshowcase.io) and then add the link to your resume theme. 

***

Any questions or feedback, [send an email](mailto:marjory@msguery.com) or [tweet me](http://twitter.com/msguery).
