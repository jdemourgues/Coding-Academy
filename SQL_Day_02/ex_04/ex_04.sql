SELECT LEFT(summary,92) AS "Summaries"
	FROM movies
	WHERE (ID % 2) <> 0
	LIMIT 42 OFFSET 42
;
