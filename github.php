<?php

 # STEP 1 - run the git pull command
 `git pull origin master`;

 # STEP 2 - create a sql dump of the local DB
 `mysqldump -u ayushman_test --password=test123 ayushman_test > dump.sql`;

 # STEP 3 - import the local DB dump to staging DB
 `mysql -u ayushman_wpst01 --password=X@7p86SP\[9 ayushman_wpst01 < dump.sql`;

 # STEP 4 - remove the dump.sql file
 `rm dump.sql`;

 # STEP 5 - search and replace all the lcalhost with the vhost
 `wp search-replace 'http://two.wordpress.test/' 'http://staging.cms-a2.ayushmank.sgedu.site/test-01/' --skip-columns=guid`;
 # can you see this comment ?
?>
