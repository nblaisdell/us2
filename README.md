US2
===



## Sitemap

### Public
    * nav
    * pages

### Admin
    * login
        * username
        * password
    * menu
        * manage content
            * nav
            * subjects CRUD
            * pages CRUD
        * manage admins
            * admin CRUD
        * logout
            * do logout
            * back to login


### Database
    * subjects
        * id
        * menu_name
        * position
        * visible
    * pages
        * id
        * subject_id
        * menu_name
        * position
        * visible
        * content
    * admins
        * id
        * username
        * password