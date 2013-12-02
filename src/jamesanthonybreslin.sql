PGDMP     ;    	                q            jamesanthonybreslin    9.1.9    9.1.9 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    31227    jamesanthonybreslin    DATABASE     �   CREATE DATABASE jamesanthonybreslin WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';
 #   DROP DATABASE jamesanthonybreslin;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    6            �           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    6            �            3079    11676    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    205            �            1259    73938    clusters    TABLE     N   CREATE TABLE clusters (
    id integer NOT NULL,
    cluster text NOT NULL
);
    DROP TABLE public.clusters;
       public         postgres    false    6            �            1259    73944    clusters_domains_grades    TABLE     �   CREATE TABLE clusters_domains_grades (
    id integer NOT NULL,
    cluster_id integer NOT NULL,
    domain_grade_id integer NOT NULL
);
 +   DROP TABLE public.clusters_domains_grades;
       public         postgres    false    6            �            1259    74009    clusters_domains_grades_id_seq    SEQUENCE     �   CREATE SEQUENCE clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.clusters_domains_grades_id_seq;
       public       postgres    false    6    176            �           0    0    clusters_domains_grades_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE clusters_domains_grades_id_seq OWNED BY clusters_domains_grades.id;
            public       postgres    false    196            �            1259    74007    clusters_id_seq    SEQUENCE     q   CREATE SEQUENCE clusters_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.clusters_id_seq;
       public       postgres    false    6    175            �           0    0    clusters_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE clusters_id_seq OWNED BY clusters.id;
            public       postgres    false    195            �            1259    73926    domains    TABLE     L   CREATE TABLE domains (
    id integer NOT NULL,
    domain text NOT NULL
);
    DROP TABLE public.domains;
       public         postgres    false    6            �            1259    73935    domains_grades    TABLE     f   CREATE TABLE domains_grades (
    id integer NOT NULL,
    domain_id integer,
    grade_id integer
);
 "   DROP TABLE public.domains_grades;
       public         postgres    false    6            �            1259    74003    domains_grades_id_seq    SEQUENCE     w   CREATE SEQUENCE domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.domains_grades_id_seq;
       public       postgres    false    6    174            �           0    0    domains_grades_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE domains_grades_id_seq OWNED BY domains_grades.id;
            public       postgres    false    193            �            1259    74005    domains_id_seq    SEQUENCE     p   CREATE SEQUENCE domains_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.domains_id_seq;
       public       postgres    false    172    6            �           0    0    domains_id_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE domains_id_seq OWNED BY domains.id;
            public       postgres    false    194            �            1259    73932    domains_subjects    TABLE     c   CREATE TABLE domains_subjects (
    domain_id integer NOT NULL,
    subject_id integer NOT NULL
);
 $   DROP TABLE public.domains_subjects;
       public         postgres    false    6            �            1259    73863 	   error_log    TABLE     �   CREATE TABLE error_log (
    id integer NOT NULL,
    error text,
    error_time timestamp without time zone,
    username text
);
    DROP TABLE public.error_log;
       public         postgres    false    6            �            1259    73989    error_log_id_seq    SEQUENCE     r   CREATE SEQUENCE error_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.error_log_id_seq;
       public       postgres    false    6    161            �           0    0    error_log_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE error_log_id_seq OWNED BY error_log.id;
            public       postgres    false    186            �            1259    73973    games    TABLE     H   CREATE TABLE games (
    id integer NOT NULL,
    game text NOT NULL
);
    DROP TABLE public.games;
       public         postgres    false    6            �            1259    73984    games_attempts    TABLE     F  CREATE TABLE games_attempts (
    id integer NOT NULL,
    game_attempt_time_start timestamp without time zone,
    game_attempt_time_end timestamp without time zone,
    user_id integer NOT NULL,
    level_id double precision NOT NULL,
    score integer DEFAULT 0 NOT NULL,
    time_warning boolean DEFAULT false NOT NULL
);
 "   DROP TABLE public.games_attempts;
       public         postgres    false    2047    2048    6            �            1259    74025    games_attempts_id_seq    SEQUENCE     w   CREATE SEQUENCE games_attempts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.games_attempts_id_seq;
       public       postgres    false    185    6            �           0    0    games_attempts_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE games_attempts_id_seq OWNED BY games_attempts.id;
            public       postgres    false    204            �            1259    74021    games_id_seq    SEQUENCE     n   CREATE SEQUENCE games_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.games_id_seq;
       public       postgres    false    183    6            �           0    0    games_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE games_id_seq OWNED BY games.id;
            public       postgres    false    202            �            1259    73981    games_levels    TABLE     }   CREATE TABLE games_levels (
    id integer NOT NULL,
    game_id integer NOT NULL,
    level_id double precision NOT NULL
);
     DROP TABLE public.games_levels;
       public         postgres    false    6            �            1259    74023    games_levels_id_seq    SEQUENCE     u   CREATE SEQUENCE games_levels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.games_levels_id_seq;
       public       postgres    false    6    184            �           0    0    games_levels_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE games_levels_id_seq OWNED BY games_levels.id;
            public       postgres    false    203            �            1259    73914    grades    TABLE     A   CREATE TABLE grades (
    id integer NOT NULL,
    grade text
);
    DROP TABLE public.grades;
       public         postgres    false    6            �            1259    74015    grades_id_seq    SEQUENCE     o   CREATE SEQUENCE grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.grades_id_seq;
       public       postgres    false    6    170            �           0    0    grades_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE grades_id_seq OWNED BY grades.id;
            public       postgres    false    199            �            1259    73956    levels    TABLE     Y   CREATE TABLE levels (
    id double precision NOT NULL,
    description text NOT NULL
);
    DROP TABLE public.levels;
       public         postgres    false    6            �            1259    73967    levels_standards    TABLE     �   CREATE TABLE levels_standards (
    id integer NOT NULL,
    level_id double precision NOT NULL,
    standard_id integer NOT NULL
);
 $   DROP TABLE public.levels_standards;
       public         postgres    false    6            �            1259    73970 (   levels_standards_clusters_domains_grades    TABLE     �   CREATE TABLE levels_standards_clusters_domains_grades (
    level_id double precision NOT NULL,
    standard_cluster_domain_grade_id integer NOT NULL
);
 <   DROP TABLE public.levels_standards_clusters_domains_grades;
       public         postgres    false    6            �            1259    74019    levels_standards_id_seq    SEQUENCE     y   CREATE SEQUENCE levels_standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.levels_standards_id_seq;
       public       postgres    false    181    6            �           0    0    levels_standards_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE levels_standards_id_seq OWNED BY levels_standards.id;
            public       postgres    false    201            �            1259    73964    levels_transactions    TABLE     �   CREATE TABLE levels_transactions (
    id integer NOT NULL,
    advancement_time timestamp without time zone,
    level_id double precision NOT NULL,
    user_id integer NOT NULL
);
 '   DROP TABLE public.levels_transactions;
       public         postgres    false    6            �            1259    74017    levels_transactions_id_seq    SEQUENCE     |   CREATE SEQUENCE levels_transactions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.levels_transactions_id_seq;
       public       postgres    false    6    180            �           0    0    levels_transactions_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE levels_transactions_id_seq OWNED BY levels_transactions.id;
            public       postgres    false    200            �            1259    73869 	   passwords    TABLE     P   CREATE TABLE passwords (
    id integer NOT NULL,
    password text NOT NULL
);
    DROP TABLE public.passwords;
       public         postgres    false    6            �            1259    73991    passwords_id_seq    SEQUENCE     r   CREATE SEQUENCE passwords_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.passwords_id_seq;
       public       postgres    false    162    6            �           0    0    passwords_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE passwords_id_seq OWNED BY passwords.id;
            public       postgres    false    187            �            1259    73903    permissions    TABLE     T   CREATE TABLE permissions (
    id integer NOT NULL,
    permission text NOT NULL
);
    DROP TABLE public.permissions;
       public         postgres    false    6            �            1259    73999    permissions_id_seq    SEQUENCE     t   CREATE SEQUENCE permissions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.permissions_id_seq;
       public       postgres    false    6    168            �           0    0    permissions_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE permissions_id_seq OWNED BY permissions.id;
            public       postgres    false    191            �            1259    73911    permissions_users    TABLE     e   CREATE TABLE permissions_users (
    permission_id integer NOT NULL,
    user_id integer NOT NULL
);
 %   DROP TABLE public.permissions_users;
       public         postgres    false    6            �            1259    73897    rooms    TABLE     h   CREATE TABLE rooms (
    id integer NOT NULL,
    room text NOT NULL,
    school_id integer NOT NULL
);
    DROP TABLE public.rooms;
       public         postgres    false    6            �            1259    73997    rooms_id_seq    SEQUENCE     n   CREATE SEQUENCE rooms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.rooms_id_seq;
       public       postgres    false    6    167            �           0    0    rooms_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE rooms_id_seq OWNED BY rooms.id;
            public       postgres    false    190            �            1259    73877    schools    TABLE     Q   CREATE TABLE schools (
    id integer NOT NULL,
    school_name text NOT NULL
);
    DROP TABLE public.schools;
       public         postgres    false    6            �            1259    73995    schools_id_seq    SEQUENCE     p   CREATE SEQUENCE schools_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.schools_id_seq;
       public       postgres    false    163    6            �           0    0    schools_id_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE schools_id_seq OWNED BY schools.id;
            public       postgres    false    189            �            1259    73947 	   standards    TABLE     o   CREATE TABLE standards (
    id integer NOT NULL,
    standard text NOT NULL,
    description text NOT NULL
);
    DROP TABLE public.standards;
       public         postgres    false    6            �            1259    73953 !   standards_clusters_domains_grades    TABLE     �   CREATE TABLE standards_clusters_domains_grades (
    id integer NOT NULL,
    standard_id integer NOT NULL,
    cluster_domain_grade_id integer NOT NULL
);
 5   DROP TABLE public.standards_clusters_domains_grades;
       public         postgres    false    6            �            1259    74013 (   standards_clusters_domains_grades_id_seq    SEQUENCE     �   CREATE SEQUENCE standards_clusters_domains_grades_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ?   DROP SEQUENCE public.standards_clusters_domains_grades_id_seq;
       public       postgres    false    178    6            �           0    0 (   standards_clusters_domains_grades_id_seq    SEQUENCE OWNED BY     g   ALTER SEQUENCE standards_clusters_domains_grades_id_seq OWNED BY standards_clusters_domains_grades.id;
            public       postgres    false    198            �            1259    74011    standards_id_seq    SEQUENCE     r   CREATE SEQUENCE standards_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.standards_id_seq;
       public       postgres    false    177    6            �           0    0    standards_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE standards_id_seq OWNED BY standards.id;
            public       postgres    false    197            �            1259    73894    students    TABLE     K   CREATE TABLE students (
    id integer NOT NULL,
    teacher_id integer
);
    DROP TABLE public.students;
       public         postgres    false    6            �            1259    73920    subjects    TABLE     N   CREATE TABLE subjects (
    id integer NOT NULL,
    subject text NOT NULL
);
    DROP TABLE public.subjects;
       public         postgres    false    6            �            1259    74001    subjects_id_seq    SEQUENCE     q   CREATE SEQUENCE subjects_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.subjects_id_seq;
       public       postgres    false    6    171            �           0    0    subjects_id_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE subjects_id_seq OWNED BY subjects.id;
            public       postgres    false    192            �            1259    73891    teachers    TABLE     H   CREATE TABLE teachers (
    id integer NOT NULL,
    room_id integer
);
    DROP TABLE public.teachers;
       public         postgres    false    6            �            1259    73885    users    TABLE     �   CREATE TABLE users (
    id integer NOT NULL,
    username text,
    password text,
    first_name text,
    middle_name1 text,
    middle_name2 text,
    middle_name3 text,
    last_name text,
    school_id integer NOT NULL
);
    DROP TABLE public.users;
       public         postgres    false    6            �            1259    73993    users_id_seq    SEQUENCE     n   CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public       postgres    false    164    6            �           0    0    users_id_seq    SEQUENCE OWNED BY     /   ALTER SEQUENCE users_id_seq OWNED BY users.id;
            public       postgres    false    188            �           2604    74037    id    DEFAULT     \   ALTER TABLE ONLY clusters ALTER COLUMN id SET DEFAULT nextval('clusters_id_seq'::regclass);
 :   ALTER TABLE public.clusters ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    195    175            �           2604    74038    id    DEFAULT     z   ALTER TABLE ONLY clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('clusters_domains_grades_id_seq'::regclass);
 I   ALTER TABLE public.clusters_domains_grades ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    196    176            �           2604    74036    id    DEFAULT     Z   ALTER TABLE ONLY domains ALTER COLUMN id SET DEFAULT nextval('domains_id_seq'::regclass);
 9   ALTER TABLE public.domains ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    194    172            �           2604    74035    id    DEFAULT     h   ALTER TABLE ONLY domains_grades ALTER COLUMN id SET DEFAULT nextval('domains_grades_id_seq'::regclass);
 @   ALTER TABLE public.domains_grades ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    193    174            �           2604    74027    id    DEFAULT     ^   ALTER TABLE ONLY error_log ALTER COLUMN id SET DEFAULT nextval('error_log_id_seq'::regclass);
 ;   ALTER TABLE public.error_log ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    186    161            �           2604    74043    id    DEFAULT     V   ALTER TABLE ONLY games ALTER COLUMN id SET DEFAULT nextval('games_id_seq'::regclass);
 7   ALTER TABLE public.games ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    202    183                       2604    74045    id    DEFAULT     h   ALTER TABLE ONLY games_attempts ALTER COLUMN id SET DEFAULT nextval('games_attempts_id_seq'::regclass);
 @   ALTER TABLE public.games_attempts ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    204    185            �           2604    74044    id    DEFAULT     d   ALTER TABLE ONLY games_levels ALTER COLUMN id SET DEFAULT nextval('games_levels_id_seq'::regclass);
 >   ALTER TABLE public.games_levels ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    203    184            �           2604    74033    id    DEFAULT     X   ALTER TABLE ONLY grades ALTER COLUMN id SET DEFAULT nextval('grades_id_seq'::regclass);
 8   ALTER TABLE public.grades ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    199    170            �           2604    74042    id    DEFAULT     l   ALTER TABLE ONLY levels_standards ALTER COLUMN id SET DEFAULT nextval('levels_standards_id_seq'::regclass);
 B   ALTER TABLE public.levels_standards ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    201    181            �           2604    74041    id    DEFAULT     r   ALTER TABLE ONLY levels_transactions ALTER COLUMN id SET DEFAULT nextval('levels_transactions_id_seq'::regclass);
 E   ALTER TABLE public.levels_transactions ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    200    180            �           2604    74028    id    DEFAULT     ^   ALTER TABLE ONLY passwords ALTER COLUMN id SET DEFAULT nextval('passwords_id_seq'::regclass);
 ;   ALTER TABLE public.passwords ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    187    162            �           2604    74032    id    DEFAULT     b   ALTER TABLE ONLY permissions ALTER COLUMN id SET DEFAULT nextval('permissions_id_seq'::regclass);
 =   ALTER TABLE public.permissions ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    191    168            �           2604    74031    id    DEFAULT     V   ALTER TABLE ONLY rooms ALTER COLUMN id SET DEFAULT nextval('rooms_id_seq'::regclass);
 7   ALTER TABLE public.rooms ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    190    167            �           2604    74030    id    DEFAULT     Z   ALTER TABLE ONLY schools ALTER COLUMN id SET DEFAULT nextval('schools_id_seq'::regclass);
 9   ALTER TABLE public.schools ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    189    163            �           2604    74039    id    DEFAULT     ^   ALTER TABLE ONLY standards ALTER COLUMN id SET DEFAULT nextval('standards_id_seq'::regclass);
 ;   ALTER TABLE public.standards ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    177            �           2604    74040    id    DEFAULT     �   ALTER TABLE ONLY standards_clusters_domains_grades ALTER COLUMN id SET DEFAULT nextval('standards_clusters_domains_grades_id_seq'::regclass);
 S   ALTER TABLE public.standards_clusters_domains_grades ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    178            �           2604    74034    id    DEFAULT     \   ALTER TABLE ONLY subjects ALTER COLUMN id SET DEFAULT nextval('subjects_id_seq'::regclass);
 :   ALTER TABLE public.subjects ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    192    171            �           2604    74029    id    DEFAULT     V   ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    188    164            t          0    73938    clusters 
   TABLE DATA               (   COPY clusters (id, cluster) FROM stdin;
    public       postgres    false    175    2194   �       u          0    73944    clusters_domains_grades 
   TABLE DATA               K   COPY clusters_domains_grades (id, cluster_id, domain_grade_id) FROM stdin;
    public       postgres    false    176    2194   {�       �           0    0    clusters_domains_grades_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('clusters_domains_grades_id_seq', 1, false);
            public       postgres    false    196            �           0    0    clusters_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('clusters_id_seq', 9, true);
            public       postgres    false    195            q          0    73926    domains 
   TABLE DATA               &   COPY domains (id, domain) FROM stdin;
    public       postgres    false    172    2194   ��       s          0    73935    domains_grades 
   TABLE DATA               :   COPY domains_grades (id, domain_id, grade_id) FROM stdin;
    public       postgres    false    174    2194   #�       �           0    0    domains_grades_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('domains_grades_id_seq', 1, false);
            public       postgres    false    193            �           0    0    domains_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('domains_id_seq', 5, true);
            public       postgres    false    194            r          0    73932    domains_subjects 
   TABLE DATA               :   COPY domains_subjects (domain_id, subject_id) FROM stdin;
    public       postgres    false    173    2194   @�       f          0    73863 	   error_log 
   TABLE DATA               =   COPY error_log (id, error, error_time, username) FROM stdin;
    public       postgres    false    161    2194   ]�       �           0    0    error_log_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('error_log_id_seq', 1, false);
            public       postgres    false    186            |          0    73973    games 
   TABLE DATA               "   COPY games (id, game) FROM stdin;
    public       postgres    false    183    2194   z�       ~          0    73984    games_attempts 
   TABLE DATA               }   COPY games_attempts (id, game_attempt_time_start, game_attempt_time_end, user_id, level_id, score, time_warning) FROM stdin;
    public       postgres    false    185    2194   ��       �           0    0    games_attempts_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('games_attempts_id_seq', 1, false);
            public       postgres    false    204            �           0    0    games_id_seq    SEQUENCE SET     3   SELECT pg_catalog.setval('games_id_seq', 4, true);
            public       postgres    false    202            }          0    73981    games_levels 
   TABLE DATA               6   COPY games_levels (id, game_id, level_id) FROM stdin;
    public       postgres    false    184    2194   ��       �           0    0    games_levels_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('games_levels_id_seq', 39, true);
            public       postgres    false    203            o          0    73914    grades 
   TABLE DATA               $   COPY grades (id, grade) FROM stdin;
    public       postgres    false    170    2194   ��       �           0    0    grades_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('grades_id_seq', 13, true);
            public       postgres    false    199            x          0    73956    levels 
   TABLE DATA               *   COPY levels (id, description) FROM stdin;
    public       postgres    false    179    2194   #�       z          0    73967    levels_standards 
   TABLE DATA               >   COPY levels_standards (id, level_id, standard_id) FROM stdin;
    public       postgres    false    181    2194   �       {          0    73970 (   levels_standards_clusters_domains_grades 
   TABLE DATA               g   COPY levels_standards_clusters_domains_grades (level_id, standard_cluster_domain_grade_id) FROM stdin;
    public       postgres    false    182    2194   �       �           0    0    levels_standards_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('levels_standards_id_seq', 39, true);
            public       postgres    false    201            y          0    73964    levels_transactions 
   TABLE DATA               O   COPY levels_transactions (id, advancement_time, level_id, user_id) FROM stdin;
    public       postgres    false    180    2194   /�       �           0    0    levels_transactions_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('levels_transactions_id_seq', 1, false);
            public       postgres    false    200            g          0    73869 	   passwords 
   TABLE DATA               *   COPY passwords (id, password) FROM stdin;
    public       postgres    false    162    2194   L�       �           0    0    passwords_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('passwords_id_seq', 28, true);
            public       postgres    false    187            m          0    73903    permissions 
   TABLE DATA               .   COPY permissions (id, permission) FROM stdin;
    public       postgres    false    168    2194   ��       �           0    0    permissions_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('permissions_id_seq', 1, true);
            public       postgres    false    191            n          0    73911    permissions_users 
   TABLE DATA               <   COPY permissions_users (permission_id, user_id) FROM stdin;
    public       postgres    false    169    2194   �       l          0    73897    rooms 
   TABLE DATA               -   COPY rooms (id, room, school_id) FROM stdin;
    public       postgres    false    167    2194   %�       �           0    0    rooms_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('rooms_id_seq', 1, false);
            public       postgres    false    190            h          0    73877    schools 
   TABLE DATA               +   COPY schools (id, school_name) FROM stdin;
    public       postgres    false    163    2194   B�       �           0    0    schools_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('schools_id_seq', 1, false);
            public       postgres    false    189            v          0    73947 	   standards 
   TABLE DATA               7   COPY standards (id, standard, description) FROM stdin;
    public       postgres    false    177    2194   _�       w          0    73953 !   standards_clusters_domains_grades 
   TABLE DATA               ^   COPY standards_clusters_domains_grades (id, standard_id, cluster_domain_grade_id) FROM stdin;
    public       postgres    false    178    2194   Q�       �           0    0 (   standards_clusters_domains_grades_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('standards_clusters_domains_grades_id_seq', 1, false);
            public       postgres    false    198            �           0    0    standards_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('standards_id_seq', 24, true);
            public       postgres    false    197            k          0    73894    students 
   TABLE DATA               +   COPY students (id, teacher_id) FROM stdin;
    public       postgres    false    166    2194   n�       p          0    73920    subjects 
   TABLE DATA               (   COPY subjects (id, subject) FROM stdin;
    public       postgres    false    171    2194   ��       �           0    0    subjects_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('subjects_id_seq', 2, true);
            public       postgres    false    192            j          0    73891    teachers 
   TABLE DATA               (   COPY teachers (id, room_id) FROM stdin;
    public       postgres    false    165    2194   ��       i          0    73885    users 
   TABLE DATA               |   COPY users (id, username, password, first_name, middle_name1, middle_name2, middle_name3, last_name, school_id) FROM stdin;
    public       postgres    false    164    2194   ��       �           0    0    users_id_seq    SEQUENCE SET     4   SELECT pg_catalog.setval('users_id_seq', 1, false);
            public       postgres    false    188            3           2606    74077    clusters_domains_grades_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_pkey PRIMARY KEY (id);
 ^   ALTER TABLE ONLY public.clusters_domains_grades DROP CONSTRAINT clusters_domains_grades_pkey;
       public         postgres    false    176    176    2195            1           2606    74075    clusters_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY clusters
    ADD CONSTRAINT clusters_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.clusters DROP CONSTRAINT clusters_pkey;
       public         postgres    false    175    175    2195            -           2606    74227 %   domains_grades_domain_id_grade_id_key 
   CONSTRAINT     w   ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_domain_id_grade_id_key UNIQUE (domain_id, grade_id);
 ^   ALTER TABLE ONLY public.domains_grades DROP CONSTRAINT domains_grades_domain_id_grade_id_key;
       public         postgres    false    174    174    174    2195            /           2606    74073    domains_grades_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.domains_grades DROP CONSTRAINT domains_grades_pkey;
       public         postgres    false    174    174    2195            )           2606    74069    domains_pkey 
   CONSTRAINT     K   ALTER TABLE ONLY domains
    ADD CONSTRAINT domains_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.domains DROP CONSTRAINT domains_pkey;
       public         postgres    false    172    172    2195            +           2606    74071    domains_subjects_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_pkey PRIMARY KEY (domain_id, subject_id);
 P   ALTER TABLE ONLY public.domains_subjects DROP CONSTRAINT domains_subjects_pkey;
       public         postgres    false    173    173    173    2195                       2606    74049    error_log_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY error_log
    ADD CONSTRAINT error_log_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.error_log DROP CONSTRAINT error_log_pkey;
       public         postgres    false    161    161    2195            M           2606    74097    games_attempts_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.games_attempts DROP CONSTRAINT games_attempts_pkey;
       public         postgres    false    185    185    2195            G           2606    73980    games_game_key 
   CONSTRAINT     H   ALTER TABLE ONLY games
    ADD CONSTRAINT games_game_key UNIQUE (game);
 >   ALTER TABLE ONLY public.games DROP CONSTRAINT games_game_key;
       public         postgres    false    183    183    2195            K           2606    74095    games_levels_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.games_levels DROP CONSTRAINT games_levels_pkey;
       public         postgres    false    184    184    2195            I           2606    74093 
   games_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY games
    ADD CONSTRAINT games_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.games DROP CONSTRAINT games_pkey;
       public         postgres    false    183    183    2195            %           2606    74067    grades_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY grades
    ADD CONSTRAINT grades_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.grades DROP CONSTRAINT grades_pkey;
       public         postgres    false    170    170    2195            ;           2606    73963    levels_id_key 
   CONSTRAINT     F   ALTER TABLE ONLY levels
    ADD CONSTRAINT levels_id_key UNIQUE (id);
 >   ALTER TABLE ONLY public.levels DROP CONSTRAINT levels_id_key;
       public         postgres    false    179    179    2195            =           2606    74083    levels_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY levels
    ADD CONSTRAINT levels_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.levels DROP CONSTRAINT levels_pkey;
       public         postgres    false    179    179    2195            E           2606    74091 -   levels_standards_clusters_domains_grades_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_domains_grades_pkey PRIMARY KEY (level_id, standard_cluster_domain_grade_id);
 �   ALTER TABLE ONLY public.levels_standards_clusters_domains_grades DROP CONSTRAINT levels_standards_clusters_domains_grades_pkey;
       public         postgres    false    182    182    182    2195            A           2606    74089 )   levels_standards_level_id_standard_id_key 
   CONSTRAINT        ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_level_id_standard_id_key UNIQUE (level_id, standard_id);
 d   ALTER TABLE ONLY public.levels_standards DROP CONSTRAINT levels_standards_level_id_standard_id_key;
       public         postgres    false    181    181    181    2195            C           2606    74087    levels_standards_pkey 
   CONSTRAINT     ]   ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.levels_standards DROP CONSTRAINT levels_standards_pkey;
       public         postgres    false    181    181    2195            ?           2606    74085    levels_transactions_pkey 
   CONSTRAINT     c   ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.levels_transactions DROP CONSTRAINT levels_transactions_pkey;
       public         postgres    false    180    180    2195                       2606    73876    passwords_password_key 
   CONSTRAINT     X   ALTER TABLE ONLY passwords
    ADD CONSTRAINT passwords_password_key UNIQUE (password);
 J   ALTER TABLE ONLY public.passwords DROP CONSTRAINT passwords_password_key;
       public         postgres    false    162    162    2195                       2606    74047    passwords_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY passwords
    ADD CONSTRAINT passwords_pkey PRIMARY KEY (password);
 B   ALTER TABLE ONLY public.passwords DROP CONSTRAINT passwords_pkey;
       public         postgres    false    162    162    2195                       2606    73910    permissions_permission_key 
   CONSTRAINT     `   ALTER TABLE ONLY permissions
    ADD CONSTRAINT permissions_permission_key UNIQUE (permission);
 P   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_permission_key;
       public         postgres    false    168    168    2195            !           2606    74061    permissions_pkey 
   CONSTRAINT     S   ALTER TABLE ONLY permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.permissions DROP CONSTRAINT permissions_pkey;
       public         postgres    false    168    168    2195            #           2606    74063    permissions_users_pkey 
   CONSTRAINT     s   ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_pkey PRIMARY KEY (permission_id, user_id);
 R   ALTER TABLE ONLY public.permissions_users DROP CONSTRAINT permissions_users_pkey;
       public         postgres    false    169    169    169    2195                       2606    74059 
   rooms_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_pkey;
       public         postgres    false    167    167    2195                       2606    74119    rooms_school_id_room_key 
   CONSTRAINT     ]   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key UNIQUE (school_id, room);
 H   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_school_id_room_key;
       public         postgres    false    167    167    167    2195                       2606    74223    rooms_school_id_room_key1 
   CONSTRAINT     ^   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key1 UNIQUE (school_id, room);
 I   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_school_id_room_key1;
       public         postgres    false    167    167    167    2195                       2606    74225    rooms_school_id_room_key2 
   CONSTRAINT     ^   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key2 UNIQUE (school_id, room);
 I   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_school_id_room_key2;
       public         postgres    false    167    167    167    2195                       2606    74229    rooms_school_id_room_key3 
   CONSTRAINT     ^   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_room_key3 UNIQUE (school_id, room);
 I   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_school_id_room_key3;
       public         postgres    false    167    167    167    2195            	           2606    74053    schools_pkey 
   CONSTRAINT     K   ALTER TABLE ONLY schools
    ADD CONSTRAINT schools_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.schools DROP CONSTRAINT schools_pkey;
       public         postgres    false    163    163    2195                       2606    73884    schools_school_name_key 
   CONSTRAINT     Z   ALTER TABLE ONLY schools
    ADD CONSTRAINT schools_school_name_key UNIQUE (school_name);
 I   ALTER TABLE ONLY public.schools DROP CONSTRAINT schools_school_name_key;
       public         postgres    false    163    163    2195            7           2606    74231 ?   standards_clusters_domains_gr_standard_id_cluster_domain_gr_key 
   CONSTRAINT     �   ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_gr_standard_id_cluster_domain_gr_key UNIQUE (standard_id, cluster_domain_grade_id);
 �   ALTER TABLE ONLY public.standards_clusters_domains_grades DROP CONSTRAINT standards_clusters_domains_gr_standard_id_cluster_domain_gr_key;
       public         postgres    false    178    178    178    2195            9           2606    74081 &   standards_clusters_domains_grades_pkey 
   CONSTRAINT        ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_pkey PRIMARY KEY (id);
 r   ALTER TABLE ONLY public.standards_clusters_domains_grades DROP CONSTRAINT standards_clusters_domains_grades_pkey;
       public         postgres    false    178    178    2195            5           2606    74079    standards_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY standards
    ADD CONSTRAINT standards_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.standards DROP CONSTRAINT standards_pkey;
       public         postgres    false    177    177    2195                       2606    74055    students_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY students
    ADD CONSTRAINT students_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.students DROP CONSTRAINT students_pkey;
       public         postgres    false    166    166    2195            '           2606    74065    subjects_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY subjects
    ADD CONSTRAINT subjects_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.subjects DROP CONSTRAINT subjects_pkey;
       public         postgres    false    171    171    2195                       2606    74057    teachers_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY teachers
    ADD CONSTRAINT teachers_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.teachers DROP CONSTRAINT teachers_pkey;
       public         postgres    false    165    165    2195                       2606    74051 
   users_pkey 
   CONSTRAINT     G   ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public         postgres    false    164    164    2195                       2606    74221    users_username_school_id_key 
   CONSTRAINT     e   ALTER TABLE ONLY users
    ADD CONSTRAINT users_username_school_id_key UNIQUE (username, school_id);
 L   ALTER TABLE ONLY public.users DROP CONSTRAINT users_username_school_id_key;
       public         postgres    false    164    164    164    2195            X           2606    74150 '   clusters_domains_grades_cluster_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_cluster_id_fkey FOREIGN KEY (cluster_id) REFERENCES clusters(id);
 i   ALTER TABLE ONLY public.clusters_domains_grades DROP CONSTRAINT clusters_domains_grades_cluster_id_fkey;
       public       postgres    false    2096    176    175    2195            Y           2606    74155 ,   clusters_domains_grades_domain_grade_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY clusters_domains_grades
    ADD CONSTRAINT clusters_domains_grades_domain_grade_id_fkey FOREIGN KEY (domain_grade_id) REFERENCES domains_grades(id);
 n   ALTER TABLE ONLY public.clusters_domains_grades DROP CONSTRAINT clusters_domains_grades_domain_grade_id_fkey;
       public       postgres    false    174    176    2094    2195            V           2606    74140    domains_grades_domain_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_domain_id_fkey FOREIGN KEY (domain_id) REFERENCES domains(id);
 V   ALTER TABLE ONLY public.domains_grades DROP CONSTRAINT domains_grades_domain_id_fkey;
       public       postgres    false    172    2088    174    2195            W           2606    74145    domains_grades_grade_id_fkey    FK CONSTRAINT     ~   ALTER TABLE ONLY domains_grades
    ADD CONSTRAINT domains_grades_grade_id_fkey FOREIGN KEY (grade_id) REFERENCES grades(id);
 U   ALTER TABLE ONLY public.domains_grades DROP CONSTRAINT domains_grades_grade_id_fkey;
       public       postgres    false    2084    174    170    2195            T           2606    74130    domains_subjects_domain_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_domain_id_fkey FOREIGN KEY (domain_id) REFERENCES domains(id);
 Z   ALTER TABLE ONLY public.domains_subjects DROP CONSTRAINT domains_subjects_domain_id_fkey;
       public       postgres    false    173    172    2088    2195            U           2606    74135     domains_subjects_subject_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY domains_subjects
    ADD CONSTRAINT domains_subjects_subject_id_fkey FOREIGN KEY (subject_id) REFERENCES subjects(id);
 [   ALTER TABLE ONLY public.domains_subjects DROP CONSTRAINT domains_subjects_subject_id_fkey;
       public       postgres    false    171    2086    173    2195            e           2606    74215    games_attempts_level_id_fkey    FK CONSTRAINT     ~   ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);
 U   ALTER TABLE ONLY public.games_attempts DROP CONSTRAINT games_attempts_level_id_fkey;
       public       postgres    false    2106    185    179    2195            d           2606    74210    games_attempts_user_id_fkey    FK CONSTRAINT     {   ALTER TABLE ONLY games_attempts
    ADD CONSTRAINT games_attempts_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);
 T   ALTER TABLE ONLY public.games_attempts DROP CONSTRAINT games_attempts_user_id_fkey;
       public       postgres    false    185    164    2060    2195            b           2606    74200    games_levels_game_id_fkey    FK CONSTRAINT     w   ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_game_id_fkey FOREIGN KEY (game_id) REFERENCES games(id);
 P   ALTER TABLE ONLY public.games_levels DROP CONSTRAINT games_levels_game_id_fkey;
       public       postgres    false    184    2120    183    2195            c           2606    74205    games_levels_level_id_fkey    FK CONSTRAINT     z   ALTER TABLE ONLY games_levels
    ADD CONSTRAINT games_levels_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);
 Q   ALTER TABLE ONLY public.games_levels DROP CONSTRAINT games_levels_level_id_fkey;
       public       postgres    false    184    2106    179    2195            a           2606    74195 ?   levels_standards_clusters_dom_standard_cluster_domain_grad_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_dom_standard_cluster_domain_grad_fkey FOREIGN KEY (standard_cluster_domain_grade_id) REFERENCES standards_clusters_domains_grades(id);
 �   ALTER TABLE ONLY public.levels_standards_clusters_domains_grades DROP CONSTRAINT levels_standards_clusters_dom_standard_cluster_domain_grad_fkey;
       public       postgres    false    182    178    2104    2195            `           2606    74190 6   levels_standards_clusters_domains_grades_level_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_standards_clusters_domains_grades
    ADD CONSTRAINT levels_standards_clusters_domains_grades_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);
 �   ALTER TABLE ONLY public.levels_standards_clusters_domains_grades DROP CONSTRAINT levels_standards_clusters_domains_grades_level_id_fkey;
       public       postgres    false    179    182    2106    2195            ^           2606    74180    levels_standards_level_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);
 Y   ALTER TABLE ONLY public.levels_standards DROP CONSTRAINT levels_standards_level_id_fkey;
       public       postgres    false    181    179    2106    2195            _           2606    74185 !   levels_standards_standard_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_standards
    ADD CONSTRAINT levels_standards_standard_id_fkey FOREIGN KEY (standard_id) REFERENCES standards(id);
 \   ALTER TABLE ONLY public.levels_standards DROP CONSTRAINT levels_standards_standard_id_fkey;
       public       postgres    false    2100    181    177    2195            ]           2606    74175 !   levels_transactions_level_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_level_id_fkey FOREIGN KEY (level_id) REFERENCES levels(id);
 _   ALTER TABLE ONLY public.levels_transactions DROP CONSTRAINT levels_transactions_level_id_fkey;
       public       postgres    false    2106    180    179    2195            \           2606    74170     levels_transactions_user_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY levels_transactions
    ADD CONSTRAINT levels_transactions_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);
 ^   ALTER TABLE ONLY public.levels_transactions DROP CONSTRAINT levels_transactions_user_id_fkey;
       public       postgres    false    2060    164    180    2195            R           2606    74120 $   permissions_users_permission_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_permission_id_fkey FOREIGN KEY (permission_id) REFERENCES permissions(id);
 `   ALTER TABLE ONLY public.permissions_users DROP CONSTRAINT permissions_users_permission_id_fkey;
       public       postgres    false    169    168    2080    2195            S           2606    74125    permissions_users_user_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY permissions_users
    ADD CONSTRAINT permissions_users_user_id_fkey FOREIGN KEY (user_id) REFERENCES users(id);
 Z   ALTER TABLE ONLY public.permissions_users DROP CONSTRAINT permissions_users_user_id_fkey;
       public       postgres    false    2060    169    164    2195            Q           2606    74113    rooms_school_id_fkey    FK CONSTRAINT     o   ALTER TABLE ONLY rooms
    ADD CONSTRAINT rooms_school_id_fkey FOREIGN KEY (school_id) REFERENCES schools(id);
 D   ALTER TABLE ONLY public.rooms DROP CONSTRAINT rooms_school_id_fkey;
       public       postgres    false    167    163    2056    2195            [           2606    74165 >   standards_clusters_domains_grades_cluster_domain_grade_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_cluster_domain_grade_id_fkey FOREIGN KEY (cluster_domain_grade_id) REFERENCES clusters_domains_grades(id);
 �   ALTER TABLE ONLY public.standards_clusters_domains_grades DROP CONSTRAINT standards_clusters_domains_grades_cluster_domain_grade_id_fkey;
       public       postgres    false    2098    178    176    2195            Z           2606    74160 2   standards_clusters_domains_grades_standard_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY standards_clusters_domains_grades
    ADD CONSTRAINT standards_clusters_domains_grades_standard_id_fkey FOREIGN KEY (standard_id) REFERENCES standards(id);
 ~   ALTER TABLE ONLY public.standards_clusters_domains_grades DROP CONSTRAINT standards_clusters_domains_grades_standard_id_fkey;
       public       postgres    false    177    178    2100    2195            P           2606    74103    students_id_fkey    FK CONSTRAINT     e   ALTER TABLE ONLY students
    ADD CONSTRAINT students_id_fkey FOREIGN KEY (id) REFERENCES users(id);
 C   ALTER TABLE ONLY public.students DROP CONSTRAINT students_id_fkey;
       public       postgres    false    166    164    2060    2195            O           2606    74108    teachers_id_fkey    FK CONSTRAINT     e   ALTER TABLE ONLY teachers
    ADD CONSTRAINT teachers_id_fkey FOREIGN KEY (id) REFERENCES users(id);
 C   ALTER TABLE ONLY public.teachers DROP CONSTRAINT teachers_id_fkey;
       public       postgres    false    2060    165    164    2195            N           2606    74098    users_school_id_fkey    FK CONSTRAINT     o   ALTER TABLE ONLY users
    ADD CONSTRAINT users_school_id_fkey FOREIGN KEY (school_id) REFERENCES schools(id);
 D   ALTER TABLE ONLY public.users DROP CONSTRAINT users_school_id_fkey;
       public       postgres    false    2056    164    163    2195            t   N  x�mQ=S�0��_��J��wG�,wl�⨉�c��L)��m`a�������C�C�CC	Ā��	l�A�i�)X��e�.� �}�9�b�AV�6W�6��^ʣ�����*�I�։��a�".t*ّ�%�JmQ���ʹ��vfn�F�ar��Xؤ8��z�i{'�iM���b��t�l�N��+N0z���3����&�PQ�'K!焍ײ�>g!6w��#���N��1��'�=X�b:��zj)�$2��y<�8ꯜ�.�� �������θ�/�ԓv�b(�����1W5p��ڬ�����M�٧�D����|�y�ڼ�Ƙ���c      u      x������ � �      q   {   x�U�=�0@��>�'F$� Eb��,.��E� �z{"11��m���Bm"��:�Q�g��p���sh�B+:Γ������n��V� ��V��^�p.�%�E�g�]x���$�>ֈ��/*      s      x������ � �      r      x������ � �      f      x������ � �      |   <   x�3�t)�KO�ϋώON�O�7�2B2�2�t�/�+�	s�p$� ���@�)W� ��      ~      x������ � �      }   �   x�e�[��@���h{�w���c�ؑ�� U	LŰ����n�r�ܔzrW�ɻ�|<�J>���K��I��/�NqTl�o��h-N�_�+�����?�%䎘4���s���I�ys��;;�~_��a,Af%�]�Q^�EĞ{	�Ă����%t[%t1c�?�SB��W9�tx�S�^��/pë����Q���Q������G<:�ʹ�/x�S���5�8�. ��Рu      o   8   x��9�0 �zL���B!�q8�^+�Q�4��p1�,��	)�1�T�G�RU      x   �   x�}���0���)x�k)mG¦���	q�Q��oo�_52]��pw1�^�����a~.��K���1x>���+�#�
