insert into teams(name) values ('Math Magicians');
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

