LOAD DATA LOCAL INFILE '/temp/jobs.csv'
	INTO TABLE jobs
	FIELDS TERMINATED BY ','
	ENCLOSED BY '"'
	LINES TERMINATED BY '\n'
	IGNORE 1 LINES
	(@id, name, salary, executive)
;
