select distinct sub.id, sub.first_name, sub.last_name, sub.description, sub.progression, sub.case FROM ( select users.id, users.first_name, users.last_name, evaluations.description, evaluations.progression, case when count(*) >= evaluations.score_needed THEN 1 ELSE 0 END from evaluations_attempts join users on evaluations_attempts.user_id=users.id JOIN item_attempts ON item_attempts.evaluations_attempts_id=evaluations_attempts.id JOIN evaluations ON evaluations.id=evaluations_attempts.evaluations_id where evaluations_attempts.start_time > '2016-09-10 09:28:27.777635' AND evaluations_attempts.evaluations_id != 1 AND users.room_id = 1 AND item_attempts.transaction_code = 1 AND evaluations.progression > 0.9 group by evaluations_attempts, evaluations.progression, evaluations.description, users.id, users.first_name, users.last_name, evaluations.score_needed) sub WHERE sub.case = 1 order by sub.last_name, sub.progression;  
