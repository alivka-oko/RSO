-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 30 2022 г., 09:34
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rso`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int NOT NULL,
  `name_group` int NOT NULL,
  `year_of_creation` int NOT NULL,
  `id_commander` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- ССЫЛКИ ТАБЛИЦЫ `groups`:
--   `id_commander`
--       `students` -> `id`
--

-- --------------------------------------------------------

--
-- Структура таблицы `job_names`
--

CREATE TABLE `job_names` (
  `id_job` int NOT NULL,
  `name_job` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- ССЫЛКИ ТАБЛИЦЫ `job_names`:
--

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `first_name` int NOT NULL,
  `last_name` int NOT NULL,
  `phone` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_job` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- ССЫЛКИ ТАБЛИЦЫ `students`:
--   `id_job`
--       `job_names` -> `id_job`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `first_name` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` char(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- ССЫЛКИ ТАБЛИЦЫ `user`:
--

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `foto`, `email`, `username`, `password`) VALUES
('', '', NULL, '', '', '$2y$10$aqPHIgoHJGtFEc6ozr/y3eOAds0qvDXZKmyWlBf2mweFUoyqi7hmO'),
('', '', NULL, '', 'ivan', '$2y$10$RClVdIfOThXx246g9C.2V.6AniYdkP/dWDKb4DsVKj8x3ExEYCeTi'),
('aboba', 'aboba', NULL, 'alina@mail.ru', 'Alinaa', '$2y$10$7EXrokEol.HTUpZYGV6jaeUBJNOJxNBsZ7jdhxXxZXSl.fx1u2ZwS'),
('aboba', 'aboba', NULL, 'alina@mail.ru', 'Alinaa', '$2y$10$HUqjVIoFyWLmQXd2wqrTFeoRY3PZ0Yg0vO5Hsw6N.sqc2rR7A6W86'),
('Akina', 'Valova', NULL, 'alina@aamail.ru', 'Alinka', '$2y$10$dFWpfO1QFNy5ta/rUBsmdeVUHqs2QcT8cvyd4U5jE4IGoPx0RiHem'),
('', '', NULL, '', '', '$2y$10$d9uc0P9W.HHHeiKu1qTCFe5ga77VjCEKndJdSPHKT/YBsZJhxQYB6'),
('', '', NULL, '', '', '$2y$10$M4kSZKroZVs6I6dQ1E.DcOQvXrsa8MrE4/JO03gmx5VQwXs/gg0Nm'),
('', '', NULL, '', '', '$2y$10$u2yZ2wYjt6xxR9SZmfSiQ.DxP..E5jqce8cgxJUl6nFpP920Tths2'),
('', '', NULL, '', '', '$2y$10$lDDLhkmhKl/xbQWol8MHVunkl2QBVXMTAgrNPHqeoAG8/OwMPSeVW'),
('', '', NULL, '', '', '$2y$10$wJQOoah/DihYoQnoKVFva.53hJwrhcQZld5RZH8KiojG6qY8Xck2y'),
('', '', NULL, '', '', '$2y$10$VHQNDPQGmU3v7lLPB8Usyun/Tjq2JT77XaOFTfkSHdmj1ejscKKiO'),
('', '', NULL, '', '', '$2y$10$XMAgycVFYkspoHydHDN6AO87f5B/G0KKPuTgY.zPlI/lDQHbLlpbm'),
('', '', NULL, '', '', '$2y$10$/JLuQl0SRxhlKNT4ExBUJegUovu4Xje3iZqIpLp/Ytk8PHu.bXI6S'),
('', '', NULL, '', '', '$2y$10$ReoT3J4VcnIo5PegcKghpeEUExwIF0aJDoAx/OxcJQJnaI8sBSECa'),
('', '', NULL, '', '', '$2y$10$/Yts/ypb8JnAiGn5MLiojOKwJYFAGObJLkAJSFrAGPs2ahPDJ3XIC'),
('', '', NULL, '', '', '$2y$10$C/J2UT0DnXGgwGUW02DBxOp5YkE8833HpOwpAf2i6wgGMvqr7es86'),
('', '', NULL, '', '', '$2y$10$VzeDtkbbI1jDfMjBqi6ireAd2DTkstt4PpqkpA1q9eVpFm0b8bM4C'),
('', '', NULL, '', '', '$2y$10$wvqzqi2GW6V2WcEpWs76COWhM.bTXCkGERovHwGzeFJBOnAdA2gbO'),
('', '', NULL, '', '', '$2y$10$xk9D549p9ILces5yXYC/NesvAnvujCEZiCYGTgtLSUjPzFpgOGqza'),
('', '', NULL, '', '', '$2y$10$YT1PPEZKy3VdmxjF1YO.1.P0deignxT.M9SUQ239/5N8e.o.hwc/K'),
('', '', NULL, '', '', '$2y$10$HUl.wh4E85vCASUvGVbvw.RPv.ZJ3ilvt7flBBDQcA63DBsFB8YCK'),
('', '', NULL, '', '', '$2y$10$03vizHzLnMzANrO/oPiRMeDjyXVrF0MWS5v/MvRmh53sonYyQzlEe'),
('', '', NULL, '', '', '$2y$10$wnGTrCY5I/bdKt3RsTOHtum9TNGOrX/SewionVpfg2qbeD.8QAe7G'),
('', '', NULL, '', '', '$2y$10$7rSbzdRoDImpDnEbsYlr.uhZPV3yAyZA4fwnz2iV.wlYzlrUIPoLG'),
('', '', NULL, '', '', '$2y$10$roDgKjedvs518KAXWj5ple7DfzHcIPtOoF8aTrnaUTuianmUXWZtS'),
('', '', NULL, '', '', '$2y$10$O1up57vEaHaQ17RlkTfs9OU54N4szoscUWg1wtKGNEuW1F5nY6z.i'),
('', '', NULL, '', '', '$2y$10$J94.6wrDCMf3v6kXD3QPc.Y6Urcr.J2NE3dp9H11KWI8OyAsafO92'),
('', '', NULL, '', '', '$2y$10$UB/dNFK.BRIgbbiwrls5QunmoQHUvhZuon4OG4BFNCHiYeLXqOc2W'),
('', '', NULL, '', '', '$2y$10$L8AVntdvxX3qYQ1waK7Bw.SpdCSuWSt9WoxoMJlgGAn7WlxFJ1d8K'),
('', '', NULL, '', '', '$2y$10$3UxQBP7esQDbEzyTdpuC4OIo29IVDXzv.R/VCNxhlqtXEvm35CQUC'),
('', '', NULL, '', '', '$2y$10$ZfEXwtdpTtLPgcFydp0L3u00m4JncLaEttToAsqHD7FWvTH3YcI1i'),
('', '', NULL, '', '', '$2y$10$HxEgZ4JqRb9MDJL2Fh5NOe.DCaUkM5Rxt7RjIJnDw2.FF.fBxFqmm'),
('', '', NULL, '', '', '$2y$10$5wNNT10rN/ojHdtiPigXluGqQfvn8EQ51pILuckWNFUyRI6mopA6K'),
('', '', NULL, '', '', '$2y$10$8h25dHo6dvHsQUAZUswrTeJTqX67.vz9MNPnoOK6gCxplYen3LtEi'),
('', '', NULL, '', '', '$2y$10$XkKuNtseaGRZgAV6OPPC4u/mI.8nIAPGxKhK0PdPip/mds3pOVeWi'),
('', '', NULL, '', '', '$2y$10$zZ3IJtRE2ONxnaUBujQx0OuCwSwj1HZQ9YD89IEoMe5.KBIAp7s5S'),
('', '', NULL, '', '', '$2y$10$fNiD0onxCG9rfW4Lt2fVoO6VYT0hSLXUf3QJagy5Ct6tWCuJkQ5Ua'),
('', '', NULL, '', '', '$2y$10$9Q/FvSF/VzqPnby1id2sm.quJd6o7kTjUtN5bVCqX5FRooYqToqL6'),
('', '', NULL, '', '', '$2y$10$60gHhXJPRjs5wNO63jOp0OMB8xowJIn.W3Jnuk8eCOTlCE3cWGjYm'),
('', '', NULL, '', '', '$2y$10$QIMTJTmzahMAWCb3tJm3vu2Q8dm08wNEnstshmfXyWhXGgirjnysC'),
('', '', NULL, '', '', '$2y$10$Ac.TfB7UiR8EuXGqdCKiEeM15C7c8RilE76glLk3gyN6KKO7NH1ZW'),
('', '', NULL, '', '', '$2y$10$tTEJSpWO9h3UCZURACTWfuGNO7Mmjhz62ToQoZGfwrLUxPr85DWkK'),
('', '', NULL, '', '', '$2y$10$43CpoEqkwg.aiGyFNJUwW.L34hAcgSsztGRA.LCz5MFC0ThMPbLti'),
('', '', NULL, '', '', '$2y$10$0k.UAbBrto/bF4vcbx3fuOBE2gobiQpUsLJflwJSlfDkjtMcqK3i.'),
('', '', NULL, '', '', '$2y$10$NiMJeWLdTKRWsculFQxNgejg3b87lQ/o9Yd9qsfP.Mxv9DUF6JrCy'),
('', '', NULL, '', '', '$2y$10$KErn.Is5bCMWCNP9GAF2Rufl8JiMjdco.uFQC50zDgsVuJji/u5Te'),
('', '', NULL, '', '', '$2y$10$HyQNqxWEu0GjgIDyNjBww.Aexo02Hjh8QvMZfeaxYuMKsVQ9BWVMu'),
('', '', NULL, '', '', '$2y$10$m5OQHKkDfWlMreOpZ6jOIuZF0ITp8GhRGZ8IUP9nov8GjSmrFo3NC'),
('', '', NULL, '', '', '$2y$10$7xa4W7bE4TJBY6D8JpLquOwtOV7OQCCzoowWvP1smy2MGctosVgVO'),
('', '', NULL, '', '', '$2y$10$Uze0MtvpMH584o6rjL63Buk3CyqbIEmsfFcHTCvB7RGoMCMrnlVN.'),
('', '', NULL, '', '', '$2y$10$NhKCkhYZIUIYAZLCx06Jb.IxqYeJiVdH8UcWJcRyYdEQjellGJ9Pa'),
('', '', NULL, '', '', '$2y$10$YO5YARKml9Y8mVGQ/KiEGeUahpXyvhQGsdAMPl2CuZnio/yNKa6t6'),
('', '', NULL, '', '', '$2y$10$hQlcZLHymNDRjNbWVJjL/uHZOlav3WLrlkHiBNOdkNGw.yS8jrNP6'),
('', '', NULL, '', '', '$2y$10$aExxo3QZjKs9YHDlxATUh.N4pElOZPMWf6ez0fV3jd284EU7bIGx.'),
('', '', NULL, '', '', '$2y$10$JNll51l4mU8yPU0FER/c0u9N.ElYnuKjdnqHsHbRW1NKfEmB6.GOO'),
('', '', NULL, '', '', '$2y$10$a/8v6DJ8GtOZB.jGdvJZju1M3cEduncGRGoi5Pj.qPUmDF5AJyrty'),
('', '', NULL, '', '', '$2y$10$Pn6r5/V4jgkCrHEmbo9ZTeuLVYU6mPJrbGbunBYFq4/4QaBalK04O'),
('', '', NULL, '', '', '$2y$10$cISi7bN6GXhUlUW/rVWk2u2g6aZvT8JSwqEVolGnqtTlJq/dyUmIG'),
('', '', NULL, '', '', '$2y$10$aPls4qtfTd4NsVPNK1V3Nu1JF.ewtsuziCmyT1bnqOsQcZTHSKnYu'),
('', '', NULL, '', '', '$2y$10$M7Oc1Py7W7cH06Rw3Uk33uGkjfEE2r1tbO4XgBIHdtG39aQh9Pevy'),
('', '', NULL, '', '', '$2y$10$OCqsleIicdJy/kp/iPLNr.YwIIHDOyLV9ocx/6km3bKJen/arXQna'),
('', '', NULL, '', '', '$2y$10$CmfX58jQpEiEsqZEFX8o3OPlXfTdFD/9YmgPtuTNb60ojpxN0mZaK'),
('', '', NULL, '', '', '$2y$10$aoCeJgCs.3GuwH5kEhEsu..4Bmqa16YRmfgguBnPYulW3SwaDM1Y6'),
('', '', NULL, '', '', '$2y$10$R4zxBKc6ddXvoiTvpsusqOZMfStJPdIZYbFqHdSlhr4ZHxiLEq826'),
('', '', NULL, '', '', '$2y$10$nb6KPyrhU2N/hGhOm0ysAuJYu/KLMOOXQhqnLb1EYoHu.oF3x1lTq'),
('', '', NULL, '', '', '$2y$10$fR7.7jZKmDpVOYMBVXTv/uUfU0OMtQxGPZKXqpKUlsv.eg0h2rpKS'),
('', '', NULL, '', '', '$2y$10$BTpcF5v5Ukg.GR4StqrdLOxYulUKozqJCyDjjyotEvg7De7NKzcom'),
('', '', NULL, '', '', '$2y$10$oWCZkKa17ZGcN0eCAaiVSOu6SbIfRH6t.TSb0A1e/91aGZ7UMwfj.'),
('', '', NULL, '', '', '$2y$10$7hx5aJ0aBVyYGms2DdeMMO3I6ctfdaiqPJqss5EdlAdRhfXUWGAO2'),
('', '', NULL, '', '', '$2y$10$QT/XPT9ITetgJbkXK5rWz.Qlo.3feeBTkC/oxgsN8stjnUqayiAXm'),
('', '', NULL, '', '', '$2y$10$PLHfGz7OjFO01yMAM6CsHOs/8Xf0Peyn0Grcv3GSP6DU388WqUuOq'),
('', '', NULL, '', '', '$2y$10$ar.cMZRQxQhw3UCfm0..V.syy.WkPLHfGTr9/1wCYSFxyDZxbNcra'),
('', '', NULL, '', '', '$2y$10$Wovb6bjZJEidf/NzMpM92uAsw2oczlYZWXgpKTQWVwKz5tK.mJwBi'),
('', '', NULL, '', '', '$2y$10$aEcp2/N7LBejzu8FmZziF.lNI3VlTltrEUIKvtOhmXWk7fKCRGh4q'),
('', '', NULL, '', '', '$2y$10$k7KIaDBh2bFxsCrSXZIN4uAbMgnMB1KJLg9LI4EqE0WzhgXPBb7WO'),
('', '', NULL, '', '', '$2y$10$vq0r7viRUgOPVUTOi0HXn.AupNyCmHClamJCzdx5D2MWRnRMkcjE6'),
('', '', NULL, '', '', '$2y$10$yRcDzVMHHiOtUQaw3/tJNOCCIwNkNC6JRfMSQXx.lA9eCNfmDGEzm'),
('', '', NULL, '', '', '$2y$10$sa5jXfXGdETdP4jQ2khLh.uicf59O0sv1VjbUk.yA0xQgqZSVXlJa'),
('', '', NULL, '', '', '$2y$10$GEJZPGtbKmTEvDUTCnijNuUEWZD91unkV9HkPZLHXfVc88fW87v6q'),
('', '', NULL, '', '', '$2y$10$Z4mkmx7WusPZt0buOUNnouyA8l49L5wqQ3kFcoRHzW6lE4qNdoEG6'),
('', '', NULL, '', '', '$2y$10$QxSXanz.yLK9Pytr65jev.E4He.AM8QMH8yBxxS8W3KmZTQf1GCri'),
('', '', NULL, '', '', '$2y$10$3uwcEdhtflt5iulY5qoZnu2j7cac8ZdrwRrR.pB3PV3qyClNxcJJS'),
('', '', NULL, '', '', '$2y$10$V8KgJrox1HuPlLbyGtSl5.YUeMDUujlDvx.O/5DeLHBLOUkTvfKQm'),
('', '', NULL, '', '', '$2y$10$MY5i1lnqijBexQKooseFLOSl7nnM36Sb/SrOHuogcft.S950wlKyC'),
('', '', NULL, '', '', '$2y$10$U7O7iz6esMwqXzC5lFHqmO8KXhUkTuluUwJ1/t93ADgalfM2CCwKm'),
('', '', NULL, '', '', '$2y$10$2fmh29DkhMStUYp7QuFl3.tHtse1uLWe9XcXfUKRIJy/auECItB7u'),
('', '', NULL, '', '', '$2y$10$/AdklXKVn4Njf6p25tm3GOVkvtATM3QZacW7.6TqNKrHBjvWi/0VO'),
('', '', NULL, '', '', '$2y$10$yY4MktUogqvzdtC9n0meT.7Ws8F9SdaOWNda3OVKCtlB2Ys0akMjO'),
('', '', NULL, '', '', '$2y$10$8fTR9TqAbEDXF.0HyuMz1OROMHJSkJIPjf.bQIUj.CLPtrq46Hudq'),
('', '', NULL, '', '', '$2y$10$MlazRthh0Z3QmX8aA976GOMup.xfm6Y/x8Yy26Efw2B4oExlxRO/m'),
('', '', NULL, '', '', '$2y$10$st5u91/XmVNfYiyuds.DdOiA0DWET/3U5QT1YPJ3S3Z6pgmwyB4zu'),
('', '', NULL, '', '', '$2y$10$W03C.3rXcDWqIcJmsc8pHecJyatlPnMr7m2fTGufRq6IDdPLrVuiG'),
('', '', NULL, '', '', '$2y$10$.VWAxS8WiVjTbamQEEaon.XYXMchzsMd5.v1krWNoRI5kdxsJbLIa'),
('', '', NULL, '', '', '$2y$10$Lu3MfG3I8ACHkVc.dVaP1OkbWioc/DGO1LTRFHki7RgPyVOaZ4436'),
('', '', NULL, '', '', '$2y$10$SNLLTWRRqv0GPD3pKBWM1.atIQBVJJ8t2ajYs.Hh7das9QojTU64y'),
('', '', NULL, '', '', '$2y$10$z70en3/ic205Dr9Iz7DNfOVDvC91aMqj4ZeCZVHisKZZfCGnaZnLi'),
('', '', NULL, '', '', '$2y$10$rsm9JzyHTNOvlpu9IsxQ5ucXL3t9.h3oLlGF1f/.jlUJD.9jWrkRy'),
('aboba', 'aboba', NULL, 'alina@mail.ru', 'Alinaa', '$2y$10$uanQEXiZ3R5gY2wgiXI6jODEH.Qc1qvW2KKjaQFwmNeNBZvv6oCV6');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `groups_ibfk_1` (`id_commander`);

--
-- Индексы таблицы `job_names`
--
ALTER TABLE `job_names`
  ADD PRIMARY KEY (`id_job`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_job` (`id_job`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_commander`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `id_job` FOREIGN KEY (`id_job`) REFERENCES `job_names` (`id_job`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
