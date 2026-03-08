#
# Extend tt_content (ONLY columns, NEVER redefine table)
#
CREATE TABLE tt_content (
  n2ttextimage_title varchar(255) DEFAULT '' NOT NULL,
  n2tkeyfeature_title varchar(255) DEFAULT '' NOT NULL,
  n2tteacher_title varchar(255) DEFAULT '' NOT NULL,
  n2taboutus_title varchar(255) DEFAULT '' NOT NULL,
  n2tctasection_title varchar(255) DEFAULT '' NOT NULL,
  n2tgallerysection_title varchar(255) DEFAULT '' NOT NULL,
  n2ttestimonialslider_title varchar(255) DEFAULT '' NOT NULL,
  n2tupcomingevent_title varchar(255) DEFAULT '' NOT NULL,
  n2tclasses_title varchar(255) DEFAULT '' NOT NULL,
  bg_image int(11) unsigned DEFAULT '0' NOT NULL,
  buttontext varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL
);

#
# Table structure for table 'tx_kindergartensitepackage_n2ttextimage_item'
#
CREATE TABLE tx_kindergartensitepackage_n2ttextimage_item (
   uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,

  /* ✅ NEW: BACKGROUND COLOR */
  bgcolor varchar(20) DEFAULT '' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);


CREATE TABLE tx_kindergartensitepackage_n2tkeyfeature_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,


  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,

  /* ✅ NEW: BACKGROUND COLOR */
  bgcolor varchar(20) DEFAULT '' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);






#
# Table structure for table 'tx_kindergartensitepackage_n2tswiperbanner_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tswiperbanner_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);



#
# Table structure for table 'tx_kindergartensitepackage_n2tteacher_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tteacher_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);


#
# Table structure for table 'tx_kindergartensitepackage_n2taboutus_item'
#
CREATE TABLE tx_kindergartensitepackage_n2taboutus_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,
  buttontext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);



#
# Table structure for table 'tx_kindergartensitepackage_n2tctasection_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tctasection_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,
  buttontext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);



#
# Table structure for table 'tx_kindergartensitepackage_n2tgallerysection_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tgallerysection_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  header varchar(255) DEFAULT '' NOT NULL,
  subheader varchar(255) DEFAULT '' NOT NULL,
  bodytext text,
  buttontext text,

  link varchar(1024) DEFAULT '' NOT NULL,
  icon_identifier varchar(255) DEFAULT '' NOT NULL,
  button_link varchar(1024) DEFAULT '' NOT NULL,


  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);


#
# Table structure for table 'tx_kindergartensitepackage_n2ttestimonialslider_item'
#
CREATE TABLE tx_kindergartensitepackage_n2ttestimonialslider_item (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,

  tstamp int(11) DEFAULT '0' NOT NULL,
  crdate int(11) DEFAULT '0' NOT NULL,
  deleted tinyint(4) DEFAULT '0' NOT NULL,
  hidden tinyint(4) DEFAULT '0' NOT NULL,
  sorting int(11) DEFAULT '0' NOT NULL,

  sys_language_uid int(11) DEFAULT '0' NOT NULL,
  l10n_parent int(11) DEFAULT '0' NOT NULL,
  l10n_diffsource mediumblob,

  starttime int(11) DEFAULT '0' NOT NULL,
  endtime int(11) DEFAULT '0' NOT NULL,

  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

  name varchar(255) DEFAULT '' NOT NULL,
  role varchar(255) DEFAULT '' NOT NULL,
  bodytext text,

  PRIMARY KEY (uid),
  KEY parent (pid),
  KEY tt_content (tt_content)
);

#
# Table structure for table 'tx_kindergartensitepackage_n2tupcomingevent_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tupcomingevent_item (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    tstamp int(11) DEFAULT '0' NOT NULL,
    crdate int(11) DEFAULT '0' NOT NULL,
    cruser_id int(11) DEFAULT '0' NOT NULL,
    deleted tinyint(4) DEFAULT '0' NOT NULL,
    hidden tinyint(4) DEFAULT '0' NOT NULL,
    starttime int(11) DEFAULT '0' NOT NULL,
    endtime int(11) DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,

    t3_origuid int(11) DEFAULT '0' NOT NULL,

    day varchar(255) DEFAULT '' NOT NULL,
    month varchar(255) DEFAULT '' NOT NULL,
    title varchar(255) DEFAULT '' NOT NULL,
    time varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,

    icon_file int(11) unsigned DEFAULT '0',

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_kindergartensitepackage_n2tclasses_item'
#
CREATE TABLE tx_kindergartensitepackage_n2tclasses_item (

    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,



    PRIMARY KEY (uid),

    title varchar(255) DEFAULT '' NOT NULL,
    age varchar(255) DEFAULT '' NOT NULL,
    -- agecategory varchar(255) DEFAULT '' NOT NULL,
    classnumber varchar(255) DEFAULT '' NOT NULL,
    -- classsize varchar(255) DEFAULT '' NOT NULL,
    amount varchar(255) DEFAULT '' NOT NULL,
    -- pricing  varchar(255) DEFAULT '' NOT NULL,

    icon_file int(11) unsigned DEFAULT '0',
);
