--assessments
ALTER TABLE evaluations ALTER COLUMN description set NOT NULL;
--ALTER TABLE evaluations ALTER COLUMN description set UNIQUE;
ALTER TABLE evaluations ADD CONSTRAINT unique_description UNIQUE (description);
insert into evaluations (description) values ('assessment');
