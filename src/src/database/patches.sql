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
--everyone but jenny

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

