select sub.id, sub.first_name, sub.last_name, sub.description, sub.progression, sub.inner_grade

FROM 

( select users.id, users.first_name, users.last_name, evaluations.description, evaluations.progression, evaluations.score_needed,  

COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) as not_answered, 
COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as incorrect,    
COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as correct, 

COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END) as total_answered,

ROUND(COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) / (COUNT(CASE WHEN item_attempts.transaction_code = 0 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) + COUNT(CASE WHEN item_attempts.transaction_code = 2 then 1 ELSE NULL END))::float * 100,1) as inner_grade

from evaluations_attempts 

JOIN users on evaluations_attempts.user_id=users.id 
JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id 
JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id 

where evaluations_attempts.start_time > '2016-09-10 09:28:27.777635'
	AND evaluations_attempts.evaluations_id != 1  
	AND users.room_id = 24 
	AND evaluations.progression > 0.9 
	group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, 			 evaluations.score_needed)
sub 

where sub.inner_grade > 0 AND sub.total_answered >= sub.score_needed
order by sub.last_name, sub.progression;
