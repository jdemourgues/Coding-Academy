SELECT EXTRACT(MONTH FROM birthdate) 
	AS "month of birth"
	FROM profiles
	ORDER BY birthdate
	LIMIT 42 OFFSET 42
	;
