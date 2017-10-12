--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `FIO`, `dt_create`) VALUES
(1, 'user1', 'user1', 'FIO user1', '2017-10-01 00:00:00'),
(2, 'user2', 'user2', 'Fio user2', '2017-10-03 00:00:00');


--
-- Дамп данных таблицы `emails`
--

INSERT INTO `emails` (`id`, `user_id`, `emails`, `num`) VALUES
(1, 1, 'emailUser1@mail.ru', '1'),
(2, 1, 'email2User1@mail.ru', '2');

-- --------------------------------------------------------

