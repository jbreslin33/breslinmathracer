--add table
CREATE TABLE evaluations_items (
        id SERIAL,
        item_types_id text NOT NULL,
        evaluations_id integer NOT NULL,
	progression NUMERIC(12,10) NOT NULL default 0,
        PRIMARY KEY (id),
        FOREIGN KEY (evaluations_id) REFERENCES evaluations(id),
        FOREIGN KEY (item_types_id) REFERENCES item_types(id)
);
delete from evaluations_items;
--add prog
alter table evaluations_items add column progression NUMERIC(12,10) NOT NULL default 0;

--insert
--k_cc
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.1_1',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.1_2',25);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_1',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_2',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_3',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_4',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_5',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_6',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_7',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_8',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_9',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_10',25);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.cc.a.2_11',25);

--k.oa.a.4
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_1',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_2',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_3',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_4',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_5',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_6',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_7',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_8',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_9',26);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_21',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_22',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_23',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_24',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_25',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_26',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_27',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_28',26);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.4_29',26);

--k.oa.a.5
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_12',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_13',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_14',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_15',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_16',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_17',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_18',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_19',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_20',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_21',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_29',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_30',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_31',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_32',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_34',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_35',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_36',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_38',13);
insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_39',13);

insert into evaluations_items (item_types_id, evaluations_id) values ('k.oa.a.5_41',13);

--1.oa.b.3
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_1',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_2',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_3',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_4',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_5',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_6',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_7',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_8',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_9',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_10',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_11',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_12',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_13',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_14',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_15',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_16',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_17',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_18',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_19',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_20',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_21',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_22',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_23',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_24',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_25',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_26',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_27',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_28',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_29',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_30',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_31',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_32',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_33',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_34',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_35',29);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.b.3_36',29);


--1.oa.c.6
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_12',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_13',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_14',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_33',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_34',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_35',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_36',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_37',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_38',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_39',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_40',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_41',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_42',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_45',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_46',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_47',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_48',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_49',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_50',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_52',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_53',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_54',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_55',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_56',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_57',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_60',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_61',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_62',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_63',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_65',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_66',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_67',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_69',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_70',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_72',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_79',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_80',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_81',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_82',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_83',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_84',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_85',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_86',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_87',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_88',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_89',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_90',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_91',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_92',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_93',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_94',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_95',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_96',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_97',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_98',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_101',27);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_102',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_103',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_104',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_105',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_107',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_108',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_109',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_110',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_112',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_113',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_114',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_116',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_117',27);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.c.6_119',27);

--1_nbt
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_1',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_2',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_3',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.6_4',24);

insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_1',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_2',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_3',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_4',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_5',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_6',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_9',24);
insert into evaluations_items (item_types_id, evaluations_id) values ('1.nbt.c.4_10',24);

--2.oa.b.2
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_1',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_2',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_3',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_4',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_5',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_6',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_7',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_8',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_9',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_10',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_11',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_12',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_13',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_14',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_15',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_16',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_17',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_18',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_19',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_20',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_21',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_22',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_23',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_24',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_25',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_26',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_27',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_28',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_29',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_30',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_31',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_32',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_33',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_34',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_35',28);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.b.2_36',28);

--2.nbt
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.a.1_1',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.a.1_2',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.a.1_3',23);

insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.5_1',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.5_2',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.5_3',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.5_4',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.5_5',23);

insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.6_1',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.6_2',23);

insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_16',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_17',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_18',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_19',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_20',23);
insert into evaluations_items (item_types_id, evaluations_id) values ('2.nbt.b.7_21',23);

--3.oa.c.7
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_1',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_2',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_3',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_4',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_5',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_6',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_7',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_8',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_9',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_10',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_11',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_12',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_13',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_14',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_15',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_18',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_19',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_20',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_21',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_22',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_23',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_24',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_25',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_26',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_27',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_28',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_29',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_30',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_33',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_34',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_35',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_36',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_37',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_38',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_39',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_40',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_41',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_42',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_43',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_46',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_47',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_48',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_49',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_50',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_51',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_52',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_53',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_54',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_57',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_58',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_59',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_60',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_61',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_62',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_63',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_66',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_67',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_68',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_69',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_70',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_73',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_74',12);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_75',12);

insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_78',12);

--3.nbt
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_1',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_2',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_3',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_4',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_5',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_6',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_7',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_8',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_9',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_10',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_11',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_12',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_13',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.1_14',22);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.nbt.a.3_1',22);


--2
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_1',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_2',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_4',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_6',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_8',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_10',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_12',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_14',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_3',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_5',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_7',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_9',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_11',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_13',3);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_15',3);

--3
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_3',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_18',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_19',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_21',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_23',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_25',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_27',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_29',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_2',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_20',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_22',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_24',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_26',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_28',4);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_30',4);

--4
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_5',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_20',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_33',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_34',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_36',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_38',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_40',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_42',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_4',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_19',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_35',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_37',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_39',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_41',5);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_43',5);

--5
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_7',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_22',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_35',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_46',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_47',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_49',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_51',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_53',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_6',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_21',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_34',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_48',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_50',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_52',6);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_54',6);

--6
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_9',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_24',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_37',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_48',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_57',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_58',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_60',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_62',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_8',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_23',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_36',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_47',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_59',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_61',7);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_63',7);

--7
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_11',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_26',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_39',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_50',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_59',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_66',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_67',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_69',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_10',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_25',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_38',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_49',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_58',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_68',8);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_70',8);

--8
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_13',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_28',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_41',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_52',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_61',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_68',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_73',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_74',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_12',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_27',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_40',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_51',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_60',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_67',9);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_75',9);

--9
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_15',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_30',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_43',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_54',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_63',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_70',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_75',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_78',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_14',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_29',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_42',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_53',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_62',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_69',10);
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.c.7_74',10);

--4.oa.b.4
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_2',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_3',11);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_6',11);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_7',11);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_8',11);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_9',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_10',11);

insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_14',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_15',11);

insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_16',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_17',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_18',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_19',11);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_20',11);

--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_21',11);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_22',11);

--insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_23',11);

--4.nbt.b.4
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_1',14);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_2',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_3',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_4',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_5',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_6',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_7',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_8',14);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_9',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_10',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_11',14);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_12',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_13',14);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.4_14',14);

--4.nbt.b.5
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.5_1',20);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.5_2',20);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.5_3',20);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.5_4',20);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.5_5',20);

--4.nbt.b.6
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_1',21);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_4',21);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_5',21);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_6',21);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_7',21);
--insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_8',21);

insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_9',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_10',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_11',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_12',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_13',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_14',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_15',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_16',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_17',21);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nbt.b.6_18',21);

--4.nf.b.3.c
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_1',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_2',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_3',30);

insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_6',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_7',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_8',30);

insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_11',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_12',30);
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.b.3.c_13',30);

--5.oa.a.1
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_1',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_3',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_6',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_9',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_12',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_15',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_18',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_20',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_21',31);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_22',31);

--5.nbt.b.5
--insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_1',32);
--insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_2',32);
--insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_3',32);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_4',32);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_5',32);
--insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_4',32);
--insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.5_5',32);

--5.nbt.b.6
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_1',33);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_2',33);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_3',33);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_4',33);

--5.nbt.b.7
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_1',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_3',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_6',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_8',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_12',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_14',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_17',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_27',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_37',34);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_47',34);

--5.nf
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_1',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_2',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_3',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_4',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_5',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_6',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_7',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_8',35);
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.1_9',35);

--6.rp
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_2',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_3',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_6',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_7',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_8',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_9',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_10',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_11',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_12',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_13',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_14',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_15',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_16',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.1_17',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.2_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.2_2',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.2_3',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.2_4',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.2_6',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.a_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.a_2',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_2',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_3',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_4',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_5',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.b_6',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.c_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.c_2',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.c_3',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.c_4',36);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.d_1',36);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.rp.a.3.d_2',36);