��`O��}��0����MR:�j�\ퟐ
�^j�8��i�<��v�8��4LNK��Ӑk���Ȟ��T�u�B��%����G�˨zF�(鸧�rOaB���!�^]Փ	U=��T�Ϟ��0!�5�.�K��~K��2      z   �   x�e��� ϸ�<�����ױ���6�m� ���kOE�'�'o�c���<��Hޕ�Z��Ǜ��Sy�a;�R{�I�������)"������k�Ҟ ��:)z�W��B���g�W��B?�N�xqC\'���"D��̦�L�F�׹�9��M��q,�A�4�FG�4�F�r����͡Q�<���y�@;h4� �;�7gС�s���{;�v�<>�y�qv�%��:;�v�F�h��F?��}�.�z      {      x������ � �      y      x������ � �      g   �   x��K�0Eѱ�b��01M��~%��s'���Gv�qT�x5�,�^g��u�6]-J��Śu�x/z0��H��-�Y��R�ܯ���!6���1� ���.J(uSBi���&%��WB��/A�����Mσ�?�d.�      m      x�3���v
����� z�      n      x������ � �      l      x������ � �      h      x������ � �      v   �  x��Vێ�6}����)����AQ�)�"-Ц�K�-�e6�!�U������?�/�!%ۛ]�dK�93s�"�������Ȯ\o;�9U,j�S�RP�V��#��r^��������Xkl�6޵J��ܑU�o���`����ے�`�`U��=ْ�3cCG�Rn����p��)ݩ�|��\e��(��x҂㗋\�B��!'=L����.HX �ż��F-�/�,.�8�J!�F�|v���9���o�$Q�!��U�;a�������}� '��|E~�n��t�M1UH/�;�H�dAv�||[��g�Sޗ�ogK&�	"sb��\���4�́�B��\�{t��}��<���P���+���5�\0�%V4a���9�ک�<MG��&W_�AB_�8�wD�ӆ����^�`�.�B�,S�}M>�����Aۀ,ԗ���nP������
�q�v=�.�������0����V��4ǯ�Bx��T���Yt��eC�a�VLhJ���,�ݘ����x�&nj~��������|�律�z������Y�����@�-A�D��V{�߲��'�I��s%�����A��OBi��,��+��|Ζ��Vw�V&�V�ih�%(��-���Ҭ#1>�L<_�<�Q��V����Mv��n �rTOn �Q���b��/�s�xň��~uZXW���
@���\��Q�[7��qx�Ga�����Gq*�i-h5ٟT*�#���*��D]�{�T�R����e{���ő0�����IEbf+㭪�@���=�/�"���N-շj%@�t���V#���5O��hl��˹�q��o��| �ʁ������/��̐�פ��j��d��4{���`�OU��l�?]�����Ǳ�WŌ܅|�2VPh�^��L+���C�&��VW���/��?)ݎ7�`�
���ג�5�қ5���8�"�:��;
2g���D5dk�!�z��j	t'���`�U�����|�e�]6l�\L���ǐ��E�r ������+\��mv�P+vOɾ�<��U��}��)C�6�R�|ܰ�� ���ñ�p�����ʽ�6~���շ��,	�?}R'~6Ḥ7>'c;�LT�IM(�� Y$���J`�-^$�[7�$����.�n���1鹊}�wY%��쭫h\ŀ�6����MSɽ�eRd|,r�P'	�l��`��f���r�����l���Q      w      x������ � �      k      x������ � �      p   3   x�3��M,�H�M,�L.�2�t�K��,�P�I�K/MLOUp,*)����� 7�j      j      x������ � �      i      x������ � �     