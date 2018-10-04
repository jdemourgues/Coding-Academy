select min_duration AS "Duration of the shortest movie" from movies WHERE min_duration<>0 AND  min_duration IS NOT NULL ORDER BY min_duration ASC LIMIT 1;
