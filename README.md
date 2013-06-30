#Wordpress site sandbox
  Wordpress site up and running for testing

#Description
  Install and configure a english Wordpress site named *test* running at http://localhost:8080/wordpress-site-sandbox/ 
  with admin user named *test*, email test@test.test and password *testtest*.
  
# Installation

## Manual instalation
  Go to your webserver document root, for example /var/www/
  
  ```shell
    git clone https://github.com/mabarroso/wordpress-site-sandbox.git
    mysqladmin -u root create sanboxwordpresssimply
    mysql -u root sanboxwordpresssimply < wordpress-site-sandbox/tools/database.sql
  ```
  
## Vagrant instalation
  ```shell
    git clone https://github.com/mabarroso/wordpress-site-sandbox.git
    vagrant up
  ```
  
## Customization
  Modify wordpress-site-sandbox/tools/database.sql file to change the site URL
  
# License
  Released under the MIT license: [http://www.opensource.org/licenses/MIT](http://www.opensource.org/licenses/MIT)
