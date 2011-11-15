CREATE TABLE IF NOT EXISTS `_replay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recordby` varchar(64) NOT NULL,
  `mapname` varchar(64) NOT NULL,
  `gamelength` varchar(64) NOT NULL,
  `date` varchar(64) NOT NULL,
  `gamespeed` varchar(64) NOT NULL,
  `replayname` varchar(64) NOT NULL,
  `teamsize` varchar(64) NOT NULL,
  `commentaire` text NOT NULL,
  `dateupload` varchar(64) NOT NULL DEFAULT '0',
  `version` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `replayname` (`replayname`)
);


CREATE TABLE IF NOT EXISTS `_replayPlayer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idreplay` int(11) NOT NULL,
  `nomplayer` varchar(64) NOT NULL,
  `team` int(11) NOT NULL,
  `apm` int(11) NOT NULL,
  `race` varchar(64) NOT NULL,
  `color` varchar(64) NOT NULL,
  `winner` varchar(64) NOT NULL,
  `apmpicture` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
);

CREATE TABLE IF NOT EXISTS `_replayComment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idreplay` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(64) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `_replayNote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `note` int(11) NOT NULL DEFAULT '0',
  `idreplay` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE _replayNote  ADD CONSTRAINT FK_idreplay  FOREIGN KEY (idreplay) REFERENCES _replay(id)  ON UPDATE CASCADE  ON DELETE CASCADE; 
ALTER TABLE _replayComment  ADD CONSTRAINT FK_idreplay  FOREIGN KEY (idreplay) REFERENCES _replay(id)  ON UPDATE CASCADE  ON DELETE CASCADE; 
ALTER TABLE _replayPlayer  ADD CONSTRAINT FK_idreplay  FOREIGN KEY (idreplay) REFERENCES _replay(id)  ON UPDATE CASCADE  ON DELETE CASCADE;
