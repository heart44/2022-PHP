-- pk 기능 : unique, not null, index
DROP TABLE t_user;

CREATE TABLE t_user(
	i_user INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	uid VARCHAR(20) UNIQUE NOT NULL,
	upw varCHAR(30) NOT NULL,
	nm VARCHAR(5) NOT NULL,
	gender INT UNSIGNED NOT null CHECK(gender IN (0, 1)),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP()
);

SELECT * FROM t_user;

CREATE TABLE t_board(
	i_board INT UNSIGNED AUTO_INCREMENT,
	PRIMARY KEY(i_board),
	title VARCHAR(100) NOT NULL,
	ctnt VARCHAR(2000) NOT NULL,
	i_user INT UNSIGNED NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
	FOREIGN KEY (i_user) REFERENCES t_user(i_user)
);

SELECT * FROM t_board ORDER BY i_board desc;

CREATE TABLE t_reply (
	i_re INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	i_board INT UNSIGNED NOT NULL, 
	i_user INT UNSIGNED NOT NULL,
	ctnt VARCHAR(1000) NOT NULL,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP(),
	FOREIGN KEY (i_user) REFERENCES t_user(i_user),
	FOREIGN KEY (i_board) REFERENCES t_board(i_board)
);
SELECT * FROM t_reply;

SELECT SUM(cnt) FROM cnt_db;
SELECT * FROM cnt_db;
DELETE from cnt_db;

SELECT * FROM t_board 
                WHERE title LIKE '%랄%' OR title LIKE '%마지막%';


SELECT a.*, b.nm, b.i_user FROM t_board a
INNER JOIN t_user b 
ON a.i_user = b.i_user
WHERE title LIKE "%마지막%";

SELECT * FROM t_board 
WHERE date_format(created_at, '%Y.%m.%d') = '2022.05.04';

ALTER TABLE t_user ADD profile_img VARCHAR(100) NULL;
SELECT * FROM t_user;
DESCRIBE t_user;

SELECT a.*, b.nm, b.profile_img 
                FROM t_board a, t_user b
                WHERE a.i_user = b.i_user
                ORDER BY a.i_board DESC;
                
SELECT SUM(a.rv) AS rv_cnt FROM t_reply a, t_user b 
                WHERE a.i_board = 133 and a.i_user = b.i_user
                ORDER BY i_re ASC;
                
                SELECT a.*, b.nm  FROM t_reply a, t_user b 
                WHERE a.i_board = 133 and a.i_user = b.i_user
                ORDER BY i_re ASC;
                
SELECT ctnt FROM t_board WHERE i_board=135;
