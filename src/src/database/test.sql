; WITH cte AS
( SELECT *, ROW_NUMBER() OVER (PARTITION BY question_id ORDER BY answer_attempt_time DESC) AS rn FROM questions_attempts
 WHERE answer_time > 2000)
SELECT * FROM cte WHERE rn = 1;