--6.ns
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_4',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_5',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.a.1_6',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.2_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.2_2',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_4',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_5',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_6',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_7',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_8',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.3_9',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.4_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.4_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.4_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.4_4',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.b.4_5',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.5_1',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.b_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.b_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.b_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.b_4',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.c_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.c_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.c_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.6.c_4',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.a_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.a_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.a_4',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.b_1',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.c_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.c_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.c_3',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.7.c_4',37);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.8_1',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.8_2',37);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ns.c.8_3',37);

--insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_11',38);
--6.ee
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_8',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_9',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.1_10',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.a_8',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_8',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_9',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.b_10',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_8',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_9',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_10',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_11',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_12',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_13',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_14',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_15',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_16',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_17',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_18',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_19',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_20',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.2.c_21',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.a.3_6',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.5_8',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.6_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.6_2',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_8',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_9',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_10',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_11',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_12',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.b.7_13',38);

insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_1',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_2',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_3',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_4',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_5',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_6',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_7',38);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.ee.c.9_8',38);

--6.g
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.1_1',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.1_2',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_1',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_2',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_3',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_4',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_5',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_6',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_7',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_8',39);
insert into evaluations_items (item_types_id, evaluations_id) values ('6.g.a.2_9',39);


--5 = 14
--4 = 10
--3 = 6 
--2 = 6

--terrnova all
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_21',16); --1
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_6',16); --2
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_20',16); --3
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.a.1_11',16); --4
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.3_13',16); --5
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_23',16); --6
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.3_14',16); --7
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_21',16); --8


insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_22',16); --9
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.2_26',16); --10
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_23',16); --11
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_24',16); --12
insert into evaluations_items (item_types_id, evaluations_id) values ('3.md.b.4_1',16); --13
insert into evaluations_items (item_types_id, evaluations_id) values ('4.g.a.2_29',16); --14
insert into evaluations_items (item_types_id, evaluations_id) values ('3.md.b.3_1',16); --15
insert into evaluations_items (item_types_id, evaluations_id) values ('3.g.a.1_1',16); --16


insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.b.3_8',16); --17
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.a.1_12',16); --18
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_24',16); --19
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_25',16); --20
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_25',16); --21
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_26',16); --22
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_7',16); --24
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_8',16); --25

insert into evaluations_items (item_types_id, evaluations_id) values ('4.md.a.2_26',16); --26
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.c.5_16',16); --28
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_23',16); --29
insert into evaluations_items (item_types_id, evaluations_id) values ('4.md.a.2_27',16); --30
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_24',16); --31
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.b.3_9',16); --33
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_9',16); --34
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.c.5.a_4',16); --35

insert into evaluations_items (item_types_id, evaluations_id) values ('5.g.a.1_6',16); --36
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_22',16); --37
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.a.1_16',16); --38
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.2_9',16); --39
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.c.5.b_8',16); --40
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_23',16); --41


--insert eval
update evaluations set description = 'Terra Nova' where id = 16;
insert into evaluations (id,description,questions,score_needed,progression) values (1002,'Terra Nova 2',10,10,0.42);
insert into evaluations (id,description,questions,score_needed,progression) values (1003,'Terra Nova 3',10,10,0.42);
insert into evaluations (id,description,questions,score_needed,progression) values (1004,'Terra Nova 4',10,10,0.42);
insert into evaluations (id,description,questions,score_needed,progression) values (1005,'Terra Nova 5',10,10,0.42);

--terrnova 2 
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_21',1002); --1
insert into evaluations_items (item_types_id, evaluations_id) values ('1.oa.a.1_11',1002); --4
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_22',1002); --9
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_23',1002); --11
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_24',1002); --19
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_25',1002); --20
insert into evaluations_items (item_types_id, evaluations_id) values ('2.oa.a.1_26',1002); --22

