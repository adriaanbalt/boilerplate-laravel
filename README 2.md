## STUDIO HANSRAJ website



## Setup Database Commands: 

Use SequelPro to remove all tables.

-- OR -- in mySQL
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE all;
SET FOREIGN_KEY_CHECKS = 1;

Then..

artmigrate
artseed
