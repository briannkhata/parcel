CREATE TABLE users (
 userid INT(10) NOT NULL AUTO_INCREMENT,
 group_id INT(10) NOT NULL,
 username VARCHAR(255) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL,
 reg_date INT(10),
 PRIMARY KEY(userid)
);

CREATE TABLE usergroups (
 group_id INT(10) NOT NULL AUTO_INCREMENT,
 group_name VARCHAR(100) NOT NULL,
 PRIMARY KEY(group_id)
);

CREATE TABLE user_permissions (
 pid INT(10) NOT NULL AUTO_INCREMENT,
 permission_name VARCHAR(100) NOT NULL,
 permission_type INT(1),
 userid INT(10) NOT NULL,
 PRIMARY KEY (pid)
);

CREATE TABLE group_permissions (
 pid INT(10) NOT NULL AUTO_INCREMENT,
 permission_name VARCHAR(100) NOT NULL,
 permission_type INT(1),
 group_id INT(10) NOT NULL,
 PRIMARY KEY (pid)
);