--terranova 3
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_6',1003); --2
insert into evaluations_items (item_types_id, evaluations_id) values ('3.md.b.4_1',1003); --13
insert into evaluations_items (item_types_id, evaluations_id) values ('3.md.b.3_1',1003); --15
insert into evaluations_items (item_types_id, evaluations_id) values ('3.g.a.1_1',1003); --16
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_7',1003); --24
insert into evaluations_items (item_types_id, evaluations_id) values ('3.oa.a.3_8',1003); --25

--terranova 4 
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.3_13',1004); --5
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.3_14',1004); --7
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.a.2_26',1004); --10
insert into evaluations_items (item_types_id, evaluations_id) values ('4.g.a.2_29',1004); --14
insert into evaluations_items (item_types_id, evaluations_id) values ('4.nf.a.1_12',1004); --18
insert into evaluations_items (item_types_id, evaluations_id) values ('4.md.a.2_26',1004); --26
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.c.5_16',1004); --28
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_23',1004); --29
insert into evaluations_items (item_types_id, evaluations_id) values ('4.md.a.2_27',1004); --30
insert into evaluations_items (item_types_id, evaluations_id) values ('4.oa.b.4_24',1004); --31

--terranova 5
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_20',1005); --3
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_23',1005); --6
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_21',1005); --8
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_24',1005); --12
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.b.3_8',1005); --17
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.a.1_25',1005); --21
insert into evaluations_items (item_types_id, evaluations_id) values ('5.oa.b.3_9',1005); --33
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.6_9',1005); --34
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.c.5.a_4',1005); --35
insert into evaluations_items (item_types_id, evaluations_id) values ('5.g.a.1_6',1005); --36
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_22',1005); --37
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.a.1_16',1005); --38
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nf.a.2_9',1005); --39
insert into evaluations_items (item_types_id, evaluations_id) values ('5.md.c.5.b_8',1005); --40
insert into evaluations_items (item_types_id, evaluations_id) values ('5.nbt.b.7_23',1005); --41


--terra nova update
--update evaluations SET (questions,score_needed) = (8,8) where description = 'TerraNovaTest';

alter table evaluations add grade_a integer default 90;  --cyan 
alter table evaluations add grade_b integer default 80;  --green 
alter table evaluations add grade_c integer default 70;  --yellow 
alter table evaluations add grade_d integer default 60;  --orange 
alter table evaluations add grade_f integer default 59;  --red fail 

--tables
--izzy 
--green 100
--yellow 90 
--red 80 



update evaluations SET (questions,score_needed,standard_jump_id,progression) = (13,13,'k.oa.a.4',1) where description = 'k_cc';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (18,18,'k.oa.a.5',2) where description = 'k_oa_a_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (20,20,'1.oa.a.1',3) where description = 'k_oa_a_5';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'1.oa.c.6',4) where description = '1_oa_b_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (70,70,'1.oa.c.6',5) where description = '1_oa_c_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (12,12,'2.oa.a.1',6) where description = '1_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression) = (36,36,'2.nbt.a.1',7) where description = '2_oa_b_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (16,16,'3.oa.a.1',8) where description = '2_nbt';

update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (64,64,'3.nbt.a.1',9,100,88,76,64,59) where description = '3_oa_c_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (15,15,'4.oa.a.1',10) where description = '3_nbt';


update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'4.nbt.b.4',11,71,68,65,62,59) where description = '4_oa_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'4.nbt.b.5',12,79,74,69,64,59) where description = '4_nbt_b_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (5,5,'4.nbt.b.6',13,80,75,70,65,59) where description = '4_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'4.nf.b.3.c',14,79,74,69,64,59) where description = '4_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'5.oa.a.1',15,80,75,70,65,59) where description = '4_nf_b_3_c';


