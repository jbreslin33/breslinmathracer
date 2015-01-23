CREATE TABLE remediate (
        id SERIAL,
        core_standards_id text NOT NULL,
        user_id integer NOT NULL,
        PRIMARY KEY (id),
        UNIQUE(core_standards_id,user_id),
        FOREIGN KEY (core_standards_id) REFERENCES core_standards(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
);

insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',49);
