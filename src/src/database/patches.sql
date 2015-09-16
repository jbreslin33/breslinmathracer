alter table teams add school_id integer;
alter table teams add FOREIGN KEY(school_id) references schools(id);
update teams set school_id = 1;

--MATCHES
CREATE TABLE matches (
        id SERIAL,
        start_time timestamp,
        end_time timestamp,
        PRIMARY KEY (id)
);

--TEAM_MATCH
CREATE TABLE teams_matches (
        id SERIAL,
        matches_id integer NOT NULL,
        team_id integer NOT NULL,
        score integer NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (matches_id) REFERENCES matches(id),
        FOREIGN KEY (team_id) REFERENCES teams(id)
);

