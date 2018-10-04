SELECT title AS 'Movie title'
	FROM movies
	WHERE LEFT(title,1) >= 'O' AND LEFT(title,1) <= 'T'
	ORDER BY title
;
