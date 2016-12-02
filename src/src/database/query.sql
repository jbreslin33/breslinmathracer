select distinct sub.id, sub.first_name, sub.last_name, sub.description, sub.progression FROM ( select users.id, users.first_name, users.last_name, evaluations.description, evaluations.progression, evaluations.score_needed,      COUNT(CASE WHEN item_attempts.transaction_code != 1 then 1 ELSE NULL END) as "incorrect",
    COUNT(CASE WHEN item_attempts.transaction_code = 1 then 1 ELSE NULL END) as "correct"   from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '2016-09-10 09:28:27.777635' AND evaluations_attempts.evaluations_id != 1 AND users.room_id = 1 AND evaluations.progression > 0.9 group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations.score_needed) sub WHERE sub.incorrect = 0 AND sub.correct >= sub.score_needed order by sub.last_name, sub.progression;  
