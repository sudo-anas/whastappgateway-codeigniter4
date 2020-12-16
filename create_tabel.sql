DROP TABLE IF EXISTS web_user;

CREATE TABLE `web_user` (
  `id` bigint(20) PRIMARY KEY NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_no` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bot_mode` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bot_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disable_read` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isonline` enum('TRUE','FALSE') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Y','N','B') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_wa` enum('CONNECTED','DISCONNECTED','DISABLED') COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelakses` enum('Admin','Users') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS tmp;

CREATE TABLE tmp
	(
	tmp_cd  VARCHAR (50) NOT NULL,
	tmp_val VARCHAR (50),
	PRIMARY KEY (tmp_cd)
	);

DROP TABLE IF EXISTS sent;

CREATE TABLE sent
	(
	id       BIGINT NOT NULL,
	wa_mode  INT,
	wa_no    VARCHAR (200) NOT NULL,
	wa_text  VARCHAR (2000) NOT NULL,
	wa_media VARCHAR (500),
	wa_file  VARCHAR (500),
	wa_time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	status   VARCHAR (5),
	PRIMARY KEY (id, wa_time)
	);

DROP TABLE IF EXISTS outbox;


CREATE TABLE outbox
	(
	id       BIGINT NOT NULL auto_increment,
	wa_mode  INT,
	wa_no    VARCHAR (200) NOT NULL,
	wa_text  VARCHAR (2000) NOT NULL,
	wa_media VARCHAR (500),
	wa_file  VARCHAR (500),
	wa_time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
	);
 
DROP TABLE IF EXISTS autorespon;

CREATE TABLE autorespon
	(
	keyword VARCHAR (100) NOT NULL,
	answer  TEXT,
	logic   VARCHAR (1),
	PRIMARY KEY (keyword)
	);


DROP TABLE IF EXISTS inbox;

CREATE TABLE inbox
	(
	id      BIGINT NOT NULL auto_increment,
	wa_no   VARCHAR (200) NOT NULL,
	sub_no  VARCHAR (200),
	wa_text VARCHAR (2000) NOT NULL,
	wa_time DATETIME NOT NULL,
	status  VARCHAR (5),
	PRIMARY KEY (id),
	KEY id (id)
	);

DROP TABLE IF EXISTS multi;

CREATE TABLE multi
	(
	id        BIGINT NOT NULL auto_increment,
	tipe      VARCHAR (1),
	profil    VARCHAR (20),
	wa_mode   INT,
	wa_no     VARCHAR (200) NOT NULL,
	sub_no    VARCHAR (200),
	wa_text   VARCHAR (2000) NOT NULL,
	wa_media  VARCHAR (500),
	wa_file   VARCHAR (500),
	wa_time   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	id_outbox BIGINT,
	status    VARCHAR (20),
	PRIMARY KEY (id)
	);



ALTER DATABASE wagw CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
ALTER TABLE outbox CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE multi CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;



