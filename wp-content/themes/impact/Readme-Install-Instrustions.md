## READ ME

#### ***Local Enviroment / Setup***
* Local Machine is a Mac - OSX: EL Capitan
* Apache2.4, PHP7.4.1 and MySQL5.7.26 server configured and managed using Mamp

* Mysql dump is located in the Imapct theme's root directory.

* Wordpress Host: http://app.impact.local
* MySQL Host: localhost:3306
* MySQL Database: app_impact_local
* MySQL Username: admin
* MySQL Password: admin
* Wordpress Admin Username: admin
* Wordpress Admin Password: 21@32B43c
_____________________________________

#### ***Assessment Tasks***

- [x] **Task 1**: Create a custom Wordpress Theme.
```text
* Create a basic custom theme custom theme.
* Added a welcome template-part for the home/index page
```


- [x] **Task 2**: Create a new WP page template for basic top nav, footer, etc.
```text
* Created a basic page template and added:
    * template-part: basic top nav,
    * template-part: slider,
    * template-part: footer
* Created a topnav template-part:
    * Added a site logo
    * Added nav menu with 1 link (case-studies)
* Created a footer template-part:
    * Added some styling and a paragraph to the footer
```


- [x] **Task 3**: Build the page using Gutenberg block editor
```text
* This task has been completed in Task2,
However, I will create this page in the Block Editor so that it will display in the database as well.
```


- [X] **Task 4**: Create a WP custom post type for Case Studies
(example content found on [impact.com/case-studies/](impact.com/case-studies/))
```text
* Created a script in the functions.php file to dynamically add the "Case Studies" custom post type

```


- [x] **Task 5**: Use *ACF* to add custom fields to step 4
* Title
* Description
* Image
```text
* Created the 3 fields required for the Case Studies custom post.
* These fields now appear when creating/editing a Case Study.
* Also, found out the I can add the fields dynamically from the functions.php file. Added the script to do just that for me,
  Basic means that the ACF fields should be added when the theme is activated.

```


- [x] **Task 6**: Build a basic slider or carousel as an *ACF Block*
* To display 3 case studies created in (step 4)
* Each item should link to the case study's permalink (display no page for this is required)
```text
* Build a basic slider using Slick Slider.
* Created another field using ACF that allows me to select any case study as a slide for my slider.
* Styled the new field to display the Case Study Image to the left and the Title and Contents to the right.
* Added the permalink to the Image only, for now. Still needing to add the permalink to the entire slide.
* When the Image is clicked, the user is redirected to that Case Studies single post.
* Created and styled the single post page to display the post when it is clicked.

```


- [x] **Task 7**: Add the case studies slider block (step 6) to the page (step 3)
```text
* Added the slider to the page in step 3. Was really easy to do once everything in step 6 was completed.

```


- [x] **Task 8**: Work should be version controlled using git
* Share with us using any/your preferred hosted git platform
```text
* Github repository has been created right from the start and work is pushed regularly.

```



