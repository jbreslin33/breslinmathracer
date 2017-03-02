select evaluations_attempts.user_id, evaluations_attempts.teammate_id from evaluations_attempts join users on evaluations_attempts.user_id=users.id order by evaluations_attempts.start_time desc;
