# CodeIgniter tutorial and testing
*Based on the CodeIgniter default tutorial*

## Docs
https://www.codeigniter.com/user_guide/tutorial

fired up a local host with MAMP on port 8888

http://localhost:8888/codeigniter/

## Config
setup database and base url in application/config

- config.php
- database.php -> mysql connection local db
- routing.php

## Build some static pages
added Pages.php class to application/controllers/

added view to views/pages and application/config/routes.php

header and footer in view/templates

## Build model
Added model to application/models

News_model.php

created news table in the db.

And views:
application/views/news


## Add a form
*post a new news article*

create a new class:
application/views/news/create.php

create function in News_model.php:
set_news()

routing:
$route['news/create'] = 'news/create';
