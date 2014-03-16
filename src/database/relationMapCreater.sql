SET SESSION FOREIGN_KEY_CHECKS=0;

/* Drop Tables */

DROP TABLE labels_subjects;
DROP TABLE informations_subjects;
DROP TABLE subjects;
DROP TABLE informations_labels;
DROP TABLE informations;
DROP TABLE labels;




/* Create Tables */

CREATE TABLE subjects
(
	-- モノID
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT '主体id : モノID',
	-- モノの名称
	name varchar(255) NOT NULL COMMENT '主体名称 : モノの名称',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '主体テーブル' DEFAULT CHARACTER SET utf8;


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


CREATE TABLE labels_subjects
(
	id int unsigned NOT NULL UNIQUE COMMENT 'ラベル_主体連携id',
	-- モノID
	subject_id int unsigned NOT NULL COMMENT '主体id : モノID',
	-- タグID
	label_id int unsigned NOT NULL COMMENT 'ラベルid : タグID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = 'ラベル_主体連携テーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE informations_subjects
(
	-- 識別id
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT '情報_モノ連携id : 識別id',
	-- 情報id
	information_id int unsigned NOT NULL COMMENT '情報id : 情報id',
	-- モノID
	subject_id int unsigned NOT NULL COMMENT '主体id : モノID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '情報_主体連携テーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE labels
(
	-- タグID
	id int unsigned NOT NULL UNIQUE AUTO_INCREMENT COMMENT 'ラベルid : タグID',
	-- タグの名称
	name varchar(255) NOT NULL COMMENT 'ラベル名称 : タグの名称',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = 'ラベルテーブル' DEFAULT CHARACTER SET utf8;


CREATE TABLE informations_labels
(
	id int unsigned NOT NULL UNIQUE COMMENT '情報_ラベルid',
	-- 情報id
	information_id int unsigned NOT NULL COMMENT '情報id : 情報id',
	-- タグID
	label_id int unsigned NOT NULL COMMENT 'ラベルid : タグID',
	-- 作成日時
	created datetime COMMENT '作成日時 : 作成日時',
	-- 変更日時
	modified datetime COMMENT '変更日時 : 変更日時',
	PRIMARY KEY (id)
) ENGINE = InnoDB COMMENT = '情報_ラベル連携テーブル' DEFAULT CHARACTER SET utf8;



/* Create Foreign Keys */

ALTER TABLE labels_subjects
	ADD FOREIGN KEY (subject_id)
	REFERENCES subjects (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_subjects
	ADD FOREIGN KEY (subject_id)
	REFERENCES subjects (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_labels
	ADD FOREIGN KEY (information_id)
	REFERENCES informations (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_subjects
	ADD FOREIGN KEY (information_id)
	REFERENCES informations (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE informations_labels
	ADD FOREIGN KEY (label_id)
	REFERENCES labels (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;


ALTER TABLE labels_subjects
	ADD FOREIGN KEY (label_id)
	REFERENCES labels (id)
	ON UPDATE RESTRICT
	ON DELETE RESTRICT
;



