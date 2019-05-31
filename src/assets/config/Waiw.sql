#------------------------------------------------------------
#        Script
MySQL.
#------------------------------------------------------------

# IDEMPOTENCE

DROP DATABASE IF EXISTS WAIW;
CREATE DATABASE WAIW
CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE WAIW;


#------------------------------------------------------------
#
Table:
POST
#------------------------------------------------------------

CREATE TABLE POST
(
        post_id Int
        Auto_increment  NOT NULL ,
        member_id           Int NOT NULL ,
        post_movie_title    Varchar
        (255) NOT NULL ,
        post_movie_synopsis Text NOT NULL ,
        post_movie_director Varchar
        (255) NOT NULL ,
        post_movie_actors   Varchar
        (255) NOT NULL ,
        post_movie_release  Date NOT NULL ,
        post_movie_poster   Varchar
        (255) DEFAULT NULL ,
        Post_date           Datetime NOT NULL
	, PRIMARY KEY
        (post_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#
        Table:
        MEMBER
#------------------------------------------------------------

        CREATE TABLE MEMBER
        (
                member_id Int
                Auto_increment  NOT NULL ,
        member_pseudo   Varchar
                (255) NOT NULL ,
        member_password Varchar
                (255) NOT NULL ,
        member_mail     Varchar
                (255) NOT NULL ,
        member_avatar   Varchar
                (255) DEFAULT NULL
	, PRIMARY KEY
                (member_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#
                Table:
                COMMENT
#------------------------------------------------------------

                CREATE TABLE COMMENT
                (
                        comment_id Int NOT NULL ,
                        comment_post Int NOT NULL ,
                        comment_member Int NOT NULL ,
                        comment_content Varchar (255) NOT NULL ,
                        PRIMARY KEY (comment_id),
                        CONSTRAINT COMMENT_POST_FK FOREIGN KEY (comment_post) REFERENCES POST(post_id) ON DELETE CASCADE,
                        CONSTRAINT COMMENT_MEMBER_FK FOREIGN KEY (comment_member) REFERENCES MEMBER(member_id) ON DELETE CASCADE
                )
                ENGINE=InnoDB;


#------------------------------------------------------------
#
                Table:
                GENRE

                CREATE TABLE GENRE
                (
                        genre_id Int
                        Auto_increment  NOT NULL ,
        genre_name Varchar
                        (255) NOT NULL
	, PRIMARY KEY
                        (genre_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
#
                        Table:
                        LIKE
#------------------------------------------------------------

                        CREATE TABLE LIKED
                        (
                                member_id Int NOT NULL ,
                                post_id Int NOT NULL ,
                                sentiment Tinyint NOT NULL
	,
                                CONSTRAINT LIKED_PK PRIMARY KEY (post_id,member_id)

	,
                                CONSTRAINT LIKED_POST_FK FOREIGN KEY (post_id) REFERENCES POST(post_id)
	,
                                CONSTRAINT LIKED_MEMBER_FK FOREIGN KEY (member_id) REFERENCES MEMBER(member_id)
                        )
                        ENGINE=InnoDB;


#------------------------------------------------------------
#
                        Table:
                        CATEGORIZATION
#------------------------------------------------------------

                        CREATE TABLE CATEGORIZATION
                        (
                                post_id Int NOT NULL ,
                                genre_id Int NOT NULL
	,
                                CONSTRAINT CATEGORIZATION_PK PRIMARY KEY (genre_id,post_id)

	,
                                CONSTRAINT CATEGORIZATION_GENRE_FK FOREIGN KEY (genre_id) REFERENCES GENRE(genre_id)
	,
                                CONSTRAINT CATEGORIZATION_POST_FK FOREIGN KEY (post_id) REFERENCES POST(post_id)
                        )
                        ENGINE=InnoDB;

