SELECT COUNT(*) AS "Number of members",
	(FLOOR(AVG((DATEDIFF(CURDATE(), birthdate)/365.25)))) AS "Average age"
	FROM profiles
	GROUP BY (FLOOR(DATEDIFF(CURDATE(), birthdate)/365.25))
	;
