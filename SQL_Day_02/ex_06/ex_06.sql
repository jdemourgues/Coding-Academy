SELECT  title					AS 'Movie title',
	(DATEDIFF(CURDATE(),release_date))	AS 'Number of days passed'
	FROM movies
	WHERE release_date <> 0
;