update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'5.nbt.b.5',16,69,67,65,63,59) where description = '5_oa_a_1';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (2,2,'5.nbt.b.6',17,80,75,70,65,59) where description = '5_nbt_b_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression) = (4,4,'5.nbt.b.7',18) where description = '5_nbt_b_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'5.nf.a.1',19,80,75,70,65,59) where description = '5_nbt_b_7';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (9,9,'6.rp.a.1',20,80,75,70,65,59) where description = '5_nf_a_1';


--keep runing if you want for update
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'6.ns.a.1',21,80,75,70,65,59) where description = '6_rp';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'6.ee.a.1',22,80,75,70,65,59) where description = '6_ns';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (10,10,'6.g.a.1',23,80,75,70,65,59) where description = '6_ee';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (11,11,'6.sp.a.1',24,80,75,70,65,59) where description = '6_g';
--so it cant be completed set it too high...
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (13,13,'7.rp.a.1',25,80,75,70,65,59) where description = '6_sp';


--tables
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.1,100,88,76,64,59) where description = 'timestables_5';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.2,100,88,76,64,59) where description = 'timestables_2';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.3,100,88,76,64,59) where description = 'timestables_4';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.4,100,88,76,64,59) where description = 'timestables_8';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.5,100,88,76,64,59) where description = 'timestables_3';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.6,100,88,76,64,59) where description = 'timestables_6';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.7,100,88,76,64,59) where description = 'timestables_9';
update evaluations SET (questions,score_needed,standard_jump_id,progression,grade_a,grade_b,grade_c,grade_d,grade_f) = (15,15,'',8.8,100,88,76,64,59) where description = 'timestables_7';



--r2 k 
update users set core_grades_id = 1 where room_id = 7;

--r4 g1
update users set core_grades_id = 2 where room_id = 8;

--r5 g1
update users set core_grades_id = 2 where room_id = 23;

--r6 k 
update users set core_grades_id = 1 where room_id = 9;

--r7 pk 
update users set core_grades_id = 1 where room_id = 10;

--r8 pk 
update users set core_grades_id = 1 where room_id = 6;

--r21 g7
update users set core_grades_id = 8 where room_id = 22;

--r22 g7
update users set core_grades_id = 8 where room_id = 19;

--r23 g6 
update users set core_grades_id = 7 where room_id = 24;

--r24 g8
update users set core_grades_id = 9 where room_id = 25;

--r25 g6
update users set core_grades_id = 7 where room_id = 26;

--r28 g8
update users set core_grades_id = 9 where room_id = 18;

--r31 g3
update users set core_grades_id = 4 where room_id = 5;

--r32 g4
update users set core_grades_id = 5 where room_id = 15;

--r33 g5
update users set core_grades_id = 6 where room_id = 1;

--r34 g5
update users set core_grades_id = 6 where room_id = 2;

--r35 g4
update users set core_grades_id = 5 where room_id = 16;

--r36 g3
update users set core_grades_id = 4 where room_id = 17;

--r37 g2
update users set core_grades_id = 3 where room_id = 14;

--r39 g2
update users set core_grades_id = 3 where room_id = 13;

--RR8
update users set core_grades_id = 9 where room_id = 107;

--RR7
update users set core_grades_id = 8 where room_id = 106;

--RR6
update users set core_grades_id = 7 where room_id = 105;

--RR5
update users set core_grades_id = 6 where room_id = 104;

--RR4
update users set core_grades_id = 5 where room_id = 103;

--RR3
update users set core_grades_id = 4 where room_id = 108;

--begin temp 
--insert into rooms (name,school_id) VALUES ('AM3',2);
--insert into rooms (name,school_id) VALUES ('AM7',2);
--end temp

--AM3
--update users set core_grades_id = 4 where room_id = 109;

--AM7
--update users set core_grades_id = 8 where room_id = 110;

--update rooms
--update rooms set name = 'AM2' where id = 109;

--update users set score = 0;
--update users set core_standards_overide_id = '';
--update users set core_standards_id = 'k.cc.a.1';
