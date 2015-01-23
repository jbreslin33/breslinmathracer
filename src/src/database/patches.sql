CREATE TABLE remediate (
        id SERIAL,
        item_types_id text NOT NULL,
        user_id integer NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (item_types_id) REFERENCES item_types(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
);

insert into remediate (item_types_id,user_id) values ('4.oa.a.1_1',14);
