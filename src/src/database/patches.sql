CREATE TABLE remediate (
        id SERIAL,
        core_standards_id text NOT NULL,
        user_id integer NOT NULL,
        PRIMARY KEY (id),
        UNIQUE(core_standards_id,user_id),
        FOREIGN KEY (core_standards_id) REFERENCES core_standards(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
);

--4.nbt.b.6

--quinones_jaceylyne
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',63);

--nick_lewandowski
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',47);

--lilo_richard
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',16);

--mejia_milogros
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',19);

--rodriques_brianna
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',24);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',22);

--breslin_luke
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',73);

--marsilio_carleghte
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',75);

--troung_donathan
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',9);

--lin_suzi
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',76);

--diaz_dan
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',45);

--tailef_sammer
--insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',);


--4.nbt.b.5

--hernandez_catherine
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',34);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',21);

--valentin_ceciliaa
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',26);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',28);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',71);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',41);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',27);

--bernardy_antonio
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',50);

--burgos_leliani
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',20);

--barret_kaylah
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',87);

--nguyen_mintai
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',46);

--negron_christina
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',17);

--ayala_jaun
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',55);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',48);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',43);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',51);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',13);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',54);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',44);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',67);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.5',49);

--4.md.a.1
--barret_kayla
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',87);
