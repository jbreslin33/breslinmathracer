CREATE TABLE remediate (
        id SERIAL,
        core_standards_id text NOT NULL,
        user_id integer NOT NULL,
        PRIMARY KEY (id),
        UNIQUE(core_standards_id,user_id),
        FOREIGN KEY (core_standards_id) REFERENCES core_standards(id),
        FOREIGN KEY (user_id) REFERENCES users(id)
);
ALTER TABLE users ADD CONSTRAINT nodups UNIQUE (username);
ALTER TABLE users ADD alltimetwo integer NOT NULL default 0;
ALTER TABLE users ADD alltimethree integer NOT NULL default 0;
ALTER TABLE users ADD alltimefour integer NOT NULL default 0;
ALTER TABLE users ADD alltimefive integer NOT NULL default 0;
ALTER TABLE users ADD alltimesix integer NOT NULL default 0;
ALTER TABLE users ADD alltimeseven integer NOT NULL default 0;
ALTER TABLE users ADD alltimeeight integer NOT NULL default 0;
ALTER TABLE users ADD alltimenine integer NOT NULL default 0;
ALTER TABLE users ADD alltimeten integer NOT NULL default 0;

--4.oa.a.1

--barret_kaylah
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',87);

--bernardy_antonio
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',50);

--burgos_leliani
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',13);

--delorbe_jefferson
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',52);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',28);

--hernandez_catherine
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',34);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',71);

--lilo_richard
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',16);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',54);

--marsilio_carleght
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',75);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',49);

--mejia_milogros
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',41);

--negron_christina
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',17);

--nguyen_mintai
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',46);

--nolasco_charil
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',33);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',43);

--qiang_wei
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',15);

--quinones_jaceylyne
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',63);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',48);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',44);

--rodriques_brianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',27);

--tailef_sammer
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',21);

--valentin_ceciliaa
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',26);

--vu_anthony
insert into remediate (core_standards_id,user_id) values ('4.oa.a.1',31);

--4.oa.a.2

--barret_kaylah
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',87);

--bernardy_antonio
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',50);

--burgos_leliani
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',13);

--delorbe_jefferson
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',52);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',28);

--hernandez_catherine
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',34);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',71);

--lilo_richard
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',16);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',54);

--marsilio_carleght
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',75);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',49);

--mejia_milogros
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',41);

--negron_christina
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',17);

--nguyen_mintai
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',46);

--nolasco_charil
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',33);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',43);

--qiang_wei
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',15);

--quinones_jaceylyne
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',63);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',48);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',44);

--rodriques_brianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',27);

--tailef_sammer
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',21);

--valentin_ceciliaa
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',26);

--vu_anthony
insert into remediate (core_standards_id,user_id) values ('4.oa.a.2',31);

--4.oa.a.2

--barret_kaylah
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',87);

--bernardy_antonio
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',50);

--burgos_leliani
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',13);

--delorbe_jefferson
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',52);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',28);

--hernandez_catherine
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',34);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',71);

--lilo_richard
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',16);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',54);

--marsilio_carleght
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',75);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',49);

--mejia_milogros
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',41);

--negron_christina
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',17);

--nguyen_mintai
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',46);

--nolasco_charil
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',33);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',43);

--qiang_wei
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',15);

--quinones_jaceylyne
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',63);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',48);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',44);

--rodriques_brianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',27);

--tailef_sammer
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',21);

--valentin_ceciliaa
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',26);

--vu_anthony
insert into remediate (core_standards_id,user_id) values ('4.oa.a.3',31);



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

--4.nbt.b.6

--alomte_catherine
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',34);

--barret_kaylah
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',87);

--bernardy_antonio
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',50);

--breslin_luke
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',73);

--burgos_leliani
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',13);

--diaz_dan
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',45);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',28);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',71);

--lewandowski_nick
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',47);

--lilo_richard
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',16);

--lin_suzi
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',76);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',54);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',49);

--marsilio_carleghte
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',75);

--mejia_milogros
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',41);

--negron_christina
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',17);

--nguyen_mintai
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',46);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',43);

--quinones_jaceylyne
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',63);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',48);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',44);

--rodriques_brianna
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',27);

--tailef_sammer
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',21);

--troung_donathan
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',9);

--valentin_ceciliaa
insert into remediate (core_standards_id,user_id) values ('4.nbt.b.6',26);


--4.md.a.1

--almonte_catherine
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',34);

--ayala_juan
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',55);

--barrett_kayla
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',87);

--bernady_antonio
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',50);

--breslin_luke
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',73);

--burgos_leilani
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',13);

--delorbe_jefferson
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',52);

--diaz_daniel
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',45);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',28);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',71);

--jimenez_isael
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',29);

--le_tam
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',74);

--le_vivian
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',72);

--le_jenny
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',30);

--lewandowski_nick
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',47);

--lillo_richard
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',7);

--lin_suzi
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',76);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',54);

--marsillio_carleigh
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',75);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',49);

--mejia_milagros
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',41);

--nguyen_minthai
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',46);

--nguyen_scott
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',2);

--nolasco_charil
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',33);

--peralta_clangerys
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',53);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',43);

--quinones_jocelyne
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',63);

--qiang_wei
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',15);

--ramos_brian
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',1);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',44);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',48);

--rodriquez_brianna
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',27);

--taileaf_saimeer
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',21);

--truong_donathan
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',9);

--valentin_cecilia
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',26);

--velez_alexiander
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',70);

--vu_anthony
insert into remediate (core_standards_id,user_id) values ('4.md.a.1',31);

--4.md.a.2

--almonte_catherine
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',34);

--barrett_kayla
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',87);

--bernady_antonio
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',50);

--breslin_luke
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',73);

--burgos_leilani
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',20);

--collazo_miguel
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',13);

--delorbe_jefferson
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',52);

--diaz_daniel
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',45);

--dowling_desmond
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',51);

--fred_fabiana
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',28);

--gibson_reece
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',71);

--jimenez_isael
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',29);

--le_tam
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',74);

--le_vivian
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',72);

--le_jenny
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',30);

--lewandowski_nick
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',47);

--lillo_richard
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',7);

--lin_suzi
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',76);

--lopez_ashanti
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',22);

--lugo_israel
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',54);

--marsillio_carleigh
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',75);

--martinez_christopher
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',49);

--mejia_milagros
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',19);

--montiel_valerie
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',41);

--nguyen_minthai
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',46);

--nguyen_scott
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',2);

--nolasco_charil
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',33);

--peralta_clangerys
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',53);

--portilla_juliza
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',43);

--quinones_jocelyne
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',63);

--qiang_wei
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',15);

--ramos_brian
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',1);

--rivera_jayden
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',44);

--rivera_ashley
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',48);

--rodriquez_brianna
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',24);

--santiago_abrianna
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',67);

--serrano_christopher
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',27);

--taileaf_saimeer
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',62);

--terrero_adrian
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',21);

--truong_donathan
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',9);

--valentin_cecilia
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',26);

--velez_alexiander
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',70);

--vu_anthony
insert into remediate (core_standards_id,user_id) values ('4.md.a.2',31);


