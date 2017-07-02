# codeshare
Step 1-Creating a webpage to share codes with people!
Step 2-Download lamp stack-download instructions-https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu
step 3-By default,storing all the files given here in /var/www/html..[in linux]
Step 4-Download phpmyadmin in linux through instructions given here-https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-12-04
Step 5-After downloading phpMyAdmin,create a database with name myDB
Step 6-Open dbs.php(one of the files here is named dbs.php)and change root as your sql username and 123 as your sql password
Step 7-In phpMyadmin,under database myDB,create a table named user,
Step 8-See below for table details
 ===Database myDB

== Table structure for table user

|------
|Column    |Type        |Null|Default
|------
|//**id**//|int(12)     |No  |null|*auto-increment
|first     |varchar(128)|No  |null|   
|last      |varchar(128)|No  |null|
|uid       |varchar(128)|No  |null|
|pwd       |varchar(100)|No  |null|
|codes     |int(11)     |Yes |  0 |

== Dumping data for table user
Step 9-All the libraries are included in the repository
Step 10-Open connect.php and sign up :)
