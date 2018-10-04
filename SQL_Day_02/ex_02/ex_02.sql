SELECT COUNT(*), zipcode
	FROM profiles
	GROUP BY zipcode
	HAVING COUNT(zipcode) > 1
;
