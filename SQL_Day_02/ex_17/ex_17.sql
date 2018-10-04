SET @temp_producer_id = 
	(SELECT producer_id
	FROM movies, producers
	WHERE producers.id = movies.producer_id AND producers.name LIKE '%film'
	GROUP BY producers.id
	ORDER BY count(title) LIMIT 1)
;
UPDATE movies
	SET producer_id = @temp_producer_id
	WHERE producer_id IS NULL
;
