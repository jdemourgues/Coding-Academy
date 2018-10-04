SELECT id, genre_id, producer_id, title, summary, release_date, release_end_date, min_duration, prod_year
	FROM movies
	INTO OUTFILE "/tmp/movies.csv"
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
;
