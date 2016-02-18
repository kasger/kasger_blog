create table article(
aid int unsigned primary key auto_increment comment 'id',
aname varchar(50) not null default '未命名' comment '文章标题',
ainfo varchar(255) not null comment '文章摘要',
atext text not null comment '文章内容',
acreater int unsigned not null comment '创建者',
actime int unsigned not null comment '创建时间',
asort tinyint unsigned not null default 50 comment '文章排序',
ais_del tinyint(1) unsigned not null default 0 comment '删除标志',
ais_show tinyint(1) unsigned not null default 0 comment '是否公开'
)engine innodb character set utf8;

create table user(
uid int unsigned primary key auto_increment comment 'id',
uname varchar(20) not null comment '用户名',
upassword char(32) not null comment '密码'
)engine innodb character set utf8;

create table category(
cid int unsigned primary key auto_increment comment 'id',
cname varchar(20) not null comment '分类名',
cpid int unsigned not null comment 'pid',
csort tinyint unsigned not null default 50 comment '分类排序'
)engine innodb character set utf8;