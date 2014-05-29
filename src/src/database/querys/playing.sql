select start_time, first_name, last_name, levelattempts.level, transaction_code from levelattempts join users on levelattempts.user_id=users.id order by start_time desc;
