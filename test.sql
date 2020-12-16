CREATE TABLE tbl_admin(
    wa_id INT PRIMARY KEY AUTO_INCREMENT,
    wa_name VARCHAR(100) NOT NULL,
    wa_user VARCHAR(100) NOT NULL,
    wa_mail VARCHAR (100) NOT NULL,
    wa_pass VARCHAR(200) NOT NULL,   
    create_dt    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	  last_login   DATETIME
) ENGINE=INNODB; 

CREATE TABLE tbl_members(
    m_id INT PRIMARY KEY AUTO_INCREMENT,
    m_name VARCHAR(100) NOT NULL,
    m_user VARCHAR(100) NOT NULL,
    m_mail VARCHAR (100) NOT NULL,
    m_pass VARCHAR(200) NOT NULL,
    isonline  VARCHAR (10) DEFAULT 'OFFLINE',   
    status  VARCHAR (1) DEFAULT 'A',    
    create_dt    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	  last_login   DATETIME
) ENGINE=INNODB;  

CREATE TABLE tbl_users(
    uid INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    user VARCHAR(100) NOT NULL,
    mail VARCHAR (100) NOT NULL,
    pass VARCHAR(200) NOT NULL,
    isonline  VARCHAR (10) DEFAULT 'OFFLINE',   
    status  VARCHAR (1) DEFAULT 'A',    
    create_dt    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	  last_login   DATETIME
) ENGINE=INNODB;   

CREATE TABLE tbl_waconfig(
  id           BIGINT NOT NULL auto_increment,
	wa_no        VARCHAR (30) NOT NULL,
	wa_owner     VARCHAR (100) NOT NULL,
  profile       VARCHAR (20),
	qr           VARCHAR (500),
	bot_mode     VARCHAR (1),
	bot_url      VARCHAR (500),
	disable_read VARCHAR (1),
	PRIMARY KEY (id)
);

CREATE TABLE tbl_tmp
	(
	tmp_cd  VARCHAR (50) NOT NULL,
	tmp_val VARCHAR (50),
	PRIMARY KEY (tmp_cd)
	);