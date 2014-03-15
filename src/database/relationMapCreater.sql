SET SESSION FOREIGN_KEY_CHECKS=0;

/* Drop Tables */

DROP TABLE objects_tags;
DROP TABLE informations_objects;
DROP TABLE objects;
DROP TABLE informations_tags;
DROP TABLE informations;
DROP TABLE tags;




/* Create Tables */

CREATE TABLE objects
(
	-- モノID
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'モノid : モノID',
	-- モノの名称
	name varchar(255) NOT NULL COMMENT 'モノ名称 : モノの名称',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = 'モノテーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE informations_objects
(
	-- 識別id
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT '情報_モノ連携id : 識別id',
	-- 情報id
	information_id int unsigned NOT NULL COMMENT '情報id : 情報id',
	-- モノID
	object_id int unsigned NOT NULL COMMENT 'モノid : モノID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '情報_モノ連携テーブル' DEFAULT CHARACTER SET utf8;


-- 情報テーブル
CREATE TABLE informations
(
	-- 情報id
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT '情報id : 情報id',
	-- 情報の概要
	summary varchar(255) NOT NULL COMMENT '概要 : 情報の概要',
	-- 説明
	description text NOT NULL COMMENT '説明 : 説明',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '情報テーブル : 情報テーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE informations_tags
(
	id int unsigned NOT NULL UNIQUE COMMENT '情報_タグid',
	-- 情報id
	information_id int unsigned NOT NULL COMMENT '情報id : 情報id',
	-- タグID
	tag_id int unsigned NOT NULL COMMENT 'タグid : タグID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '情報_タグ連携テーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE objects_tags
(
	id int unsigned NOT NULL UNIQUE COMMENT 'モノ_タグ連携id',
	-- モノID
	object_id int unsigned NOT NULL COMMENT 'モノid : モノID',
	-- タグID
	tag_id int unsigned NOT NULL COMMENT 'タグid : タグID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = 'モノ_タグ連携テーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE tags
(
	-- タグID
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'タグid : タグID',
	-- タグの名称
	name varchar(255) NOT NULL COMMENT 'タグ名称 : タグの名称',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = 'タグテーブル' DEFAULT CHARACTER SET utf8;



/* Create Foreign Keys */

ALTER TABLE objects_tags
	ADD FOREIGN KEY (object_id)
	REFERENCES objects (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_objects
	ADD FOREIGN KEY (object_id)
	REFERENCES objects (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_tags
	ADD FOREIGN KEY (information_id)
	REFERENCES informations (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_objects
	ADD FOREIGN KEY (information_id)
	REFERENCES informations (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE objects_tags
	ADD FOREIGN KEY (tag_id)
	REFERENCES tags (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_tags
	ADD FOREIGN KEY (tag_id)
	REFERENCES tags (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



